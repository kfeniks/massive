<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 05.08.2017
 * Time: 20:53
 */

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo '<pre>';
print_r($arr);
echo '</pre>';
echo '<hr>';

$arr2 = array_reverse($arr);
echo '<pre>';
print_r($arr2);
echo '</pre>';

$a = '';

echo 'Result $a is ';
var_dump(empty($a));

echo '<hr>';

echo '<pre>';
print_r(get_defined_vars());
echo '</pre>';