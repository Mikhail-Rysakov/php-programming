<?php //php 7.2.24

//Chapter1: Access by reference
echo "\n\n\nChapter1: Access by reference\n";   
//    
$very_bad_unclear_name = "15 chicken wings";
$order = &$very_bad_unclear_name;
$order .= "redro";
echo "\t$order";   //same as "very_bad_unclear_name"


//Chapter2: Numbers  
echo "\n\n\nChapter2: Numbers";                  
//
$numInt = 9;
echo "\n\t" . $numInt;
$numFloat = 9.0453;
echo "\n\t" . $numFloat;
echo "\n\t12";
$last_month = 1187.23;
$this_month = 1089.98;
echo "\n\t" . $last_month-$this_month;


//Chapter3: Multiplying and division
echo "\n\n\nChapter3: Multiplying and division"; 
//
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo "\n\t" . $days_per_language;


//Chapter4: Degree
echo "\n\n\nChapter4: Degree";                     
//
echo "\n\t" . 8**2;


//Chapter5: Assignment
echo "\n\n\nChapter5: Assignment";                 
//
$my_num = 9;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "\n\t" . $answer;

?>
