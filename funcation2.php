<?php


function findLongestString($arr, &$index) {
  $longest = "";
  $index = -1;
  for ($i = 0; $i < count($arr); $i++) {
    if (strlen($arr[$i]) > strlen($longest)) {
      $longest = $arr[$i];
      $index = $i;
    }
  }
  return $longest;
}