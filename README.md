Sorter
===============

This library is designed to sorting arrays.

Installation
------------

For using this library just execute the following command
```
$ composer require vsflash/sorter
```
https://packagist.org/packages/vsflash/sorter

Usage
-----
```php
use vsflash\Sorter\Sorter;

$data = ['vaz', 'bmv', 'kia', 'volvo', 'mazda'];
$sorter = new Sorter('asc');
var_dump($sorter->sort($data));
/*
array(5) {
  [1] =>
  string(3) "bmv"
  [2] =>
  string(3) "kia"
  [4] =>
  string(5) "mazda"
  [0] =>
  string(3) "vaz"
  [3] =>
  string(5) "volvo"
}
 */

$sorter->setSorter('desc');
var_dump($sorter->sort($data));
/*
array(5) {
  [3] =>
  string(5) "volvo"
  [0] =>
  string(3) "vaz"
  [4] =>
  string(5) "mazda"
  [2] =>
  string(3) "kia"
  [1] =>
  string(3) "bmv"
}
 */

$sorter->setSorter('null');
var_dump($sorter->sort($data));
//NULL

$data = [56, 43 ,78, 93, 3, 8, 25];
$sorter = new Sorter('asc');
var_dump($sorter->sort($data));
/*
array(7) {
    [4] =>
  int(3)
  [5] =>
  int(8)
  [6] =>
  int(25)
  [1] =>
  int(43)
  [0] =>
  int(56)
  [2] =>
  int(78)
  [3] =>
  int(93)
}
*/

$sorter->setSorter('desc');
var_dump($sorter->sort($data));
/*
array(7) {
  [3] =>
  int(93)
  [2] =>
  int(78)
  [0] =>
  int(56)
  [1] =>
  int(43)
  [6] =>
  int(25)
  [5] =>
  int(8)
  [4] =>
  int(3)
}
 */

$sorter->setSorter('null');
var_dump($sorter->sort($data));
//NULL
```

Extending
---------
You can create NewSorter:
Step 1
```php
<?php

namespace vsflash\Sorter\sorters;


class YourSorter implements SorterInterface
{
    public const SORTER_TYPE = 'your_sorter_type';

    public function sort(array $data): array
    {
        $array_result = your_sort_method($data);
        return $array_result;
    }
}
```
Step 2: Add YourSorter to method createSorter() in class Factory
```php
namespace vsflash\Sorter;

use vsflash\Sorter\sorters\AscSorter;
use vsflash\Sorter\sorters\DescSorter;
use vsflash\Sorter\sorters\NullArray;
...
use vsflash\Sorter\sorters\YourSorter;

class Factory
{
    public static function createSorter(string $sorter_type)
    {
        switch ($sorter_type) {
            ...
            case YourSorter::SORTER_TYPE:
                return new YourSorter();
        }
        throw new \RuntimeException(\sprintf('Unknown sorter "%s"', $sorter_type));
    }
}
```

Copyright (c) 2019, Vadim Selyan
