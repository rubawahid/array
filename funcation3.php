<?php
function multiplyArrays($arr1, $arr2) {
    $result = array();
    for ($i = 0; $i < count($arr1); $i++) {
      $result[] = $arr1[$i] * $arr2[$i];
    }
    return $result;
}