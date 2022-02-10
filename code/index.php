<?php //php 7.2.24

////////////////////////////
//Part1: Access by reference
echo "Part1: Access by reference";   
$very_bad_unclear_name = "15 chicken wings";
$order = &$very_bad_unclear_name;
$order .= "redro";
echo "\n\t" . "$order";   //same as "very_bad_unclear_name"

////////////////
//Part2: Numbers  
echo "\n\nPart2: Numbers";                  
$numInt = 9;
echo "\n\t" . $numInt;
$numFloat = 9.0453;
echo "\n\t" . $numFloat;
echo "\n\t12";
$last_month = 1187.23;
$this_month = 1089.98;
echo "\n\t" . $last_month-$this_month;

/////////////////////////////////
//Part3: Multiplying and division
echo "\n\nPart3: Multiplying and division"; 
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo "\n\t" . $days_per_language;

///////////////
//Part4: Degree
echo "\n\nPart4: Degree";                     
echo "\n\t" . 8**2;

///////////////////
//Part5: Assignment
echo "\n\nPart5: Assignment";                 
$my_num = 9;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "\n\t" . $answer;
    
////////////////////////////////
//Part6: Division with remainder
echo "\n\nPart6: Division with remainder";
//Point1:
$a = 10;                                     
$b = 3;
$remainder = $a % $b;
echo "\n\t" . $remainder . "\n\t";
//Point2:                            
if ($remainder == 0)
    echo "divided";
else 
    echo "divide with rest {$remainder}";

////////////////////////////////////
//Part7: Degree and square functions
echo "\n\nPart7: Degree and square functions"; 
//Point1:                        
$degree = pow(2,10);                            
echo "\n\t" . $degree; 
//Point2:                              
$square = sqrt(245);
echo "\n\t" . $square;
//Point3:                             
$vector = [4,2,5,19,13,0,10];
$sum = 0;
foreach ($vector as $single)
	$sum += pow($single,2);
$sum = sqrt($sum);
echo "\n\t" . $sum;

///////////////////////////
//Part8: Rounding functions
echo "\n\nPart8: Rounding functions";          
//Point1:                             
$square = sqrt(387);
echo "\n\t" . round($square,0);
echo "\n\t" . round($square,1);
echo "\n\t" . round($square,2);
//Point2:                             
$square = sqrt(587);
$roundingDict = [
	'floor' => floor($square),
	'ceil' => ceil($square)];
echo "\n\t" . $roundingDict['floor'];
echo "\n\t". $roundingDict['ceil'];

//////////////////////////
//Part9: Max/min functions
echo "\n\nPart9: Max/min functions";           
//Point1:                             
$vector = [4,-2,5,19,-130,0,10];
echo "\n\t" . min($vector);
echo "\n\t" . max($vector);

/////////////////////////
//Part10: Random function
echo "\n\nPart10: Random function";             
//Point1:                             
echo "\n\t" . rand(1,100) . "\n\t";
//Point2:                            
$vector = [];
for ($i = 0; $i < 10; $i++)
{
    $vector[] = rand(1,100);
    echo $vector[$i] . " ";
}

/////////////////////////////////
//Part11: Absolute value function
echo "\n\nPart11: Absolute value function";     
//Point1:                              
echo "\n\t" . abs($a-$b) . " = " . abs($b-$a) . "\n\t";
//Point2:                            
$vector = [1,2,-1,-2,3,-3];
for ($i = 0; $i < 6; $i++)
{
    $vector[$i] = abs($vector[$i]);
    echo $vector[$i] . " ";
}

////////////////////////
//Part12: Other exercises
echo "\n\nPart12: Other exercises\n\t";             
//Point1:                            
$vector = [1,];
$num = 30;
for ($i = 2; $i <= $num/2; $i++) 
    if ($num%$i == 0)
        $vector[] = $i;
$vector[] = $num;    
foreach ($vector as $single)
    echo $single . " ";
//Point2:                            
$vector = [1,2,3,4,5,6,7,8,9,10];
$sum = 0;
$iter = 0;
while ($iter < 10 && $sum <= 10)
    $sum += $vector[$iter++];
echo "\n\t" . $iter;

/////////////////////
//Part13: Functions-1
echo "\n\nPart13: Functions-1"; 
function printStringReturnNumber($numInt) : int
{
    echo "\n\tthere's your number " . $numInt;
    return $numInt;
}
$myNum = printStringReturnNumber(34);
echo "\n\t" . $myNum;

/////////////////////
//Part14: Functions-2
echo "\n\nPart14: Functions-2"; 
//Point1
function increaseEnthusiasm($str) : string           
{
    return $str . "!";
}
echo "\n\t" . increaseEnthusiasm('warning');
//Point2
function repeatThreeTimes($str) : string             
{
    return $str.$str.$str;
}
echo "\n\t" . repeatThreeTimes('seven');
//Point3
echo "\n\t" . increaseEnthusiasm(repeatThreeTimes('knock')); 
//Point4
function cut($str, $num = 10) : string               
{
    $len = strlen($str);
    if ($len > $num)
        return mb_substr($str, 0, -($len-$num));
    return $str;
}
echo "\n\t" . cut('cutmeoffplease') . "\n\t";
//Point5
$vector = [1,2,3,4,5];                               
function recursiveCycle($array, $iter=0) : void
{
    echo $array[$iter++] . " ";
    if ($iter < sizeof($array))
        recursiveCycle($array, $iter);
    return;    
}
recursiveCycle($vector);
//Point6
function numerize($num, &$sum) : void                
{
    
    $dotMover = ($num/10);
    $nextNum = (int)$dotMover;
    $precDigit = ($dotMover - $nextNum)*10;
    $sum += round($precDigit);
    if ($nextNum > 0)
        numerize($nextNum,$sum);
}
function nineAndLess($num, &$sum) : void
{
    numerize($num, $sum);
    if ($sum > 9)
    {
        $num = $sum;
        $sum = 0;
        nineAndLess($num, $sum);
    }
}
$randomNumber = 24357;   
$sum = 0;
nineAndLess($randomNumber, $sum);
echo "\n\t" . $sum;

?>
