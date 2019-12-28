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

//Call time from hours and minutes

//12 hrs, 34 minutes
echo $yoruba->getTimeHour(12, 34);

echo $igbo->getTimeHour(12, 34);

echo $hausa->getTimeHour(12, 34);

echo $english->getTimeHour(12, 34);
