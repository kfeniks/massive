<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 04.08.2017
 * Time: 14:45
 */

$arr = array('Azure', 'Blue', 'Coral', 'Gray');

echo '<pre>';
print_r($arr);
echo '</pre>';

//try add new element in massive

$arr[] = 'Green';
$arr[10] = 'LightPink';
$arr[200] = 'Magenta';

$sum = count($arr);

echo '<br><br>';
echo '<pre>';
print_r($arr);
echo '</pre>';

echo 'Counter ' . $sum;

//try delete one element from massive

unset($arr[1]);

echo '<br><br>';
echo '<pre>';
print_r($arr);
echo '</pre>';

//try view element of massive in massive

$array = array(
    array(
        'name' => 'Bob', 'age' => '20'
    ),
    array(
        'name' => 'Stinger', 'age' => '32'
    ),
    array(
        'name' => 'Mellony', 'age' => '16'
    ),
);

echo '<pre>';
print_r($array[1]['name']);
print_r($array[1]['age']);
echo '</pre>';
