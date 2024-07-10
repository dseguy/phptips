<?php

$files = glob('docs/*.json');

foreach($files as $file) {
	print "$file\n";
	
	$ini = json_decode(file_get_contents($file));
	$name = basename($file, '.json');
	
	$keywords[$name] = array_filter($ini->tags);
}

$all = array_merge(...array_values($keywords));
$stats = array_count_values($all);
asort($stats);
print_r($stats);

?>