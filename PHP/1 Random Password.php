<?php
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(7)."\n";

// Using the Rand() Method

// <?php
//  $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
//  $pass = array(); 
//  $combLen = strlen($comb) - 1; 
//  for ($i = 0; $i < 8; $i++) {
//      $n = rand(0, $combLen);
//      $pass[] = $comb[$n];
//  }
//  print(implode($pass)); 
// 
