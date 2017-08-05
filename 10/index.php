<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 05.08.2017
 * Time: 9:40
 */

for ($i = 0; $i <= 50; $i++){
    if ($i == 30){
        break;
    }

    if (($i %2 ) == 0) {
        continue;
    }
        echo $i;
}