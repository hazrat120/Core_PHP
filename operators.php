<?php
echo "<h1 style='text-align: center;' >Operators</h1>";	

// public variables
$a = 10;
$b = 15;

// =========== arithmatic operators ===========
echo "<h2 style='text-align: center;'>Arithmatic Operators</h2>";	
$add = $a + $b;
echo "Addition (+): " . $add; echo "<br>";

$sub = $b - $a;
echo "Subtraction (-): ". $sub; echo "<br>";

$mul = $a * $b;
echo "Multiplication (*): ". $mul; echo "<br>";

$div = 30 / $b;
echo "Division (/): ". $div; echo "<br>";

$mod = $a % $b;
echo "Modulus (%): ". $mod; echo "<br>";

$exp = $a ** 3;
echo "Exponent (**): ". $exp; echo "<br>"; echo "<br>";



// =========== assignment operators ===========
echo "<h2 style='text-align: center;'>Assignment Operators</h2>";
// assignment (=)
$c = 20;
echo "Assignment: ". $c; echo "<br>";

// addition assignment (+=)
$c += 9;
echo "Addition Assignment (+=): ". $c; echo "<br>";

// subtraction assignment (-=)
$c -= 5;
echo "Subtraction Assignment (-=): " . $c; echo "<br>";

// multiplication assignment (*=)
$c *= 2;
echo "Multiplication Assignment (*=): ". $c; echo "<br>";

// division assignment (/=)
$c /= 2;
echo "Division Assignment (/=): ". $c; echo "<br>";

// modulus assignment (%=)
$c %= 3;
echo "Modulus Assignment (%=): ". $c; echo "<br>";

// exponent assignment (**=)
$c **= 2;
echo "Exponent Assignment (**=): ". $c; echo "<br>";



// ====== Comparison Operators ======
echo "<h2 style='text-align: center;'>Comparison Operators</h2>";
$d = 10;
$e = 5;
$f = '10';

// equal (==)
if($d == $f){
    echo "Equal (==): True"; echo "<br>";
}else{
    echo "Equal (==): False"; echo "<br>";
}

// not equal (!= or <>)
if($d != $e){
    echo "Not Equal (!= or <>): True"; echo "<br>";
}else{
    echo "Not Equal (!= or <>): False"; echo "<br>";
}

// Not Identical (!==)
if($d !== $f){
    echo "Not Identical (!==): True"; echo "<br>";
}else{
    echo "Not Identical (!==): False"; echo "<br>";
}


// greater then (>)
if($d > $e){
    echo "Greater then (>): True"; echo "<br>";
}else{
    echo "Greater then (>): False"; echo "<br>";
}

// less then (<)
if($e < $d){
    echo "Less then (<): True"; echo "<br>";
}else{
    echo "Less then (<): false"; echo "<br>";
}

// greater then or equal to (>=)
if($d >= $e){
    echo "Greater then or equal (>=): True"; echo "<br>";
}else{
    echo "Greater then or equal (>=): False"; echo "<br>";
}

// less then or equal (<=)
if($e <= $d){
    echo "Less then or equal (<=): True"; echo "<br>";
}else{
    echo "Less then or equal (<=): False"; echo "<br>";
}





// ===== Logical Operators =====
echo "<h2 style='text-align: center;'>Logical Operators</h2>";

// and (&&)
$age = 24;
$hasID = true;

echo "Logical AND (&&): ";
if($age >= 18 && $hasID){
    echo "You can vote."; echo "<br>";
}else{
    echo "Access denied."; echo "<br>";
}

// or (||)
echo "Logical OR (||): ";
if($age >=18 || $hasID){
    echo "You can vote."; echo "<br>";
}else{
    echo "YOu can't vote."; echo "<br>";
}

// not (!)
echo "Logical NOT (!): ";
if(!$hasID){
    echo "You can vote."; echo "<br>";
}else{
    echo "Access denied."; echo "<br>";
}

// xor (^^)
echo "Logical XOR (^^): ";
if($age >= 18 xor $hasID){
    echo "You can vote."; echo "<br>";
}else{
    echo "Access denied."; echo "<br>";
}




// ====== Bitwise Operators ======
echo "<h2 style='text-align: center;'>Bitwise Operators</h2>";

$x = 5;
$y = 3;

// And (&)
$result = $x & $y;
echo "Bitwise AND (&): $result"; echo "<br>";

// Or (|)
$result2 = $x | $y;
echo "Bitwise OR (|): $result2"; echo "<br>";

// Xor (^)
$result3 = $x ^ $y;
echo "Bitwise XOR (^): $result3"; echo "<br>";

// not (~)
$result4 = ~$x;
echo "Bitwise NOT (~): $result4"; echo "<br>";


// left shift (<<)
$result5 = $x << 2;
echo "Left Shift (<<): $result5"; echo "<br>";

// right shift (>>)
$result6 = $x >> 2;
echo "Right Shift (>>): $result6"; echo "<br>";




// ====== Incremement/Decrement Operators ======
echo "<h2 style='text-align: center;'>Increment/Decrement Operators</h2>";

// Post-Increment ($a++)
echo "Post-Increment ($a++): " . $a++; echo "<br>";
echo "A value: " . $a; echo "<br>";

// Pre-Increment (++$a)
echo "Pre-Increment (++$a): " . ++$a; echo "<br>";

//Post Decrement ($a--)
echo "Post-Decrement ($a--): " . $a--; echo "<br>";
echo "A value: " . $a; echo "<br>";

//Pre-Decrement (--$a)
echo "Pre-Decrement (--$a): " . --$a; echo "<br>";


// ======== String Operators ========
echo "<h2 style='text-align: center;'>String Operators</h2>";

// Concatenation (.)
$string1 = "Hello";
$string2 = "World";
$result7 = $string1 . " " . $string2;
echo "Concatenation (.): " . $result7; echo "<br>"; 


// Concatenation Assignment (.=)
$string1 .= " PHP!";
echo "Concatenation Assignment (.=): " . $string1; echo "<br>";





// ========== Ternary & Null Coalescing Operators ======
echo "<h2 style='text-align: center;'>Ternary & Null Coalescing Operators</h2>";

// Ternary (?:)  // (condition) ? (true result) : (false result);
$result8 = $age >= 18 ? "You are an adult." : "You are a minor.";
echo "Ternary (?:): " . $result8; echo "<br>";

$result9 = ($age >= 18) ?: "Minor";
echo "Ternary (?:): " . $result9; echo "<br>";


// null coalescing (??) // (left operand) ?? (right operand); $variable ?? "default value";
$result10 = $email ?? "No email provided.";
echo "Null Coalescing (??): " . $result10; echo "<br>";


// ============ Type Operators ============
echo "<h2 style='text-align: center;'>Type Operators</h2>";

// instanceof operator ($object instanceof ClassName)
class Animal{
    public function sound(){
        echo "Animal sounds.";
    }
}

class Dog extends Animal{
    public function sound(){
        echo "Woof! Woof!";
    }
}

$dog = new DOg();
echo "Instanceof operator: ";
echo $dog instanceof Dog; echo "<br>";
// echo $dog instanceof Animal; echo "<br>";

// is_ Function 
/* 
Common is_* Functions:

    is_int($var): Checks if the variable is an integer.

    is_string($var): Checks if the variable is a string.

    is_array($var): Checks if the variable is an array.

    is_object($var): Checks if the variable is an object.

    is_null($var): Checks if the variable is null.

    is_bool($var): Checks if the variable is a boolean.
*/

$number = 42;
if(is_int($number)){
    echo "Number is an integer."; echo "<br>";
}else{
    echo "Number is not an integer."; echo "<br>";
}

// gettype() function
echo "Gettype function: ";
echo gettype($number); echo "<br>";

// settype() function
echo "Settype function: ";
settype($number, "string");
echo $number; echo "<br>";

// typecast() function
$var = "47.57";
echo "Typecast function: ";
echo (int) $var; echo "<br>";

?> 