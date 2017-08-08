<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 08.08.2017
 * Time: 17:17
 */

$arr = ['name' => 'Victor',
'surname' => 'Dudaev',
    'city' => 'Kiev',
    'age' => 57,
];

$result = serialize($arr);
setcookie('arr', $result);

var_dump($result);
