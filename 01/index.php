<?php
/**
 * Created by PhpStorm.
 * User: kecc
 * Date: 25.07.17
 * Time: 22:27
 */

$d = "Hello";
$f = $d." world";

echo $f;
echo "<br/>";

$f .= " ! ! !";
echo $f;

$speed = 45;

if ($speed !== '45')
    echo "Скорость в пределах нормы";

echo "<br/>";
echo "<br/>";

$c = 70;
$r = 50;

if($c > $r xor $r > $c){
    echo "Мисье знает толк в бабах.";
    if($c == 70 xor $r < $c){
        echo "Ты этой херни видеть не можешь.";
    }
}

echo "<br/>";
$speed = 55;
echo ($speed <= 60) ? "Скорость в пределах нормы" : "Превышение скорости !";