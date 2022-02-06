<?php //php 7.2.24

//PART1: access by reference
echo "TASK1 \n";    
$very_bad_unclear_name = "15 chicken wings";
$order = &$very_bad_unclear_name;
$order .= "redro";
echo "$order";   //same as "very_bad_unclear_name"
    
?>
