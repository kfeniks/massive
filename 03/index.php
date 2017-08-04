<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 04.08.2017
 * Time: 11:17
 */

$a = 5;

$a += 5;

$a .= 10;

echo $a;

echo '<br><br>';

$b = null;

echo gettype($b);

echo '<br><br>';

$a = '5 humans'; //string

$a = (integer)$a;

echo $a; //now it's not string
//or use next: boolean, float, string, array, object, unset(null)
echo '<br><br>';

//lets use fails in php like string to integer

$a = '5 ass';
$b = 10;
$c = $a + $b; //now its integer
echo $c;
