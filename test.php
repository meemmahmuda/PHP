<?php 
$name = 'Bangladesh';
$hello = 'Hello Bangladesh';

echo "$name $hello ";
echo "How are you";
echo "\n";

echo "Hello\nWorld";
echo "<br>";
echo '{$name}, {$hello}';
echo "<br>";
echo "{$name}, {$hello}";
echo "<br>";


// Variable
$a = 'Read';
echo $a."<br>";
$a = 'write';
echo $a;
echo "<br>";



// Constant
define("PI",3.14159);
echo "Value of PI =".PI;
echo "<br>";

echo constant("PI");
echo "<br>";


// Var Dump
$name = "Bangladesh";
var_dump($name);
echo "<br>";


// Printf
$fname = 'Mahmuda';
$lname = 'Meem';

printf("My name is %s %s",strtoupper($fname), $lname);
echo "<br>";



// 
$n = 7;                          
$m = ++$n;
echo $m, "<br>", $n;

// $n = 7;                          
// $m = $n++;
// echo $m, "<br>", $n;


// $m = $n++
// $m = $n
// $n = $n +1


// $m = ++$n
// $n = $n +1
// $m = $n
echo"<br>";



// Swap
$fname = "Isaac";
$lname = "Newton";
$middlename = "Nothing";

printf('His name is %3$s, %1$s %2$s', $fname, $middlename, $lname);
echo"<br>";



printf('The binary equivalent of %1$d is %1$b', 22);
echo"<br>";


$n = 45.126;
printf("%.2f",$n);
echo"<br>";




$m = 123.234445;
$n = 27.234;

printf("%08.2f",$m);
echo"<br>";
printf("%06.2f",$n);
echo"<br>";



// Leap Year

$year = 2004;

if($year % 4 == 0 && $year % 100==0 && $year % 400==0){
    echo "Its a leap year";
}else{
    echo "Its not a leap year" ;
}
echo"<br>";

if($year % 4==0 && ($year % 100 !=0 || $year % 400 ==0)){
    echo "{$year} is a leap year";
}else{
    echo "{$year} is not a leap year";
}
echo"<br>";



// Nesting
$con1=true;
$con2=false;
$con3=true;
if( $con1 && $con2 && $con3){
    echo "Hello";
}elseif($con1 && $con2){
    echo "no 1";
}elseif($con1){
    echo "no 2";
}else{
    echo "no 3";
}
echo"<br>";


// Ternary Operator
$n = 12;
$number = (12 == $n) ? "Twelve" : ((10 == $n) ? "Ten" : "A number");
echo $number;
echo"<br>";


// Switch Case
$color = 'black';
switch($color){
    case 'red':
    case 'green':
        echo ($color)." is my favorite";
        break;
    case 'blue':
        echo($color)." is not my fav";
    break;
    default:
        echo "This color is ok";
}
echo"<br>";




function checkVowel($char) {
    // Convert character to lowercase to handle both cases
    $char = strtolower($char);
    
    switch ($char) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
            echo "$char is a vowel.";
            break;
        default:
            echo "$char is not a vowel.";
            break;
    }
}

// Example usage
checkVowel('E'); // Output: A is a vowel.
echo"<br>";


$n = -2;
$p = abs($n) % 2; //absolute

switch(true){
    case (0== $p && 0<$n):
        echo"$n is a positive even number";
        break;
    case (0!= $p && 0<$n):
        echo"$n is a positive odd number";
        break;
    case (0== $p && 0>$n):
        echo"$n is a negative even number";
        break;
    case (0!= $p && 0>$n):
        echo"$n is a negative odd number";
        break;
}



// Loop
echo"<br>";
for ($i=1; $i<10; $i++) { 
    echo $i;
}
echo"<br>";


for ($j=0; $j<$i; $j++) { 
    echo"*";
}
echo"<br>";

$i =0;
while ($i < 10) {
    $i++;
    echo $i.PHP_EOL;
}
echo PHP_EOL;


echo "<br>";
echo "Go To";
$i =0;
a: $i++;
echo $i.PHP_EOL;
if($i<10) goto a;
echo "<br>";


for ($i=10; $i > 0 ; $i--) { 
    echo $i;
    echo PHP_EOL;
}
echo "<br>";

for ($i=10; $i > 0 ; $i--) { 
    echo $i.":".(10-$i);
    echo PHP_EOL;
}



















?>



 