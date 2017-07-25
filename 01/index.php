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
echo "<br/>";
$value = '';

echo $var = (empty($value)) ? 80 : $value;

echo "<br/>";
echo "<br/>";
$speed = 70;

switch($speed)
{
    case 30 :
        echo "Ваша скорость 30 км/час";
        break;

    case 50 :
        echo "Ваша скорость 50 км/час";
        break;

    case 70 :
        echo "Превышение скорости !";
        break;

    default :
        echo "Скорость в пределах нормы";
        break;

}