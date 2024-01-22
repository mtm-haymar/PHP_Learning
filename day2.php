<!DOCTYPE html>
<html>
<body>

<h1>Learning - Day2</h1>

<?php
//Day2 -1/18/2024
echo "day 2";


echo "PHP echo and print Statements";
//echo has no return value while print has a return value of 1
//echo can take multiple parameters  while print can take one argument. echo is marginally faster than print.
//The echo statement can be used with or without parentheses: echo or echo().
echo "<h1>HTML Tag with echo output</h1>";
echo "for break line <br>";
echo "for ", "multiple ", "params";
//Display Variable
$txt1 = "Learn PHP";
$x = 5;
$y = 4;
echo "<h2> I" . $txt1 . "</h2>";
echo $x + $y;
//The print statement can be used with or without parentheses: print or print().
print "<h1>HTML Tag with print output</h1>";
print "for break line <br>";

echo "<h1>PHP Data Types</h1><br>";
//You can get the data type of any object by using the var_dump() function.
//The var_dump() function returns the data type and the value:
$x = 5;
var_dump($x);

//String, a sequence of character, can be any text inside quotes, can use single or double quotes:
$txt_string = "Hello world!";
var_dump($txt_string);

//PHP Integer
$int_test = 50;
var_dump($int_test);

//PHP Float
$x = 10.365;
var_dump($x);

//PHP Boolean True or flase
$x = true;
var_dump($x);

//PHP Array
//An array stores multiple values in one single variable.
echo "<br>";
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

//PHP Object
//Classes and objects are the two main aspects of object-oriented programming.
//A class is a template for objects, and an object is an instance of a class.


//PHP Null Values
//Null is a special data type which can have only one value: NULL.
//A variable of data type NULL is a variable that has no value assigned to it.
echo "<br>";
$x = "Hello world!";
$x = null;
var_dump($x);

//Change Data Type
//If you assign an integer value to a variable, the type will automatically be an integer.
//If you assign a string to the same variable, the type will change to a string:
echo "<br>";
$x = 5;
var_dump($x);

echo "<br>";
$x = "Hello";
var_dump($x);

//If you want to change the data type of an existing variable, but not by changing the value, you can use casting.
echo "<br>";
$x = 5;
$x = (string) $x;
var_dump($x);

//PHP string note
//There is a big different between double quotes and single quotes in PHP.
//Double quotes process special characters, single quotes does not.
echo "<br>";
$x = "John";
echo "Hello $x";

//Single quoted string literals returns the string as it is:
echo "<br>";
$x = "John";
echo 'Hello $x';

//String Length
//strlen() returen the lenght of the string
echo "<br>";
echo strlen("Hello world!");

//word count
//str_word_count() counts the number of words in a string
echo "<br>";
echo str_word_count("Hello world!");

//Search For Text Within a String
//strpos() function searches for a specific text within a string.
echo "<br>";
echo strpos("Hello world!", "world");
//6
//Tip: The first character position in a string is 0 (not 1).

//PHP - Modify Strings
//Upper Case
//strtoupper() function returns the string in upper case:
 echo "<br>";
 $x = "Hello World!";
echo strtoupper($x);

//Lower Case
//strtolower() function returns the string in lower case:
echo "<br>";
$x = "Hello World!";
echo strtolower($x);

//Replace String
//str_replace() function replaces some characters with some other characters in a string.
echo "<br>";
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);

//Reverse a String
// strrev() function reverses a string.
echo "<br>";
$x = "Hello World!";
echo strrev($x);

//Remove Whitespace
//trim() removes any whitespace from the beginning or the end:
echo "<br>";
$x = " Hello World! ";
echo trim($x);

//Convert String into Array
//The PHP explode() function splits a string into an array
//Split the string into an array. Use the space character as separator:
echo "<br>";
$x = "Hello World!";
$y = explode(" ", $x);
//Use the print_r() function to display the result:
print_r($y);

//String Concatenation
//To concatenate, or combine, two strings, use the . operator:

echo "<br>";
$x = "Hello";
$y = "World";
$z = $x . " ". $y;
// can write like this for space
//$z = "$x $y";
echo $z;

//Slicing
//You can return a range of characters by using the substr() function.
//Specify the start index and the number of characters you want to return.
echo "<br>";
$x = "Hello World!";
echo substr($x, 6, 5);


//Slice to the End
//By leaving out the length parameter, the range will go to the end:
echo "<br>";
$x = "Hello World!";
echo substr($x, 6);

//Slice From the End
//Use negative indexes to start the slice from the end of the string:
//Get the 3 characters, starting from the "o" in world (index -5):
echo "<br>";
$x = "Hello World!";
echo substr($x, -5, 3);
//Note The last character has index -1.

//Escape Character
//An escape character is a backslash \ followed by the character you want to insert.
echo "<br>";
$x = "We are the so-called \"Vikings\" from the north.";
echo $x;

//There are three main numeric types in PHP:
//Integer
//Float
//Number Strings\
echo "<br>";
$a = 5;
$b = 5.34;
$c = "25";
var_dump($a);
var_dump($b);
var_dump($c);

//PHP has the following predefined constants for integers:
//PHP_INT_MAX - The largest integer supported
//PHP_INT_MIN - The smallest integer supported
//PHP_INT_SIZE -  The size of an integer in bytes
echo "<br>";
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));

//PHP Math
//pi() function returns the value of PI:
echo "<br>";
echo(pi());

//min() and max() functions can be used to find the lowest or highest value in a list of arguments:
echo "<br>";
echo(min(0, 150, 30, 20, -8, -200));
echo "<br>";
echo(max(0, 150, 30, 20, -8, -200));


//abs() function returns the absolute (positive) value of a number:
echo "<br>";
echo(abs(-6.7));

//sqrt() function returns the square root of a number:
echo "<br>";
echo(sqrt(64));

//round() function rounds a floating-point number to its nearest integer:
echo "<br>";
echo(round(0.60));
echo "<br>";
echo(round(0.49));


//rand() function generates a random number:
echo "<br>";
echo(rand());
echo "<br>";
echo(rand(10, 100));

//Constant
//Constants are like variables, except that once they are defined they cannot be changed or undefined.
//To create a constant, use the define() function.
//define(name, value, case-insensitive);
//name: Specifies the name of the constant
//value: Specifies the value of the constant
//case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false. Note: Defining case-insensitive constants was deprecated in PHP 7.3. PHP 8.0 accepts only false, the value true will produce a warning.

echo "<br>";
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

echo "<br>";
//Create a constant with the const keyword:
const MYCAR = "Volvo";
echo MYCAR;

/*
const vs. define()
const are always case-sensitive
define() has has a case-insensitive option.
const cannot be created inside another block scope, like inside a function or inside an if statement.
define can be created inside another block scope.
*/


//magic constants are written with a double underscore at the start and the end, except for the ClassName::class constant










?>

</body>
</html>
