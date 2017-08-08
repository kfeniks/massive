<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 08.08.2017
 * Time: 13:13
 */

echo '<h1>Page.php</h1>';
if ($_COOKIE['name']) {

    $name = $_COOKIE['name'];

} else $name = 'Guest';

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Sample web page c Cookie</title>
</head>
<body>
<h1>HTTP Forms Cookie</h1>
<!-- A comment -->

<?= 'Hello, '.  $name . '!'?>

<a href="index.php">Index page</a>.

<hr>
</body>
</html>
