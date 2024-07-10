<?php

$name = $argv[1] ?? 'search';

if ($name === 'search') {
	$images = glob('images/*.png');
	$images = array_map(function($f) { return basename($f, '.png');}, $images);

	$docs = glob('docs/*.json');
	$docs = array_map(function($f) { return basename($f, '.json');}, $docs);

	$diff = array_diff($images, $docs, ['skeleton']);
	
	if (count($diff) === 1) {
		$name = array_pop($diff);
		print "Processing $name\n";
	} elseif (count($diff) === 0) {
		print "Nothing to processi. Aborting\n";
		die();
	} else {
		print count($diff)." messages to process. Choose one.";
		print_r($diff);
	}
	
} else {
	$name = preg_replace('/\.png$/', '', $name);
}

if (!file_exists('images/'.$name.'.png')) {
	die("No such file as 'images/'.$name.'.png'.");
}

if (file_exists('docs/'.$name.'.png')) {
	die("Already a file 'docs/$name.png'.");
}

$json = json_decode(file_get_contents('docs/skeleton.json'));
$json->image = $name.'.png';
$json->date = (new Datetime('now'))->format('Y-m-d');
$json->title = $name;
//print_r($json);

file_put_contents('docs/'.$name.'.json', json_encode($json, JSON_PRETTY_PRINT));
print "Written docs/$name.json\n";