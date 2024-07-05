<?php

// Problem 3: Nested sprintf Formatting
// Use sprintf to create a nested formatted string. For example, create a formatted string to store "The result of 5 * 6 is 30." Use variables for the numbers and the result.

	$fname= "mahmuda";
	$lname= "meem";
	
	// printf("my name is %s %s", $fname, $lname);
	$output = sprintf("My name is %s %s", $lname, $fname);
	echo $output;
	echo"<br/>";

	$num1 = 5;
	$num2 = 6;
	$result = $num1 * $num2;
	$output = sprintf("The result of %d * %d is %d",$num1,$num2,$result);
	echo $output;
	echo"<br/>";


// Problem 4: String Interpolation with Arithmetic
// Define variables $a, $b, and $c with values 2, 3, and 4. Use echo and string interpolation to output: "The product of 2, 3, and 4 is 24."

$a = 2;
$b=3;
$c=4;
$multiply= $a * $b * $c;
echo "The product of $a, $b, $c is $multiply";
echo"<br/>";


// Problem 6: Combined printf and sprintf
// Write a PHP script that first uses sprintf to create a formatted string, and then uses printf to output the formatted string along with additional text. For example:
// •	Use sprintf to format "The value is 42."
// •	Use printf to output "Result: The value is 42 and it's correct."


$value=24;
$output = sprintf("The value is %d",$value);
echo "$output";
echo"<br/>";

printf("Result: The value is $value and it's correct");
echo"<br/>";

// Problem 7: Complex String Formatting
// Define three variables with different types of values (string, integer, float). Use printf to output a single formatted string that includes all three values in a readable format.

$name= "Meem";
$age = 25;
$height = 4.11;

printf("My name is %s. I'm %d years old and I'm %.2f feet",$name,$age,$height);
echo"<br/>";

// Problem 8: Large Numbers and Precision
// Write a PHP script that defines a variable with a very large number (e.g., 123456789012345). Use printf to output this number in scientific notation with 2 decimal places.

$number = 123456789012345;
printf("The short form of $number is %.2e",$number);
echo"<br/>";

// Problem 9: String and Number Manipulation
// Define a string variable and a number variable. Use sprintf to create a formatted string that includes both variables, then output this string using echo. For example:
// php
// Copy code
// $stringVar = "Apples";
// $numberVar = 25;
// Output: "There are 25 Apples."

$stringVar = "Apples";
$numberVar = 25;
$output= sprintf("A busket full of %s. It weights %d KG",$stringVar,$numberVar);
echo "$output.<br/>";

// Problem 10: Summation with Formatting
// Create a PHP script that defines an array of numbers. Calculate the sum of these numbers and use printf to output the result in a formatted string.

$numbers = array(11, 42, 35, 47, 15);
$sum = array_sum($numbers);
printf("The sum of the array is: %d", $sum);
?>
