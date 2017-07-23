<?php
/**
 * Created by PhpStorm.
 * User: kecc
 * Date: 22.07.17
 * Time: 19:52
 */
        $h1='<h1>';
        $h1end='</h1>';
        $text='Урок массивы';

        class foo {
            var $bar = 'I am bar.';
            var $arr = array('I am A.', 'I am B.', 'I am C.');
            var $r   = 'I am r.';
        }

        $array = [
            "foo" => "bar",
            "bar" => "foo",
        ];

        $foo = new foo();

        class Bro {
            public static function hello() {
                echo 'Hello world!';
            }
        }
        $my_bro = 'Bro';
?>
<?= $h1.$text.$h1end ?>

<?= $array['foo']?>

<br>

<?= $foo->{bar} ?>

<br>

<?php $my_bro::hello(); //prints 'Hello world!' ?>

<?php

$b = "Hello ";
$b .= "There!";

?>

<?= $b ?>


