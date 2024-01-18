<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
//Day1-1/18/2024
echo "Hello World!";

//echo for output
echo "This is output testing"."<br>";

// this is variable test
$var_name = "variable name";
echo "this is variable name test" .$var_name;

//this is comment test
// single-line comment
# also single-line comment
/* This is a
multi-line comment */

//variable test
// variable starts with the $ sign
$x = 5;
$y = "John";
echo "<br>";
echo $x;
echo "<br>";
echo $y;


echo "<br>";
$z = 5;
var_dump($z);

echo "<br>";
//Assign multiple values
$a = $b = $c = "Fruit";
echo "values".$a, $b, $c;

//PHP has three different variable scopes:
// local
// global
// static
//A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:

$global_scope = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable inside function is: $global_scope </p>";
}
myTest();

echo "<p>Variable outside function is: $global_scope</p>";



?>

</body>
</html>
