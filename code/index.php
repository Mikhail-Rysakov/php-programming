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


//Chapter6: Mathematical functions
echo "\n\n\nChapter6: Mathematical functions"; 
//Part1: division with remainder
echo "\n   Part1: division with remainder";     
echo "\n      Point1:";                              //Point1:
$a = 10; 
$b = 3;
$remainder = $a % $b;
echo "\n\t" . $remainder;
echo "\n      Point2:";                              //Point2:
if ($remainder == 0)
    echo "\n\tdivided";
else 
    echo "\n\tdivide with rest {$remainder}";
//Part2: degree and square functions
echo "\n   Part2: degree and square functions"; 
echo "\n      Point1:";                              //Point1:
$degree = pow(2,10);
echo "\n\t" . $degree; 
echo "\n      Point2:";                              //Point2:
$square = sqrt(245);
echo "\n\t" . $square;
echo "\n      Point3:";                              //Point3:
$vector = [4,2,5,19,13,0,10];
$sum = 0;
foreach ($vector as $single)
	$sum += pow($single,2);
$sum = sqrt($sum);
echo "\n\t" . $sum;
//Part3: rounding functions
echo "\n   Part3: rounding functions";          
echo "\n      Point1:";                              //Point1:
$square = sqrt(387);
echo "\n\t" . round($square,0);
echo "\n\t" . round($square,1);
echo "\n\t" . round($square,2);
echo "\n      Point2:";                              //Point2:
$square = sqrt(587);
$roundingDict = [
	'floor' => floor($square),
	'ceil' => ceil($square)];
echo "\n\t" . $roundingDict['floor'];
echo "\n\t" . $roundingDict['ceil'];
//Part4: max/min functions
echo "\n   Part4: max/min functions";           
echo "\n      Point1:";                              //Point1:
$vector = [4,-2,5,19,-130,0,10];
echo "\n\t" . min($vector);
echo "\n\t" . max($vector);
//Part5: random function
echo "\n   Part5: random function";             
echo "\n      Point1:";                              //Point1:
echo "\n\t" . rand(1,100);
echo "\n      Point2:\n\t";                          //Point2:
$vector = [];
for ($i = 0; $i < 10; $i++)
{
    $vector[] = rand(1,100);
    echo $vector[$i] . " ";
}
//Part6: absolute value function
echo "\n   Part6: absolute value function";     
echo "\n      Point1:";                              //Point1:
echo "\n\t" . abs($a-$b) . " = " . abs($b-$a);
echo "\n      Point2:\n\t";                          //Point2:
$vector = [1,2,-1,-2,3,-3];
for ($i = 0; $i < 6; $i++)
{
    $vector[$i] = abs($vector[$i]);
    echo $vector[$i] . " ";
}
//Part7: other exercises
echo "\n   Part7: other exercises";             
echo "\n      Point1:\n\t";                          //Point1:
$vector = [1,];
$num = 30;
for ($i = 2; $i <= $num/2; $i++) 
    if ($num%$i == 0)
        $vector[] = $i;
$vector[] = $num;    
foreach ($vector as $single)
    echo $single . " ";
echo "\n      Point2:";                              //Point2:
$vector = [1,2,3,4,5,6,7,8,9,10];
$sum = 0;
$iter = 0;
while ($iter < 10 && $sum <= 10)
    $sum += $vector[$iter++];
echo "\n\t" . $iter;
?>
