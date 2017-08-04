<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 04.08.2017
 * Time: 14:29
 */

$arr = array('Andy', 'Boris', 'Benny', 'Halley');

print($arr[0]);

echo '<br><br>';
//make own key

$arr = array('5' => 'Andy', '8' => 'Boris',
    '11' => 'Benny', '10' => 'Halley',
    '15' => 'Washington', 'age' => '85');

print($arr[11]);
echo ' ';
print($arr[15]);
echo ' ';
echo '(';
print($arr['age']);
echo ')';

echo '<br><br>';
echo '<pre>';
echo print_r($arr);
echo '</pre>';
echo '<br><br>';
echo var_dump($arr);