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

<?= $foo->{bar} ?>

<br>

<?php $my_bro::hello(); //prints 'Hello world!' ?>

<br>

<?php
${date("M")} = "Worked";
echo ${date("M")};
?>

<?php
class someclass {
    var $a = "variable a";
    var $b = "another variable: b";
}

$c = new someclass;
$d = "b";
echo $c->{$d};
?>

<br>
<?php
$one = "two";
$two = "three";
$three = "four";
$four = "five";
echo $$$$one; //prints 'five'.
?> 




