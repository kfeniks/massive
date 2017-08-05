<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 05.08.2017
 * Time: 17:13
 */

$name = 'Alexey';
$name2 = 'Irisha';

function test() {
    $name3 = 'Igor';
    echo 'Hello, '. $name3 . '<br/>';

    global $name;
    echo 'Go home, '. $name . '<br/>';

    echo 'Love you, '. $GLOBALS['name2'] . '<br/>';
}

test();

function joy(&$beta){
    $beta += 5;
}

$beta = 10;
joy($beta);
echo $beta;