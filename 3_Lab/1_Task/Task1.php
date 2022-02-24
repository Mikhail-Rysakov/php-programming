<?php //php 7.2.24

////////////////////////////
//Part1: Finding a word in the phrase
$phrase = "ahb acb aeb aeeb adcb axeb";
$mask = "/a[a-z0-9]{2}b/";
$matches = [];
preg_match_all($mask, $phrase, $matches);
print_r($matches);

?>
