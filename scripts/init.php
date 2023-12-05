<?php

$name = $argv[1];
$name = preg_replace('/\.png$/', '', $name);

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