<?php 
// need this to access the composer stuff (not something you need in php frameworks)
require 'vendor/autoload.php';

// pull some code from composer installed code
// in this case it is a class, but it can be anything, from a function to a variable

use RandomQuotes\RandomQuotes;

// use this class
$random_quote = new RandomQuotes();

// the -> operator is used to access an attribute or method in an object in PHP 
// (not composer-related but important in this code example)
$quote = $random_quote->generate();

echo $quote;
?>