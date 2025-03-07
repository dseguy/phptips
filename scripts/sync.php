<?php

$images = glob('images/*.png');
$images = array_map(function($file) { return basename($file, '.png');}, $images);

$docs = glob('docs/*.json');
$docs = array_map(function($file) { return basename($file, '.json');}, $docs);
$docs = array_diff($docs, ['skeleton']);

$diff = array_diff($docs, $images);
if (!empty($diff)) {
    print count($diff). " docs that are missing an image: ".implode(', ', $diff);
} else {
    print "All docs are ok\n";
}

$diff = array_diff($images, $docs);
if (!empty($diff)) {
    print count($diff). " images that are missing a doc: ".implode(', ', $diff);
} else {
    print "All images are ok\n";
}

?>