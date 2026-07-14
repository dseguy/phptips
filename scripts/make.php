<?php

include 'vendor/autoload.php';

use samdark\sitemap\Sitemap;
use samdark\sitemap\Index;

// ---------------------------------------------------------------------------
// Language configuration
// Usage: php scripts/make.php            (English, default)
//        php scripts/make.php --lang=fr  (French)
// ---------------------------------------------------------------------------
$lang = 'en';
foreach ($argv as $arg) {
    if (str_starts_with($arg, '--lang=')) {
        $lang = substr($arg, 7);
    }
}

// ---------------------------------------------------------------------------
// Path configuration — everything derived from $lang
// EN docs stay in docs/ for backward compatibility.
// Any other language uses docs/<lang>/ as its source directory.
// ---------------------------------------------------------------------------
if ($lang === 'en') {
    $docsGlob        = 'docs/*.json';
    $tipsDir         = 'tips';
    $tipSectionIn    = 'tipSection.rst.in';
    $tipSectionOut   = 'tipSection.rst';
    $authorIndexFile = 'authorindex.rst';
    $phpErrorFile    = 'phperrorindex.rst';
    $confFile        = 'conf.py';
    $sitemapFile     = './sitemap.xml';
    $indexnowFile    = 'indexnow.php';
    $buildLogFile    = 'build.log';
    $imageRelPath    = '../images/';   // relative to tips/*.rst
    $baseUrl         = 'https://php-tips.readthedocs.io/en/latest';
    $inLanguage      = 'en-US';
    $ogLocale        = 'en';
} else {
    $docsGlob        = "docs/$lang/*.json";
    $tipsDir         = "$lang/tips";
    $tipSectionIn    = "$lang/tipSection.rst.in";
    $tipSectionOut   = "$lang/tipSection.rst";
    $authorIndexFile = "$lang/authorindex.rst";
    $phpErrorFile    = "$lang/phperrorindex.rst";
    $confFile        = "$lang/conf.py";
    $sitemapFile     = "./$lang/sitemap.xml";
    $indexnowFile    = "$lang/indexnow.php";
    $buildLogFile    = "$lang/build.log";
    $imageRelPath    = '../../images/'; // relative to <lang>/tips/*.rst
    $baseUrl         = "https://php-tips.readthedocs.io/$lang/latest";
    $inLanguage      = match ($lang) {
        'fr'    => 'fr-FR',
        default => 'en-US',
    };
    $ogLocale        = $lang;
}

// Make $buildLogFile available to buildlog()
$GLOBALS['buildLogPath'] = $buildLogFile;

const LEVEL_UNDERLINE = '-';
const LEVEL_H2 = '_';

// create sitemap
$sitemap = new Sitemap($sitemapFile);
$sitemap->addItem($baseUrl . 'index.html');
$sitemap->addItem($baseUrl . 'introduction.html');
$sitemap->addItem($baseUrl . 'authorindex.html');
$sitemap->addItem($baseUrl . 'phperrorindex.html');
$indexnow = [];
$llmtxt = ['#PHP Tips and tricks',
'PHP tips and tricks is a treasure trove of PHP pieces of code. It collects all those quick one-liners, unexpected behaviors, hidden features and strange things that are concealed in the dark corners of PHP.',
'',
'##Entries',
];

if (!file_exists($tipsDir)) {
    mkdir($tipsDir, 0755, true);
}

fopen($buildLogFile, "w+");

$phptips   = [];
$phptips[] = "PHP tips and tricks";
$phptips[] = "-------------------";
$phptips[] = "";

$files = glob($docsGlob);
//$files = array_slice($files, 0, 10);

// Exclude skeleton files
$files = array_diff($files, ['docs/skeleton.json', "docs/$lang/skeleton.json"]);

$images = glob('images/*.png');

// Cross-check: every JSON must have a corresponding image (by image field, not filename)
// We only warn — do not fatal — so multi-lang images can live without an EN counterpart.
$f = array_map(fn($file) => basename($file, '.json'), $files);
$i = array_map(fn($image) => substr($image, 7, -4), $images);
if ($diff = array_diff($f, $i)) {
    print "Missing files in images : " . implode(', ', $diff) . "\n";
}
// Reverse check omitted intentionally: some images are shared across languages.

const FIELDS = [
    "image",
    "date",
    "title",
    "content",
    "seeAlso",
    "tags",
    "features",
    "3v4l",
    "author",
    "contact",
    "file",
    "phpError",
    "code",
];

$stats        = ['author' => 0];
$errors       = 0;
$tips         = [];
$phpError     = [];
$features     = [];
$anchors      = [];
$images_used  = [];
$authorContact = [];

foreach ($files as $file) {
    $tip = json_decode(file_get_contents($file));

    if ($tip === null) {
        print("Warning : $file is not valid JSON");
        die();
    }

    $tip->file = $file;

    if (isset($tips[$tip->date])) {
        buildlog("Warning : $tip->date is already set in $file");
        ++$errors;
        continue;
    }
    $tips[$tip->date] = $tip;

    if (preg_match('/\\n /', $tip->content)) {
        buildlog("Warning : some new lines are followed by spaces in $file");
        ++$errors;
    }

    if (preg_match('/[?!.]\s+\\n/', $tip->content)) {
        buildlog("Warning : some new sentences are followed by spaces in $file");
        ++$errors;
        continue;
    }

    if (empty($tip->author) && ($c = count(explode(' ', $tip->content))) < 40) {
        buildlog("Warning : $c words content in $file");
        ++$errors;
        continue;
    }

    if (preg_match('/[^`]`[^`]/', $tip->content)) {
        buildlog("Warning : code formatting needs double `` in $file");
        ++$errors;
        continue;
    }

    if (empty($tip->seeAlso)) {
        $sandbox = false;
    } else {
        $sandbox = false;
        foreach ($tip->seeAlso as $title => $link) {
            if (empty($title)) {
                buildlog("Warning : No title in seeAlso in $file");
                ++$errors;
            }
            if (empty($link)) {
                buildlog("Warning : No link in seeAlso in $file");
                ++$errors;
            }
            if (str_contains($link, '3v4l.org')) {
                buildlog("Warning : 3v4l is in seeAlso in $file");
                ++$errors;
            }
        }
    }

    if (isset($tip->{'3v4l'}) && (empty($tip->{'3v4l'}) )) {
        buildlog("Warning : 3v4l is empty in $file");
        ++$errors;
    } elseif (isset($tip->{'3v4l'}) && is_string($tip->{'3v4l'})) {
        buildlog("Warning : 3v4l is a string in $file");
        ++$errors;
    } elseif (isset($tip->{'3v4l'}) && is_array($tip->{'3v4l'})) {
        foreach ($tip->{'3v4l'} as $name => $url) {
            if (empty($name)) {
                buildlog("Empty title on 3v4l in $file");
                ++$errors;
            }
            if (empty($url)) {
                buildlog("Empty link on 3v4l in $file");
                ++$errors;
            }
        }
    }

    if (str_contains($tip->content, '#PHP')) {
        buildlog("Warning : No need for #PHP in $file");
        ++$errors;
        continue;
    }

    if (!in_array(substr($tip->content, -1), ['.', '?', '!'], true)) {
        buildlog("Warning : content doesn't finish with . in $file");
        ++$errors;
    }

    if (!isset($tip->tips[$tip->date])) {
        // already inserted above
    }

    if (!isset($tip->tags)) {
        buildlog("Warning : $file has no tags entry");
        ++$errors;
    } elseif (!is_array($tip->tags)) {
        buildlog("Warning : $file has no tags entry");
        ++$errors;
    } elseif (empty($tip->tags[0])) {
        buildlog("Warning : $file has empty tags");
        ++$errors;
    }

    if (isset($images_used[$tip->image])) {
        buildlog("Warning : $tip->image is already used in {$images_used[$tip->image]}");
        ++$errors;
        continue;
    } else {
        $images_used[$tip->image] = $file;
    }

    if (strlen($tip->title) > 70) {
        buildlog("Warning : Title is too long in $file");
    }

    if (!isset($tip->features)) {
        buildlog("Warning : missing features in $file");
    } elseif (!is_array($tip->features)) {
        buildlog("Warning : features is not an array in $file");
    } elseif (empty($tip->features)) {
        buildlog("Warning : no features in $file");
        ++$errors;
    } else {
        $tip->features = array_map(strtolower(...), $tip->features);

        foreach ($tip->features as $feature) {
            if (!file_exists('../analyzeG3/human/en/Features/' . $feature . '.ini')) {
                buildlog("Warning : feature '$feature' does not exist in $file");
                ++$errors;
                continue;
            }
        }

        if (count($tip->features) <= 1) {
            buildlog("Warning : only one features in $file");
            ++$errors;
        }

        if (count($tip->features) !== count(array_unique($tip->features))) {
            buildlog("Warning : duplicate entries in features in $file");
            ++$errors;
        }

        $features[] = $tip->features;
    }

    // Title validation — some checks are English-specific
    if ($lang === 'en') {
        if (substr_count($tip->title, '_') > 1 &&
            !preg_match('/(file_put_contents|__FILE__|__get|array_find_keys|array_find|http_build_query|array_merge_recursive|parse_str|private|func_get_arg|array_intersect_uassoc_insensitive|file_append_contents|empty|isset|__invoke|array_map_assoc)/', $tip->title)) {
            buildlog("Warning : Too many _ in title '$tip->title' in $file");
        }

        if (substr_count($tip->title, ' ') === 0) {
            buildlog("Warning : Suspicious lack of space in title '$tip->title' in $file");
            die("Warning : Suspicious lack of space in title '$tip->title' in $file");
        }

        if (ucwords(strtolower($tip->title)) != $tip->title &&
            !preg_match('/(php:\/\/|CSV|DNF|e |max\(\) |eval\(\) |__FILE__|SQL|expm1|htmlemtities|log1p|defined|preg_split|isset|empty|echo|new|mixed|get_class|URL|GLOBALS|array|intval|private|NAN|parse_str|self|parent|static|namespace|list|http_build_query|compact|func_get_args|strict_types|stdClass|foreach|PHP|ReturnTypeWillChange|strpos|readonly|DTO|VO|null|is_a|instanceof|file_put_contents|try|finally|catch|file_append_contents|glob|class_exists)/', $tip->title)) {
            buildlog("Warning : Not First Upper Cased in $file");
            ++$errors;
        }
    } else {
        // Non-English: only check that there is at least one space (not a keyword collision)
        if (substr_count($tip->title, ' ') === 0) {
            buildlog("Warning : Suspicious lack of space in title '$tip->title' in $file");
            die("Warning : Suspicious lack of space in title '$tip->title' in $file");
        }
    }

    if (strlen($tip->title) > 50) {
        buildlog("Warning : $tip->title is too long (" . strlen($tip->title) . ") in $file");
        ++$errors;
        continue;
    }

    if (!empty($tip->author)) {
        if (isset($authorContact[$tip->author]) && $authorContact[$tip->author] !== $tip->contact) {
            buildlog("Warning : $tip->author has too many contacts (" . $authorContact[$tip->author] . " && " . $tip->contact . ") in $file");
            ++$errors;
        } else {
            $authorContact[$tip->author] = $tip->contact;
        }
    }

    if (count($tip->tags) != count(array_unique($tip->tags))) {
        buildlog("Duplicate entries in tags in $file");
        ++$errors;
    }

    if (!isset($tip->phpError)) {
        // error but not yet
    } elseif (!$tip->phpError instanceof stdClass) {
        buildlog("Warning : \$tip->phpError should be a hash in $file");
        ++$errors;
    } else {
        $tip->phpError = (array) $tip->phpError;
        foreach ($tip->phpError as $name => $id) {
            if (empty($name)) {
                buildlog("Empty title on phpError in $file");
                ++$errors;
                unset($tip->phpError[$name]);
                continue;
            }

            if (!file_exists('../php-errors/errors/' . $id . '.ini')) {
                buildlog("Warning : phpError '$id' does not exists in $file");
                ++$errors;
            }
        }
    }

    $fields = array_keys((array) $tip);
    if ($diff = array_diff($fields, FIELDS)) {
        buildlog("Extra " . count($diff) . " fields: " . implode(', ', $diff) . " in file $file");
        print("Extra " . count($diff) . " fields: " . implode(', ', $diff) . " in file $file");
        ++$errors;
        die();
    }
    if ($diff = array_diff(FIELDS, $fields)) {
        buildlog("Missing " . count($diff) . " fields: " . implode(', ', $diff) . " in file $file");
        ++$errors;
    }

    $tip->content = str_replace('#PHP', 'PHP', $tip->content);

    $tips[$tip->date] = $tip;
}

krsort($tips);

$tags    = [];
$tiplist = [];

foreach ($tips as $tip) {
    $phptip = [];
    $name   = str_replace('.png', '', $tip->image);

    if ($e = check($tip, 'docs/' . str_replace('.json', '.png', $tip->image))) {
        print "Error in file {$tip->file} : $e\n";
        ++$errors;
        continue;
    }

    $anchor = make_anchor($tip->title);

    $phptip[] = '.. _' . $anchor . ':' . PHP_EOL;
    if (isset($anchors[$anchor])) {
        buildlog("Duplicate entry for $tip->title in {$tip->file}");
    }
    $anchors[$anchor] = 1;
    $phptip[] = $tip->title;
    $phptip[] = str_repeat(LEVEL_UNDERLINE, strlen($tip->title));
    $phptip[] = '';

    $title = str_replace('`', '', $tip->title);

    $phptip[] = '.. meta::';
    $phptip[] = '	:description:';
    $first    = preg_split('/[\.\?;' . PHP_EOL . ']/', $tip->content)[0];
    $phptip[] = '		' . $title . ': ' . $first . '.';

    $phptip[] = '	:twitter:card: summary_large_image';
    $phptip[] = '	:twitter:site: @exakat';
    $phptip[] = '	:twitter:title: ' . $title;
    $phptip[] = '	:twitter:description: ' . $tip->title . ': ' . $first;
    $phptip[] = '	:twitter:creator: @exakat';
    $phptip[] = '	:twitter:image:src: ' . $baseUrl . '/_images/' . $tip->image;

    $phptip[] = '	:og:image: ' . $baseUrl . '/_images/' . $tip->image;
    $phptip[] = '	:og:title: ' . $title;
    $phptip[] = '	:og:type: article';
    $phptip[] = '	:og:description: ' . $first;
    $phptip[] = '	:og:url: ' . $baseUrl . '/tips/' . $name . '.html';
    $phptip[] = '	:og:locale: ' . $ogLocale;

    $phptip[] = '';

    $phptip[] = '.. raw:: html';
    $phptip[] = '';

    $authorName = !empty($tip->author) ? $tip->author : 'Damien Seguy';
    $authorId   = !empty($tip->contact) && filter_var($tip->contact, FILTER_VALIDATE_URL)
        ? $tip->contact
        : 'https://www.exakat.io/#' . preg_replace('/\s+/', '-', strtolower($authorName));

    $person = [
        '@type' => 'Person',
        '@id'   => $authorId,
        'name'  => $authorName,
        'url'   => $authorId,
    ];

    if (!empty($tip->author)) {
        $person['sameAs'] = [$tip->contact];
    } else {
        $person['sameAs'] = [
            'https://x.com/exakat',
            'https://www.linkedin.com/in/damienseguy',
        ];
        $person['worksFor'] = [
            '@type' => 'Organization',
            '@id'   => 'https://www.exakat.io/',
            'name'  => 'Exakat',
        ];
    }

    $ldjson = [
        '@context' => 'https://schema.org',
        '@graph'   => [
            [
                '@type'           => 'WebPage',
                '@id'             => "$baseUrl/tips/$name.html",
                'url'             => "$baseUrl/tips/$name.html",
                'name'            => $title,
                'isPartOf'        => ['@id' => 'https://www.exakat.io/'],
                'datePublished'   => date('r', filectime($tip->file)),
                'dateModified'    => date('r', filemtime($tip->file)),
                'description'     => $first,
                'inLanguage'      => $inLanguage,
                'author'          => ['@id' => $authorId],
                'potentialAction' => [
                    [
                        '@type'  => 'ReadAction',
                        'target' => ["$baseUrl/tips/$name.html"],
                    ],
                ],
            ],
            $person,
            [
                '@type'       => 'WebSite',
                '@id'         => 'https://www.exakat.io/',
                'url'         => 'https://www.exakat.io/',
                'name'        => 'Exakat',
                'description' => 'Smart PHP static analysis',
                'inLanguage'  => $inLanguage,
            ],
        ],
    ];

    $phptip[] = '	<script type="application/ld+json">' . json_encode($ldjson) . '</script>';
    $phptip[] = '';

    if (!empty($tip->author)) {
        $author   = '`' . $tip->author . ' <' . $tip->contact . '>`_';
        $phptip[] = 'By ' . $author . PHP_EOL;
        $authors[$author][] = '    * :ref:`' . $anchor . '`';
    }

    if (isset($tip->code)) {
        $phptip[] = '.. code-block:: php' . PHP_EOL . PHP_EOL .
                        '   ' . prepare_code_for_alt($tip->code) . PHP_EOL;
        $phptip[] = '';
    } else {
        $phptip[] = '.. image:: ' . $imageRelPath . $tip->image . PHP_EOL;
        $phptip[] = '';
    }

    $phptip[] = str_replace("\n", "\n\n", $tip->content);

    if (isset($tip->{'3v4l'}->{''})) {
        buildlog("Warning : 3v4l is empty in $name");
        die('Error with 3v4l in ' . $name);
        ++$errors;
    }
    $links = array_merge((array) $tip->seeAlso, (array) ($tip->{'3v4l'} ?? []));
    if (empty($links)) {
        buildlog("Warning : seeAlso & 3v4l are empty in $name");
        ++$errors;
    } else {
        $phptip[] = '';
        $phptip[] = 'See Also';
        $phptip[] = str_repeat(LEVEL_H2, strlen('See Also'));
        $phptip[] = '';
        foreach ($links as $title => $link) {
            if (str_contains($link, '3v4l')) {
                $phptip[] = '* `' . $title . ' <' . $link . '>`_ [Try me]';
            } else {
                $phptip[] = '* `' . $title . ' <' . $link . '>`_';
            }
        }
        $phptip[] = '';
    }

    if (!empty($tip->phpError)) {
        $phptip[] = '';
        $phptip[] = 'PHP Error Messages';
        $phptip[] = str_repeat(LEVEL_H2, strlen('PHP Error Messages'));
        $phptip[] = '';
        foreach ($tip->phpError as $title => $id) {
            $phptip[] = "* `$title <https://php-errors.readthedocs.io/en/latest/messages/" . urlencode($id) . ".html>`_\n";
            if (isset($phpErrors[$title])) {
                $phpErrors[$title][] = '    * :ref:`' . $anchor . '`';
            } else {
                $phpErrors[$title] = ['    * :ref:`' . $anchor . '`'];
            }
        }
        $phptip[] = '';
    }

    if (!empty($tip->features)) {
        $phptip[] = '';
        $phptip[] = 'PHP Features';
        $phptip[] = str_repeat(LEVEL_H2, strlen('PHP Features'));
        $phptip[] = '';
        foreach ($tip->features as $id) {
            $phptip[] = "* `$id <https://php-dictionary.readthedocs.io/en/latest/dictionary/" . urlencode($id) . ".ini.html>`_\n";
        }
        $phptip[] = '';
    }

    $phptip[] = '';

    foreach (array_filter($tip->tags) as $tag) {
        if (!isset($tags[$tag])) {
            $tags[$tag] = [];
        }
        $tags[$tag][] = $name;
    }

    $rstFile = str_replace('.png', '.rst', $tip->image);
    file_put_contents($tipsDir . '/' . $rstFile, implode(PHP_EOL, $phptip));

    $sitemap->addItem($baseUrl . '/tips/' . substr($rstFile, 0, -4) . '.html');
    $indexnow[] = $baseUrl . '/tips/' . substr($rstFile, 0, -4) . '.html';

    $tiplist[] = '   tips/' . $rstFile;
    
    $llmtxt[] = '['.$tip->title.']('.$baseUrl . '/tips/' . substr($rstFile, 0, -4) . '.html'.') '.first_sentence($tip->content);
}

$sitemap->write();

file_put_contents('llm.txt', implode(PHP_EOL, $llmtxt));

$index = file_get_contents($tipSectionIn);
$index = str_replace('   tips', implode(PHP_EOL, $tiplist), $index);
file_put_contents($tipSectionOut, $index);

print "processed " . count($files) . " file with $errors error\n";

uasort($tags, fn($a, $b) => count($a) <=> count($b));

file_put_contents($indexnowFile, '<?php $urls = ' . var_export($indexnow, true) . '; ?>');

if (!empty($authors)) {
    $authorRst = <<<RST
Author index
------------


RST;
    ksort($authors);
    foreach ($authors as $name => $list) {
        $authorRst .= "* $name\n";
        $authorRst .= implode(PHP_EOL, $list) . PHP_EOL;
        ++$stats['author'];
    }
    file_put_contents($authorIndexFile, $authorRst);
    print "processed " . $stats['author'] . " authors\n";
}

if (!empty($phpErrors)) {
    $phpErrorRst = [<<<RST
Error Message index
-------------------


RST];
    ksort($phpErrors);
    foreach ($phpErrors as $name => $links) {
        $phpErrorRst[] = "* $name\n";
        ksort($links);
        $phpErrorRst[] = implode(PHP_EOL, $links) . PHP_EOL;
        @++$stats['phpError'];
    }
    file_put_contents($phpErrorFile, implode('', $phpErrorRst));
    print "processed " . $stats['phpError'] . " error messages\n";
}

if (!empty($features)) {
    $features   = array_merge(...$features);
    $features   = array_count_values($features);
    arsort($features);
    $featureMax = array_key_first($features);
    print "processed " . count($features) . " features (" . array_sum($features) . " distinct, $featureMax => " . $features[$featureMax] . ")\n";
}

// Update release version in conf.py
$confpy = file_get_contents($confFile);
$confpy = preg_replace("/release = '1\\.\\d+'/", "release = '1." . count($files) . "'", $confpy);
file_put_contents($confFile, $confpy);

// ---------------------------------------------------------------------------
// Functions
// ---------------------------------------------------------------------------

function check(stdClass $tip, string $file): string
{
    if (!isset($tip->date)) {
        print "Missing date in $file\n";
    }
    if (empty($tip->title)) {
        print "Empty title in $file\n";
    }
    return '';
}

function make_anchor(string $title): string
{
    // Transliterate accented/non-ASCII characters so anchors are URL-safe
    $ascii = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $title);
    if ($ascii !== false && $ascii !== '') {
        $title = $ascii;
    }
    $title = strtr(strtolower(ltrim($title, '_')), ' ', '-');
    $title = str_replace('`', '', $title);
    // Remove any characters that are not alphanumeric, hyphen, or underscore
    $title = preg_replace('/[^a-z0-9\-_]/', '', $title);
    return $title;
}

function buildlog(string $message): void
{
    static $log;
    if (empty($log)) {
        $log = fopen($GLOBALS['buildLogPath'], 'a');
    }
    fwrite($log, $message . PHP_EOL);
}

function prepare_code_for_alt(string $code): string {
    $return = $code;
//    $return = preg_replace("/\n *\n/m", PHP_EOL, $code);
    $return = str_replace(PHP_EOL, PHP_EOL.str_repeat(' ', 3), $return);
    
    return $return;
}

function first_sentence(string $code): string {
    $id = strpos($code, '.');
    
    return substr($code, 0, $id + 1);
}