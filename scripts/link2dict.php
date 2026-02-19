<?php

$file = $argv[1] ?? 'docs/every_anonymous_class.json';
print "Suggestions for $file\n";

$words = glob('../analyzeG3/human/en/Features/*.ini');

foreach($words as &$word) {
    $word = basename($word, '.ini');
    $word = strtr($word, '-', ' ');
}

if (substr($file, 0, 5) != 'docs/') {
    $file = "docs/$file";
}
if (substr($file, -5) != '.json') {
    $file .= '.json';
}

if (!file_exists($file)) {
    print "No such file as $file\n";
    exit;
}

$doc = json_decode(file_get_contents($file));

$content = $doc->content;
preg_match_all('/\b(?<!`)('.implode('|', $words).')s?(?!`)\b/', mb_strtolower($content), $r);
$spotted = array_unique($r[1]);
$spotted = array_diff($spotted, array('and', 'or', 'as', 'use', 'for', 'php', 'not'));

preg_match_all('/\b(?<=`)('.implode('|', $words).')(?=`)\b/', $content, $r);
//print_r(array_unique($r[0]));
$specials = array_unique($r[0]);

print_r($doc->features);

$all = array_merge($specials, $spotted);
$all = array_unique($all);

if (empty($all)) {
    print "No suggestions\n";
} else {
    $list = implode('",
        "', $all);

    print <<<JSON
    "features": [
        "$list"
    ],
JSON;
}

?>