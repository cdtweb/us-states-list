# US States List

[![Build Status](https://travis-ci.org/cdtweb/us-states-list.svg?branch=master)](https://travis-ci.org/cdtweb/us-states-list)

A library that provides a list of US states and territories.

## Requirements

PHP 7

## Installation

    composer require cdtweb/us-states-list
    
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
