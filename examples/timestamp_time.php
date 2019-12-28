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

//Call time from timestamp
echo $yoruba->getTime(time());

echo $igbo->getTime(time());

echo $hausa->getTime(time());

echo $english->getTime(time());
