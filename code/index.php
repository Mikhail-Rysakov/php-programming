<?php //php 7.2.24

//PART1: access by reference
echo "TASK1 \n";    
$very_bad_unclear_name = "15 chicken wings";
$order = &$very_bad_unclear_name;
$order .= "redro";
echo "$order";   //same as "very_bad_unclear_name"

    
//PART2: numbers
echo "\n\nTASK2 \n";
$numInt = 9;
echo "{$numInt} \n";
$numFloat = 9.0453;
echo "{$numFloat} \n";
echo "12 \n";
$last_month = 1187.23;
$this_month = 1089.98;
echo $last_month-$this_month;

//PART3: multiplying and division
echo "\n\nTASK3 \n";
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language;

?>
