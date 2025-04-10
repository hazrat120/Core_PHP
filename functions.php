<?php
function greet($name){
    return "Hello, $name";
}

echo greet('Hazrat Ali'); echo "<br>";


function greetUser($name = 'Guest'){
    echo "Hello, $name!";
}


greetUser();echo "<br>";
greetUser('Ali'); echo "<br>";

function multiplay(float $a, float $b) : float{
    return $a * $b;
}

echo multiplay(4.5, 6); echo "<br>";

function sumNumbers(...$numbers){
    return array_sum($numbers);
}

echo sumNumbers(1, 2, 3, 4, 5); echo "<br>";

function factorial($n){
    if($n == 0) return 1;
    return $n * factorial($n - 1);
};

echo factorial(5);  echo "<br>";


$anon = function($name){
    return "Hello , $name";
};

echo $anon("Ali"); 

function applyFunction($callback, $num){
    return $callback($num);
}

$square = function($x) {return $x * $x;};
echo applyFunction($square, 5); echo "<br>";


function getMultiplier($factor){
    return function($x) use ($factor){
        return $x * $factor;
    };
};

$double = getMultiplier(4);
echo $double(10); echo "<br>";

class Helper{
    public static function greet($name){
        return "Hello, $name!";
    }
}

echo Helper::greet('Hello Ali'); echo "<br>";


class Example{
    public function __call($name, $arguments)
    {
        echo "Method $name does not exit!";
    }
}

$obj = new Example();
$obj->undefineMethod();  echo "<br>";


function divide($a, $b){
    if($b == 0){
        throw new Exception("Division by zero is not allowed.");
    }
    return $a / $b;
}

try{
    echo divide(10, 0);
}catch(Exception $e){
    echo "Error: " . $e->getMessage();
}

?>