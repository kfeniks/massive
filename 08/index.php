<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 04.08.2017
 * Time: 16:46
 */

//$status = true;
$status = false;

if ($status) {
    echo 'On';
} else {
    echo 'Off';
}
//result is off

//analog use ternar operator
echo ($status) ? 'On' : 'Off';