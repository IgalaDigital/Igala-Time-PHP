<?php
require __DIR__ . '/../vendor/autoload.php';

// Import Igala Time Class
use LanguageTime\English;

//Import English Time Class
use LanguageTime\Igala;

// Instantiate your classes

// For Igala
$yoruba = new Igala();
// For English
$english = new English();

//Call time from datestring
echo $igala->getTime("2017-10-09 12:34:00");

echo $english->getTime("2017-10-09 12:34:00");
