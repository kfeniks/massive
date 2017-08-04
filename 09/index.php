<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 04.08.2017
 * Time: 16:52
 */

$i = 1;

while ($i <= 10){
    echo $i. ', ';
    $i++;
}
echo ' ';
echo 'End of the program';

echo '<br>';

$i = 10;
do {
  echo $i. ', ';
  $i++;
} while ($i <= 15);
echo ' ';
echo 'End of the program';

echo '<br><br><br><br>';

for ($a = 1; $a <= 10; $a++) {
    echo ' '.$a;
}
echo '<br><br>';

$students = array (
  array('name' => 'Aaliyah', 'app' => 75),
  array('name' => 'Aadolf', 'app' => 10),
  array('name' => 'Saburo', 'app' => 5),
  array('name' => 'Abha', 'app' => 43),
  array('name' => 'Adil', 'app' => 19),
);

for ($i = 0; $i < count($students); $i++){
    echo $i. ' ';
    echo $students[$i]['name'].' - apart. '. $students[$i]['app'];
    echo '<br>';
}

echo '<br><br>';

foreach ($students as $key => $value){
    echo '#'.$key. ' '.$value['name'].' - '.$value['app'].'<br>';
}

echo '<br><br>';
foreach ($students as $value){
    echo $value['name'].' - '.$value['app'].'<br>';
}