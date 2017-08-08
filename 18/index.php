<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 08.08.2017
 * Time: 10:10
 */
$nullName = '';
$nullLogin = '';

include_once 'function.php';

if (isset($_GET['submit'])){
    echo 'Form was send. <br />';
    if (($_GET['name'] == null) or ($_GET['login'] == null)) {
        if (!$_GET['name']) {
            $nullName = 'Please, input your Name.';
            echo $nullName;
        }
        if (!$_GET['login']) {
            $nullLogin = 'Please, input your Login.';
            echo $_GET['name'] . '! ' . $nullLogin;
        }
    }

    if ($_GET['name'] and $_GET['login']) {
        $name = $_GET['name'];
        $login = $_GET['login'];
        echo 'Hello, your name is ' . $name . '. And you choose login: ' .
            $login . '!';

        if($_GET['a'] and $_GET['b'] and $_GET['c']){
            $a = $_GET['a'];
            $b = $_GET['b'];
            $c = $_GET['c'];
            echo '<br/>';
            $result = quadratic($a, $b, $c);

            if ($result != false){
                print_r($result);
            } else echo 'Quadrat not found.';
        }
    }

} else {
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

        <form action="index.php" method="get">
            <p>Your name is: <input type="text" name="name"></p>
            <p>You wanna login: <input type="text" name="login"></p>

            <p>A is: <input type="text" name="a"></p>
            <p>B is: <input type="text" name="b"></p>
            <p>C is: <input type="text" name="c"></p>

            <p><input type="submit" value="Submit" name="submit"></p>
        </form>

    </div>
    </body>
    </html>


<?php } ?>