<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 08.08.2017
 * Time: 18:18
 */

session_start();
$answer = $_POST['quest3'];
$_SESSION['quest3'] = $answer;

$answer1 = $_SESSION['quest1'];
$answer2 = $_SESSION['quest2'];
$answer3 = $_SESSION['quest3'];

$rite = 0;

if ($answer1 == 4) {$rite += 33; $answer1 = 'good';}
else $answer1 = 'wrong answer';

if ($answer2 == 5) {$rite += 33; $answer2 = 'good';}
else $answer2 = 'wrong answer';

if ($answer3 == 7561) {$rite += 33; $answer3 = 'good';}
else $answer3 = 'wrong answer';


?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Testing with session on server</title>
</head>
<body>

<h1>Quest. End</h1>

<p>Result is:</p>
<hr>
<p>Question 1: <?= $answer1 ?></p>
<p>Question 2: <?= $answer2 ?></p>
<p>Question 3: <?= $answer3 ?></p>
<p>Your rite is <?= $rite ?>%!</p>

</body>
</html>
