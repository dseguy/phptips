<?php

$files = glob('tweet/*.ini');

$html = array('<h1>PHP tips</h1>',
'A pot-pourri of '.count($files).' PHP tips that were published with <a href="https://twitter.com/exakat">@exakat</a> account.',
'',
'<hr />',
'',
);

$entries = array();
foreach($files as $file) {
	$ini = parse_ini_file($file);
	
	$h = array();
	$h[] = "<p>";
	$h[] = "<h2>".$ini['title']."</h2>";
	$h[] = $ini['text'];

	$h[] = "<img src=\"https://www.exakat.io/phptip/".$ini['image']."\" width=\"500\"/>";
	$h[] = "<a href=\"".$ini['tweet']."\">Tweet</a>";
	$h[] = "</p>";
	$h[] = "<hr />";
	
	assert(!isset($entries[$ini['date']]), "Double date for $ini[date] for $file");
	$entries[$ini['date']] = $h;
}

ksort($entries);
$html = array_merge($html, ...array_values($entries));

print implode(PHP_EOL, $html);

?>