<?php
function isPrime($n) {
    if ($n <= 1) {
      return false; // 1 and below are not prime
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
      if ($n % $i == 0) {
        return false; // divisible by a number other than 1 and itself
      }
    }
    return true; // divisible only by 1 and itself
  }