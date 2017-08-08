<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 08.08.2017
 * Time: 13:13
 */

if (isset($_POST['name']) && (!empty($_POST['name']))) {
    $name = $_POST['name'];
    setcookie('name', $name, time() + 3600);
//    echo $name;
} elseif ($_COOKIE['name']) {

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

<a href="page.php">Web page</a>.

<hr>

<div id="forms">

    <form method="post">
        <p><input type="text" name="name"></p>
        <p><input type="submit" value="Submit" name="submit"></p>
    </form>

</div>
</body>
</html>
