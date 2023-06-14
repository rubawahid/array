<?php
function removeOddNumbers($arr) {
    $newArr = array();
    foreach ($arr as $num) {
      if ($num % 2 == 0) {
        $newArr[] = $num;
      }
    }
    return $newArr;
  }