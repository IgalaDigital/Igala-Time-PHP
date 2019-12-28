# Igala Time PHP

A library that converts Time to its equivalent local languages of a basic Nigerian languages(Igala and English)


## Usage
To use this library, just require the needed Language class from the `src` folder:
``` php

//for English
require_once __DIR__.'/src/English.php';
//for Igala
require_once __DIR__.'/src/Igala.php';

// Import English Time Class
use LanguageTime\English;

//Import Igala Time Class
use LanguageTime\Igala;
```
### Call Instance of the Class to Display Current Time
```php
echo new Igala();
// Agogo Méjì Tule Mìnìtì Mélu
echo new English();
// Five Minutes after Two
```


### Call time from timestamp

```php
$igala = new Igala();
echo $igala->getTime(time());
echo $english->getTime(time());
```
### Call time Igala from datestring

```php
$igala = new Igala();
echo $igala->getTime("now");
echo $igala->getTime("today");
echo $igala->getTime("yesterday");
echo $igala->getTime("+ 7 days");
echo $igala->getTime("2019-12-20 12:50:00");
// Mìnìtì Mékwa koka ache
```

### Call time English from datestring

```php
$english = new Igala();
echo $english->getTime("now");
echo $english->getTime("today");
echo $english->getTime("yesterday");
echo $english->getTime("+ 7 days");

echo $english->getTime("2019-12-20 12:50:00");
// Ten minutes to One
```
### Call time from hours and minutes

```php
$igala = new Igala();
$english = new Igala();
//12 hrs, 34 minutes
echo $igala->getTimeHour(12,34);
echo $english->getTimeHour(12,34);
```

## Contribution
Contributions are very much welcome. Open issues or suggest edit if you find anything relating to word mistakes.
