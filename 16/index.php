<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 05.08.2017
 * Time: 21:05
 */

$city = 'London';

$percent = 22/41*100;

$total = 1000;

$format = 'According to statistics, %.4f 
of the %d respondents in the city of %c';

printf($format, $percent, $total, $city);