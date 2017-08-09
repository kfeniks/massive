<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 09.08.2017
 * Time: 11:20
 */

require_once 'db.php';

$query = "SELECT * FROM news;";
$info = mysqli_query($db, $query);

$count = mysqli_num_rows($info);

if($count) {
    while($row = mysqli_fetch_array($info)){
        echo $row['h1'];
        echo '<br>';
    }
}