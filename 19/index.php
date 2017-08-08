<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 08.08.2017
 * Time: 11:43
 */

if (isset($_POST['submit'])) {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Sample web page c HTTP Forms</title>
</head>
<body>
<h1>HTTP Forms</h1>
<!-- A comment -->
<div id="forms">

    <form action="index.php" method="post">
        <p>I love:</p>
        <p><input type="checkbox" name="love[]" value="Girls">Girls</p>
        <p><input type="checkbox" name="love[]" value="boobs">boobs</p>
        <p><input type="checkbox" name="love[]" value="cars">cars</p>
        <p><input type="checkbox" name="love[]" value="hamburgers">hamburgers</p>
        <p><input type="checkbox" name="love[]" value="Coca Cola">Coca Cola</p>
        <br/>
        <p>You are:</p>
        <p><input type="radio" name="gender" value="male">Male</p>
        <p><input type="radio" name="gender" value="female">Female</p>
        <p><input type="submit" value="Submit" name="submit"></p>
    </form>

</div>
</body>
</html>
