<?php
function contains_letters($word1, $word2) {
  for ($i = 0; $i < strlen($word1); $i++)
    if (strpos($word2, $word1{$i}) === false)
      return false;
  return true;
}

var_dump(contains_letters('abcde', 'abdefg'));
