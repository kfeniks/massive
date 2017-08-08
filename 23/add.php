<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 08.08.2017
 * Time: 22:06
 */

require_once 'db.php';

$query = "INSERT INTO news_category VALUES (NULL, 'Category 5', 'Desc 2', 1, 1), (NULL, 'Category 3', 'Desc 1', 1, 1)";
$info = mysqli_query($db, $query);