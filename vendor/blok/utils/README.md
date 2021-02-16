# Utilities for Array, String, and common PHP manipulations

[![Packagist](https://img.shields.io/packagist/v/blok/utils.svg)](https://packagist.org/packages/blok/utils)
[![Packagist](https://poser.pugx.org/blok/utils/d/total.svg)](https://packagist.org/packages/blok/utils)
[![Packagist](https://img.shields.io/packagist/l/blok/utils.svg)](https://packagist.org/packages/blok/utils)

Package description: Blok Utils

## Installation

Install via composer

```bash
composer require blok/utils
```

## Usage

# Arr

Blok\Utils\Arr is a bunch of array methods utilities that you can use as static call exemple : 

`Blok\Utils\Arr::csvToArray('xxx.csv'')`

Will transform a csv file to an array

# Str

Blok\Utils\Str is a bunch of String methods utilities that you can use as static call exemple : 

`Str::smrtr('{hello} world', ["hello", "Hello"])`

Will replace the braced {hello} with the value of the array

# Utils

Blok\Utils\Utils is a bunch of common PHP utils methods that you can use as static call exemple : 

`Utils::getJSON("xxx.json"")`

Will make a file_get_contents + a json_decode


## Security

If you discover any security related issues, please email 
instead of using the issue tracker.

## Credits

- [daniel@cherrypulp.com](https://github.com/blok/utils)
- [All contributors](https://github.com/blok/utils/graphs/contributors)
