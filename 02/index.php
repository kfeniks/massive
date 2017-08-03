<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 03.08.2017
 * Time: 23:02
 */

const Name = 'Banny';

echo Name;
?>

<br>
<br>

<?php

$a = "full";

unset($a);

if ($a == null) $a = 'Null';
echo $a;

?>

<br>
<br>

<?php

$hello = 'Hren tam >>';

$a = 'hello';

echo $$a;

echo '<br><br>';

//экранирование

echo "Гость сказал: \"Всем привет!\"";

?>

<br>
<br>

<?php
$a = 50;
$b = 70;

echo "Now we can see on {$a}'s year and on {$b}'s too also.";
?>

