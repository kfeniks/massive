<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 05.08.2017
 * Time: 18:27
 */

$array = array(
    'Computer' => array( // 1 level
      'videocards' => array( // 2 level
          'Asus' => array( // 3 level
              'Asus PCI-Ex GeForce GTX 1060' => 10, // 4 level
              'Asus PCI-Ex GeForce GTX 1070' => 5. // 4 level
          ),
      ),
      'processors' => array( // 2 level
          'Intel Pentium G4400' => 10, // 3 level
          'Intel Core i3-6100' => 20, // 3 level
      ),
      'cases' => 5, // 2 level
      'motherboards' => 20, // 2 level
      'Arctic Cooling MX-4' => 23, // 2 level
    ),
    'Mixer' => array( // 1 level
        'ORAS Optima 1714F' => 24, // 2 level
        'GROHE BauEdge' => 15, // 2 level
    ),
    'Britax-Romer B-Agile Double Flame Red' => 23, // 1 level
);

echo 'It\'s array or not: ';
var_dump(is_array($array));
echo '<br/><br/>';

$summary = 0;

foreach ($array as $level) {
    if (is_array($level)) {
//        echo '<pre>';
//        print_r($level); // echo all massive
//        echo '</pre>';
        foreach ($level as $level2) {
            if (is_array($level2)) {
                foreach ($level2 as $level3) {
                    if (is_array($level3)) {
                        foreach ($level3 as $level4) {
                            if (is_array($level4)) {
                                        echo '<pre>';
                                        print_r($level); // echo all massive
                                        echo '</pre>';
                            } else {
                                $summary += $level4;
                            }
                        }
                    } else {
                        $summary += $level3;
                    }
                }
            } else {
                $summary += $level2;
            }
        }

    } else {
        $summary += $level;
    }
}
echo '<hr>';
echo $summary;

echo '<br/><br/>';

function summary($array , $level = 0){
//    var_dump($level);
    static $count;
    static $items;

    if (is_array($array)) {
//        echo 'It is really massive';
        $level++;
        foreach ($array as $element) {
//            echo '<pre>';
//            print_r($element); // echo all massive
//            echo '</pre>';

            summary($element , $level);
        }
    } else {
        $count++;
        $items += $array;
    }
    return array('count' => $count, 'items' => $items);
}

$result = summary($array);

print_r($result);