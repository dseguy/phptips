<?php

$file = $argv[1] ?? 'docs/no_dnf_for_catch.json';

if (!file_exists($file)) {
    print "No such file as '$file'. Aborting\n";
    die();
}

print "cleaning $file\n";

$json = json_decode(file_get_contents($file));

if (!isset($json->{'3v4l'})) {
    $json->{'3v4l'} = (object) ['' => ''];
}

if (!isset($json->{'phpError'})) {
    $json->{'phpError'} = (object) [];
}

if (!isset($json->{'features'})) {
    $json->{'features'} = [];
}

foreach(['author', 'contact'] as $field) {
    if (!isset($json->$field)) {
        $json->$field = "";
    }
}

print file_put_contents($file, json_encode($json, flags: JSON_PRETTY_PRINT)).' bytes'.PHP_EOL;
