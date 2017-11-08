# US States List

A library that provides a list of US states and territories.

## Requirements

PHP 7

## Installation

    composer install cdtweb/us-states-list
    
## Usage

```php
<?php
use Cdtweb\UsStatesList;

// Get array of abbreviation => name for each state
$states = UsStatesList::all();

// Get array of abbreviations
$abbreviations = UsStatesList::abbreviations();

// Get array of names
$names = UsStatesList::names();
 
```
