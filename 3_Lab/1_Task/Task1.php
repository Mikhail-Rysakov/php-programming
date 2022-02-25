<?php //php 7.2.24

////////////////////////////
//Part A: Finding a word in the phrase
$phrase = "ahb acb aeb aeeb adcb axeb";
$mask = "/a[a-z0-9]{2}b/";
$matches = [];
preg_match_all($mask, $phrase, $matches);
print_r($matches);


////////////////////////////
//Part B: Conversion of numbers
$expression = "a1b2c3";
echo preg_replace_callback('/[0-9]/', function ($expression) {   //Использование лямбда-функции (анонимной-функции)
    return strtoupper($expression[0] ** 3);}, $expression);
?>
