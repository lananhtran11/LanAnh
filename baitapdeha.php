<?php
function evenNumber($num){
if($num % 2 == 0) {
return " la so chan";
} else {
return " khong phai la so chan";
}
echo "bai 1:";
echo evenNumber(8);
echo "<br>";
}
function total($n){
$total = 0;
for ($i = 1; $i <= $n; $i++){
    $total +=$i;
}
return $total;
}
echo "bai 2: ";
echo total (8);
echo "<br>";
// function multiplicationTable(){
//     for ($x=1; $x<=10; $x++){
//         for ($y=1; $y <= 10; $y++){
//             $total= $x * $y;
//             echo "$x*$y= $total <br>";
//         }
//         echo "<br>";
//     }
// }
//     echo "bai 3:";
//     echo multiplicationTable();
//     echo "<br>";
function findWord( $word1, $word2){
    return strpos ($word1, $word2);
}
echo "bai 4:";
    echo findWord("Hello World", "World");
    echo "<br>";
function findMaxMin($word1, $word2, $word3, $word4){
$numbers = array($word1, $word2, $word3, $word4);
$max = max($numbers);
$min = min($numbers);
echo "Gia tri lon nhat la: " . $max . "
";
echo "Gia tri nho nhat la: " . $min;
}
echo "bai 5:";
echo findMaxMin(2, 5, 7, 9);
echo "<br>";
function arrange($word1, $word2, $word3, $word4){
    $numbers = array($word1, $word2, $word3, $word4);
    sort($numbers);
    foreach($numbers as $num)
    {
        echo $num;
        echo ";";
    }
}
echo "bai 6:";
echo arrange(5, 7, 2, 1);
echo "<br>";
function factorial($n){
    $total = 0;
    for ($i = 1; $i <= $n; $i++){
        $total *=$i;
    }
    return $total;
    }
    echo "bai 7: ";
    echo factorial (4);
    echo "<br>";
    function check_prime($n)
    {
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0){
                return false;
            }
        }
        return true;
    }
    function showPrime($n1, $n2){
    for ($i= $n1; $i <= $n2; $i++){
        if(check_prime($i))
        echo "{$i}; ";
    }
}
    echo "bai 8: ";
    echo showPrime (2, 10);
    echo "<br>";
function totalArray($word1, $word2, $word3, $word4){
    $number = array($word1, $word2, $word3, $word4);
    echo array_sum ($number);
}
echo "bai 9:";
echo totalArray(3,5,7,9);
echo "<br>";
function fibonacci($n) {
    $f0 = 0;
    $f1 = 1;
    $fn = 1;

    if ($n < 0) {
        return - 1;
    } else if ($n == 0 || $n == 1) {
        return $n;
    } else {
        for($i = 2; $i < $n; $i ++) {
            $f0 = $f1;
            $f1 = $fn;
            $fn = $f0 + $f1;
        }
    }
    return $fn;
}
function showFibonacci($n1){
    for ($i=0; $i <= $n1; $i++){
    echo (fibonacci($i)." ");
}
}
echo "bai 10: ";
echo showFibonacci(5);
echo "<br>";
function checkArmstrong($n){
    $num = strlen($n);
    $sum = 0;
    while($n > 0){
        $var = $n % 10;
        $sum += $var ** $num;
        $n /= 10;
    } 
    if ($n == $sum) echo "true";
    else echo "false";
}
echo "bai11: ";
echo checkArmstrong(376);
echo "<br>";
function addElement($word1, $word2, $word3, $word4, $word5, $word6, $word7){
$arr1 = array($word1, $word2, $word3);
$arr2 = array($word4, $word7);
array_splice($arr1, $word5, $word6, $arr2);
print_r ($arr1);
}
echo  "bai 12: ";
echo addElement ("1","2","3","4","2","1","6");
echo "<br>";
function expelElement($word1, $word2, $word3, $word4){
$arr = array ($word1, $word2, $word3, $word4);
print_r (array_unique ($arr));
}
echo "bai 13: ";
echo expelElement(1, 3, 3, 5);
echo "<br>";
function findLocation($word1, $word2, $word3, $word4){
$arr = array($word1, $word2, $word3);
for ($i=0; $i < 3; $i++){
    if ($arr[$i]== $word4)
    return "vi tri la : $i";
}
}
echo "bai 14:";
echo findLocation("2", "3", "5", "3");
echo "<br>";
function reserve($word){
    return strrev($word);
}
echo "bai15:";
echo reserve("Hello World");
echo "<br>";
function countElement($word1, $word2, $word3, $word4, $word5, $word6){
$arr = array($word1, $word2, $word3, $word4, $word5, $word6);
echo count($arr);
}
echo "bai16:";
echo countElement(4, 5, 6, 7, 3,6);
echo "<br>";
function testPalindrome($string){  
if ($string == strrev($string))  
	 return "true";  
	else  
	return "false";  
}  
echo "bai17:";
echo testPalindrome("Hello World");
echo "<br>";
function occurences($word1, $word2, $word3, $word4, $word5, $word6){
    $arr = array($word1, $word2, $word3, $word4, $word5, $word6);
    print_r(array_count_values($arr));
    }
    echo "bai18:";
    echo occurences(4, 5, 6, 5, 3,6);
    echo "<br>";
function arrange1($word1, $word2, $word3, $word4){
    $numbers = array($word1, $word2, $word3, $word4);
    rsort($numbers);
    foreach($numbers as $num)
    {
        echo $num;
        echo ";";
    }
}
echo "bai 19:";
echo arrange1(5, 7, 2, 1);
echo "<br>";
function addElementFirst($word1, $word2, $word3, $word4, $word5, $word6){
    $arr1 = array($word1, $word2, $word3);
    $arr2 = array($word4);
    array_splice($arr1, $word5, $word6, $arr2);
    print_r ($arr1);
    }
    echo  "bai 20: ";
    echo addElementFirst ("1","2","3","4","0","0");
    echo "<br>";
function findSecondNumber($word1, $word2, $word3, $word4){
    $numbers = array($word1, $word2, $word3, $word4);
    rsort($numbers);
    for ($i=0; $i<4; $i++){
if ($i==1)
return $numbers[$i];
}
}
echo "bai 21:";
echo findSecondNumber(2, 5, 7, 4);
echo "<br>";
function hcf($a, $b) {
    if ($b == 0) return $a;
    return hcf($b, $a % $b);
}
function Scm($a, $b) {
    return ($a * $b) / hcf($a, $b);
}
function showHcfScm($a, $b){
    echo "Uoc chung lon nhat la: ".hcf($b, $a % $b);
    echo "<br>";
    echo "Boi chung nho nhat la: ".($a * $b) / hcf($a, $b);
}
echo "bai22: ";
echo showHcfScm(30, 10);
echo "<br>";
function checkCompleteNumber($n){
    $total = 0;
    for ($i = 1; $i < $n; $i++){
        if ($n % $i == 0)
            $total += $i;  
        }
    if ($total == $n)
        return " $n la so hoan hao"; 
    return "$n khong la so hoan hao";     
}
echo "bai23: ";
echo checkCompleteNumber(6);
echo "<br>";
function largestOdd($word1, $word2, $word3, $word4){
    $number = array ($word1, $word2, $word3, $word4);
    rsort ($number);
    for ($i = 1; $i < 4; $i++)
    {
        if ($number[$i]%2 !=0)
        return "$number[$i]";
    }
}
echo "bai 24: ";
echo largestOdd(1, 2, 5, 9);
echo "<br>";
function checkP($n){
    if (check_prime($n))
    echo "$n la so nguyen to";
    else 
    echo "$n khong la so nguyen to";
}
echo "bai 25: ";
echo checkP(6);
echo "<br>";
function findFirstNumber($word1, $word2, $word3, $word4){
    $numbers = array($word1, $word2, $word3, $word4);
    rsort($numbers);
    for ($i=0; $i<4; $i++){
if ($i==0)
return $numbers[$i];
}
}
echo "bai 26:";
echo findFirstNumber(2, -2, 7, 4);
echo "<br>";
function findFirstN($word1, $word2, $word3, $word4){
    $numbers = array($word1, $word2, $word3, $word4);
    sort($numbers);
    for ($i=0; $i<4; $i++){
if ($i==0)
return $numbers[$i];
}
}
echo "bai 27:";
echo findFirstN(2, -2, -1, 4);
echo "<br>";
function totalOdd ($n){
    $total = 0;
    for ($i = 1; $i <= $n; $i++){
        if ($i % 2 !=0){
            $total = $total + $i;
        }
    }
    return $total;
}
echo "bai 28:";
echo totalOdd(9);
echo "<br>";
function perfectSquare($n){
    $i = 0;
  while($i*$i <= $n){
        if($i*$i == $n){
            return true;
        }
        $i++;
    }
    return false;
}
function showPS($a, $b){
    echo "Day cac so chinh phuong gom: ";
    for ($i = $a; $i <= $b; $i++){
        if(perfectSquare($i))
            echo $i, "; ";
    } 
}
echo "bai29: ";
echo showPS(2, 35);
echo "<br>";
function find($n1, $n2){
    return strpos($n1, $n2);
}
echo "bai30:";
echo find("Hello World Hehe", "Hello");
echo "<br>";
?>