<?php

include 'vendor/autoload.php';

use samdark\sitemap\Sitemap;
use samdark\sitemap\Index;

// create sitemap
$sitemap = new Sitemap('./sitemap.xml');
$indexnow = [];

const LEVEL_UNDERLINE = '-';
const LEVEL_H2 = '_';

if (!file_exists('tips')) {
	mkdir('tips', 0755);
}

fopen("build.log", "w+");

$phptips = array();

$phptips[] = "PHP tips and tricks";
$phptips[] = "-------------------";
$phptips[] = "";

$files = glob('docs/*.json');
//$files = array('docs/try-catch-finally.json');

$files = array_diff($files, ['docs/skeleton.json']);

$images = glob('images/*.png');

//$files = ['docs/instanceof_with_variable.json'];
//$images = ['images/instanceof_with_variable.png'];


$f = array_map(function ($file) { return substr($file, 5, -5);}, $files);
$i = array_map(function ($image) { return substr($image, 7, -4);}, $images);
if ($diff = array_diff($f, $i)) {
	print "Missing files in images : ".implode(', ', $diff)."\n";
}
if ($diff = array_diff($i, $f)) {
	print "Missing files in docs : ".implode(', ', $diff)."\n";
}

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
];

$stats = array('author' => 0,
				);
$errors = 0;
$tips = array();
$phpError = array();
$anchors = array();
$images = array();
foreach($files as $file) {
	$tip = json_decode(file_get_contents($file));

	if ($tip === null) {
        print("Warning : $file is not valid JSON");
		die();
	}

	$tip->file = $file;

	if (isset($tips[$tip->date])) {
		buildlog("Warning : $tip->date is already set in $file");;
		++$errors;
		continue;
	}
	$tips[$tip->date] = $tip;

	if (preg_match('/\\n /', $tip->content)) {
		buildlog("Warning : some new lines are followed by spaces in $file");;
		++$errors;
		continue;
	}

	if (empty($tip->author) &&  ($c = count(explode(' ', $tip->content))) < 40) {
		buildlog("Warning : $c words content in $file");;
		++$errors;
		continue;
	}

	if (preg_match('/[^`]`[^`]/', $tip->content)) {
		buildlog("Warning : code formatting needs double `` in $file");;
		++$errors;
		continue;
	}

    if (empty($tip->seeAlso)) {
        $sandbox = false;
    } else {
        $sandbox = false;
        foreach($tip->seeAlso as $title => $link) {
            if (empty($title)) {
            	buildlog("Warning : No title in seeAlso in $file");;
        		++$errors;
            }
            if (empty($link)) {
            	buildlog("Warning : No link in seeAlso in $file");;
        		++$errors;
            }
            if (empty($tip->{'3v4l'}) && !isset($tip->seeAlso->{$tip->title.' on 3v4l.org'})) {
            	buildlog("Warning : No title to 3v4l.org in $file");
        		++$errors;
            }

            if (str_contains($link, '3v4l.org')) {
	    	    $sandbox = true;
		    }
        }
    }
    if ($sandbox === false && empty($tip->{'3v4l'})) {
    	buildlog("Warning : No 3v4l link in $file");
    	++$errors;
    }

    if (isset($tip->{'3v4l'}) && is_string($tip->{'3v4l'})) {
    	buildlog("Warning : 3v4l is a string in $file");
    	++$errors;
    } elseif (isset($tip->{'3v4l'}) && is_array($tip->{'3v4l'})) {
    	foreach($tip->{'3v4l'} as $name => $url) {
    	    if (empty($name)) {
    	        buildlog("Empty title on 3v4l in $file");
            	++$errors;
    	    }
    	}
    }

	if (str_contains($tip->content, '#PHP')) {
		buildlog("Warning : No need for #PHP in $file");;
		++$errors;
		continue;
	}

	if (str_contains($tip->content, 'will')) {
//		buildlog("Warning : No need for will in $file");
//		++$errors;
//		continue;
	}

	if (!in_array(substr($tip->content, -1), array('.', '?'), true)) {
		buildlog("Warning : content doesn't finish with . in $file");;
		++$errors;
	}

	if (!isset($tips[$tip->date])) {
		buildlog("Warning : $file has no image entry");;
		++$errors;
	}

	if (!isset($tip->tags)) {
		buildlog("Warning : $file has no tags entry");;
		++$errors;
	} elseif (!is_array($tip->tags)) {
		buildlog("Warning : $file has no tags entry");;
		++$errors;	
	} elseif (empty($tip->tags[0])) {
		buildlog("Warning : $file has empy tags");;
		++$errors;	
	}

	if (isset($images[$tip->image])) {
		buildlog("Warning : $tip->image is already in used in {$images[$tip->image]}");;
		++$errors;
		continue;
	} else {
		$images[$tip->image] = $file;
	}

	if (strlen($tip->title) > 70) {
		buildlog("Warning : Title is too long in $file");
	}

    if (!isset($tip->features)) {
        // silent omission
    } elseif (!is_array($tip->features)) {
		buildlog("Warning : features is not an array in $file");
	} else {
	    foreach($tip->features as $feature) {
	        if (!file_exists('../analyzeG3/human/en/Features/'.$feature.'.ini')) {
        		buildlog("Warning : feature '$feature' does not exist in $file");
        		++$errors;
	        }
	    }
	}

	if (substr_count($tip->title, '_') > 1 && 
		!preg_match('/(file_put_contents|parse_str|private|func_get_arg|array_intersect_uassoc_insensitive|file_append_contents|__invoke|array_map_assoc)/', $tip->title)) {
		buildlog("Warning : Too many _ in title '$tip->title' in $file");;
	}

	if (substr_count($tip->title, ' ') === 0) {
		buildlog("Warning : Suspicious lack of space in title '$tip->title' in $file");
		die("Warning : Suspicious lack of space in title '$tip->title' in $file");
	}

	if (substr_count($tip->title, ' ') === 0) {
		buildlog("Warning : title is default '$tip->title' in $file");;
		++$errors;
		continue;
	}

	if (ucwords(strtolower($tip->title)) != $tip->title &&
		!preg_match('/(DNF|new|URL|array|private|NAN|parse_str|self|parent|static|namespace|list|http_build_query|compact|func_get_args|strict_types|stdClass|foreach|PHP|ReturnTypeWillChange|strpos|readonly|DTO|VO|null|is_a|instanceof|file_put_contents|try|finally|catch|file_append_contents|glob|class_exists)/', $tip->title)) {
		buildlog("Warning : Not First Upper Cased in $file");;
		++$errors;
	}

	if (strlen($tip->title) > 50) {
		buildlog("Warning : $tip->title is too long (".strlen($tip->title).") in $file");;
		++$errors;
		continue;
	}
	
	if (!empty($tip->author)) {
		if (isset($authorContact[$tip->author]) && $authorContact[$tip->author] !== $tip->contact) {
			buildlog("Warning : $tip->author has too many contacts (".$authorContact[$tip->author]." && ".$tip->contact.") in $file");
			++$errors;
		} else {
			$authorContact[$tip->author] = $tip->contact;
		}
	}

	if (!isset($tip->phpError)) {
	    // error but not yet
	} elseif (!$tip->phpError instanceof stdClass) {
			buildlog("Warning : \$tip->phpError should be a hash in $file");
			++$errors;
	} else {
	    $tip->phpError = (array) $tip->phpError;
	    foreach($tip->phpError as $name => $id) {
	        if (empty($name)) {
    	        buildlog("Empty title on phpError in $file");
            	++$errors;
	            unset($tip->phpError[$name]);
	            continue;
	        }
	        
	        if (!file_exists('../php-errors/errors/'.$id.'.ini')) {
    			buildlog("Warning : phpError '$id' does not exists in $file");
	    		++$errors;
	        }
	    }
	}
	
	$fields = array_keys((array) $tip);
	if ($diff = array_diff($fields, FIELDS)) {
	    buildlog("Extra ".count($diff)." fields: ".implode(', ', $diff)." in file $file");
	    print ("Extra ".count($diff)." fields: ".implode(', ', $diff)." in file $file");
	    ++$errors;
	    die();
	}
	if ($diff = array_diff(FIELDS, $fields)) {
	    buildlog("Missing ".count($diff)." fields: ".implode(', ', $diff)." in file $file");
	    ++$errors;
	}

	$tip->content = str_replace('#PHP', 'PHP', $tip->content);

	$tips[$tip->date] = $tip;
}

krsort($tips);

$tags = array();
$tiplist = array();

foreach($tips as $tip) {
	$phptip = array();
	$name = str_replace('.png', '', $tip->image);
	
	if ($e = check($tip, 'docs/'.str_replace('.json', '.png', $tip->image))) {
		print "Error in file $file : $e\n";
		++$errors;
		continue;
	}
	
	$anchor = make_anchor($tip->title);
	
	$phptip[] = '.. _'.$anchor.':'.PHP_EOL;
	if (isset($anchors[$anchor])) {
		buildlog("Duplicate entry for $tip->title in $file");;
	}
	$anchors[$anchor] = 1;
	$phptip[] = $tip->title;
	$phptip[] = str_repeat(LEVEL_UNDERLINE, strlen($tip->title));
	$phptip[] = '';

    $title = $tip->title;   
    $title = str_replace('`', '', $title);
	$phptip[] = '.. meta::';
	$phptip[] = '	:description:';
	$first = preg_split('/[\.\?;'.PHP_EOL.']/', $tip->content)[0];
	$phptip[] = '		'.$title.': '.$first.'.';
	
	$phptip[] = '	:twitter:card: summary_large_image';
	$phptip[] = '	:twitter:site: @exakat';
	$phptip[] = '	:twitter:title: '.$title.'';
	$phptip[] = '	:twitter:description: '.$tip->title.': '.$first.'';
	$phptip[] = '	:twitter:creator: @exakat';
	$phptip[] = '	:twitter:image:src: https://php-tips.readthedocs.io/en/latest/_images/'.$tip->image.'';

	$phptip[] = '	:og:image: https://php-tips.readthedocs.io/en/latest/_images/'.$tip->image.'';
	$phptip[] = '	:og:title: '.$title.'';
	$phptip[] = '	:og:type: article';
	$phptip[] = '	:og:description: '.$first.'';
	$phptip[] = '	:og:url: https://php-tips.readthedocs.io/en/latest/tips/'.$name.'.html';
	$phptip[] = '	:og:locale: en';

	$phptip[] = '';

	$phptip[] = '.. raw:: html';
	$phptip[] = '';
	$ldjson = ['@context' => "https://schema.org",
	    '@graph' => [
	        ["@type" => "WebPage",
	        "@id" => "https://php-tips.readthedocs.io/en/latest/tips/".$name.".html",
	        "url" => "https://php-tips.readthedocs.io/en/latest/tips/".$name.".html",
	        "name" => $title,
	        "isPartOf" => [
	            "@id" =>  "https://www.exakat.io/"
	        ],
	        "datePublished" => date('r', filectime($tip->file)),
	        "dateModified" => date('r', filemtime($tip->file)),
	        "description" => $first,
	        "inLanguage" => 'en-US',
	        "potentialAction" => [
	            [
	            '@type' => 'ReadAction',
	            'target' => ["https://php-tips.readthedocs.io/en/latest/tips/".$name.".html"]
	            ]
	        ],
	        
	        ],
	        ["@type" => "WebSite",
	         "@id"=>  "https://www.exakat.io/",
             "url"=>  "https://www.exakat.io/",
             "name"=>  "Exakat",
             "description"=>  "Smart PHP static analysis",
             "inLanguage"=>  "en-US"
            ],
	    ]
	
	];

	$phptip[] = '	<script type="application/ld+json">'.json_encode($ldjson).'</script>';
	$phptip[] = '';

	if (!empty($tip->author)) {
		$author = '`'.$tip->author.' <'.$tip->contact.'>`_';
		$phptip[] = 'By '.$author.PHP_EOL;
		$authors[$author][] = '    * :ref:`'.$anchor.'`';
	}
	
	$phptip[] = str_replace("\n", "\n\n", $tip->content);
	
	$phptip[] = '';
	$phptip[] = ".. image:: ../images/".$tip->image;

	$links = array_merge((array) $tip->seeAlso, (array)($tip->{'3v4l'} ?? []));
	if (empty($links)) {
		buildlog("Warning : seeAlso & 3v4l are empty in $name");
		++$errors;
	} else {
		$phptip[] = '';
    	$phptip[] = 'See Also';
	    $phptip[] = str_repeat(LEVEL_H2, strlen('See Also'));
		$phptip[] = '';
		foreach($links as $title => $link) {
		    if (str_contains($link, '3v4l')) {
    			$phptip[] = '* `'.$title.' <'.$link.'>`_ [Try me]';
		    } else {
    			$phptip[] = '* `'.$title.' <'.$link.'>`_';
		    }
		}
		$phptip[] = '';
	}

	if (!empty($tip->phpError)) {
		$phptip[] = '';
    	$phptip[] = 'PHP Error Messages';
	    $phptip[] = str_repeat(LEVEL_H2, strlen('PHP Error Messages'));
		$phptip[] = '';
		foreach($tip->phpError as $title => $id) {
    		$phptip []= "* `$title <https://php-errors.readthedocs.io/en/latest/messages/".urlencode($id).".html>`_\n";

            if (isset($phpErrors[$title])) {
        		$phpErrors[$title][] = '    * :ref:`'.$anchor.'`';
            } else {
        		$phpErrors[$title] = ['    * :ref:`'.$anchor.'`'];
            }
		}
		$phptip[] = '';

	}

	$phptip[] = '';
	
	foreach(array_filter($tip->tags) as $tag) {
		if (!isset($tags[$tag])) {
			$tags[$tag] = array();
		} 
		$tags[$tag][] = $name;
	}
	
	$file = str_replace('.png', '.rst', $tip->image);
	file_put_contents('tips/'.$file, implode(PHP_EOL, $phptip));

	$sitemap->addItem('https://php-tips.readthedocs.io/en/latest/tips/'.substr($file, 0, -4).'.html');
	$indexnow[] = 'https://php-tips.readthedocs.io/en/latest/tips/'.substr($file, 0, -4).'.html';

	$tiplist[] = '   tips/'.$file;
}

$sitemap->write();

$index = file_get_contents('tipSection.rst.in');
$index = str_replace('   tips', implode(PHP_EOL, $tiplist), $index);
file_put_contents('tipSection.rst', $index);

//file_put_contents('tips.rst', implode(PHP_EOL, $phptips));
print "processed ".count($files)." file with $errors error\n";

uasort($tags, function ($a, $b) { return count($a) <=> count($b);});

file_put_contents('indexnow.php', '<?php $urls = '.var_export($indexnow, true).'; ?>');

if (!empty($authors)) {
	$authorRst = <<<RST
Author index
------------


RST;
	
	ksort($authors);
	foreach($authors as $name => $list) {
		$authorRst .= "* $name\n";
		$authorRst .= implode(PHP_EOL, $list).PHP_EOL;
		++$stats['author'];
	}
	file_put_contents('authorindex.rst', $authorRst);
	print "processed ".$stats['author']." authors\n";
}

if (!empty($phpErrors)) {
	$phpErrorRst = [<<<RST
Error Message index
-------------------


RST];
	
	ksort($phpErrors);
	foreach($phpErrors as $name => $links) {
		$phpErrorRst []= "* $name\n";
		ksort($links);
		$phpErrorRst []= implode(PHP_EOL, $links).PHP_EOL;
		@++$stats['phpError'];
	}
	file_put_contents('phperrorindex.rst', implode('', $phpErrorRst));
	print "processed ".$stats['phpError']." error messages\n";
}

function check(stdClass $tip, string $file) : string {
	if (!isset($tip->date)) {
		print "Missing date in $file\n";
	}

	if (empty($tip->title)) {
		print "Empty title in $file\n";
	}

	return '';
}

function make_anchor(string $title) : string {
	$title = strtr(strtolower($title), ' ', '-');
	return $title;
}

function buildlog($message) {
	static $log;
	
	if (empty($log)) {
		$log = fopen("build.log", "w+");
	}
	
	fwrite($log, $message.PHP_EOL);
}

?>