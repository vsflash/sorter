#!/usr/bin/env php
<?php
require_once __DIR__ . '/../vendor/autoload.php';

use vsflash\Sorter\Sorter;

$data = ['vaz', 'bmv', 'kia', 'volvo', 'mazda'];
$sorter = new Sorter('asc');
\var_dump($sorter->sort($data));
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
\var_dump($sorter->sort($data));
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
\var_dump($sorter->sort($data));
//NULL

$data = [56, 43,78, 93, 3, 8, 25];
$sorter = new Sorter('asc');
\var_dump($sorter->sort($data));
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
\var_dump($sorter->sort($data));
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
\var_dump($sorter->sort($data));
//NULL
