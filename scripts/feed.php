<?php

include 'vendor/autoload.php';

use Laminas\Feed\Writer\Feed;

/**
 * Create the parent feed
 */
$feed = new Feed;
$feed->setTitle("PHP tips and tricks, by Exakat");
$feed->setLink('https://php-tips.readthedocs.io/en/latest/');
$feed->setDescription('PHP tips and tricks, from the obvious feature hiding in plain sight to the darkest corners of the language.');
$feed->setFeedLink('https://www.exakat.io/php-tips.atom', 'atom');
$feed->addAuthor([
    'name'  => 'Damien Seguy',
    'email' => 'dseguy@exakat.io',
    'uri'   => 'https://www.exakat.io',
]);
$feed->setDateModified(time());
$feed->addHub('http://pubsubhubbub.appspot.com/');


$files = glob('docs/*.json');
$tips = array();
foreach($files as $file) {
    if ($file === 'docs/skeleton.json') { continue; }
    $tip = json_decode(file_get_contents($file));
    if ($tip === null) { die("$file could not be read\n"); }
    
    if (!isset($tip->author)) {
        print "Missing Author with $file\n";
    }
    assert(!empty($tip->title), "no title in $file\n");

    assert(empty($tips[$tip->date]), "Duplicate date $tip->date");
    $tips[strtotime($tip->date)] = $tip;
}

krsort($tips);

// get 10 files in order.
//foreach(array_slice($tips, 0, 10) as $tip) {
foreach($tips as $tip) {
    $tip->url = basename($file);
    $tip->date = new DateTime($tip->date);
/**
 * Add one or more entries. Note that entries must
 * be manually added once created.
 */
$tip->author ?: 'Damien Seguy';
$entry = $feed->createEntry();
$entry->setTitle($tip->title);
$entry->setLink('https://php-tips.readthedocs.io/en/latest/tips/'.basename($tip->image, '.png').'.html');
if (!isset($tip->author)) { print "$file is missing author\n";}
$entry->addAuthor([
    'name'  => $tip->author ?: 'Damien Seguy',
    'email' => 'no-email',
    'uri'   => $tip->contact ?: 'https://www.exakat.io/',
]);
$entry->setDateModified($tip->date);
$entry->setDateCreated($tip->date);
$entry->setDescription($tip->content); // first sentence?
$feed->addEntry($entry);
}
/**
 * Render the resulting feed to Atom 1.0 and assign to $out.
 * You can substitute "atom" with "rss" to generate an RSS 2.0 feed.
 */
$size = file_put_contents('feed.rss', $out = $feed->export('rss', 'feed.rss'));

print "Written ".count($tips)." tips in $size octets\n";