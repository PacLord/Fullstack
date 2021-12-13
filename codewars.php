<?php

/// https://www.codewars.com/kata/57a0e5c372292dd76d000d7e

function repeatStr($n, $str)
{
    $newstr = '';
    for ($i = 0; $i < $n; $i++){
        $newstr .= $str;
    }
    return $newstr;
}

/// https://www.codewars.com/kata/5168bb5dfe9a00b126000018/php

function solution($str) {
    return strrev($str);
  }

/// https://www.codewars.com/kata/5859c82bd41fc6207900007a/php

function quotable($name, $quote) {
    return "$name said: \"$quote\"";
  }


/// https://www.codewars.com/kata/582cb0224e56e068d800003c/php

function litres($t) {
  $lit = $t * 0.5;
  return floor($lit);
}

/// https://www.codewars.com/kata/5933a1f8552bc2750a0000ed/php

function nthEven($n) {
  return $n * 2 - 2;
}

/// https://www.codewars.com/kata/54ff3102c1bad923760001f3/php

function getCount($str) {
  $vowelsCount = 0;
  $vowels = ['a','e','i','o','u'];
  for ($i = 0; $i < strlen($str); $i++){
    if (in_array($str[$i], $vowels)){
      $vowelsCount++;
    };
  }
  
  return $vowelsCount;
}
/// https://www.codewars.com/kata/55bf01e5a717a0d57e0000ec/php

function persistence(int $num): int {
  if ($num < 10) return 0;
  $i = 1;
  foreach (str_split($num) as $n){
    $i *= $n;
  }
  return 1 + persistence($i);
}