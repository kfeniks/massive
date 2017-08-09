<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 09.08.2017
 * Time: 11:08
 */

require_once 'db.php';

$query = "UPDATE news SET status='1'";
$info = mysqli_query($db, $query);
var_dump($info);

echo '<br/>';

echo mysqli_affected_rows($db);

echo '<br/>';
echo '<br/>';

$query = "UPDATE news SET h1='Best New test check' WHERE id='2'";
$info = mysqli_query($db, $query);
var_dump($info);

echo '<br/>';

echo mysqli_affected_rows($db);