<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 05.08.2017
 * Time: 18:16
 */

function howManyTimes() {
    static $a = 0;
    echo ++$a . ', ';
}

howManyTimes();
howManyTimes();
howManyTimes();
howManyTimes();
howManyTimes();

function someFunction($a, $b) {
    $r = (2*$a) / (2*$b);
    return $r;
}

$a = 10;
$b = 20;

$p = someFunction($a, $b);

echo $p;