<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 08.08.2017
 * Time: 21:59
 */

$db = mysqli_connect("localhost", "root", "root", "massive");
mysqli_set_charset($db, "utf8");

//check connection
if (mysqli_connect_error()) {
    echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
}