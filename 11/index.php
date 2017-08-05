<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 05.08.2017
 * Time: 10:18
 */

//user function

function myFirstFunction(){
    echo "<h1>Hello!</h1>";
}

function mySecondFunction($name, $secondname){
    echo "<h1>Good day, ".$name." ".$secondname."!</h1>";
}

myFirstFunction();

//make string to massive

$result = explode(',','Users, of course, 
do not know how to make web applications, 
and do not know how to correctly it is possible to write beautiful code.');

echo '<pre>';
print_r($result);
echo '</pre>';

mySecondFunction('Alexey', 'Dubinin');