<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 04.08.2017
 * Time: 16:36
 */

//Find day of week

$day = 6;

echo 'It\'s day: ';

if ($day == 1) echo 'Monday';
elseif ($day == 2) echo 'Tuesday';
elseif ($day == 3) echo 'Wednesday';
elseif ($day == 4) echo 'Thursday';
elseif ($day == 5) echo 'Friday';
elseif ($day == 6) echo 'Saturday';
elseif ($day == 7) echo 'Sunday';
else echo 'Wrong day';

echo '<br><br>';

switch ($day){
    case 1: echo 'Monday'; break;
    case 2: echo 'Tuesday'; break;
    case 3: echo 'Wednesday'; break;
    case 4: echo 'Thursday'; break;
    case 5: echo 'Friday'; break;
    case 6: echo 'Saturday'; break;
    case 7: echo 'Sunday'; break;
    default: echo 'Wrong day';
};
