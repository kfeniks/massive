<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 08.08.2017
 * Time: 18:18
 */

session_start();
$answer = $_POST['quest1'];
$_SESSION['quest1'] = $answer;

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Testing with session on server</title>
</head>
<body>

<h1>Quest. Step 2</h1>

<p>Question 2.</p>
<p>15-10= ?</p>

<div id="forms">

    <form action="step3.php" method="post">
        <p><input type="text" name="quest2"></p>
        <p><input type="submit" value="Submit" name="submit"></p>
    </form>

</div>

</body>
</html>
