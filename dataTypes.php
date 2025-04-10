<?php

// ========= php data types ========

// string
$str = "String data type";
echo 'String: ' . $str;
echo '<br>';

// integer 
$int = 99;
echo "Integer: " . $int;
echo "<br>";

// float 
$float = 88.88;
echo "Float: " . $float;
echo "<br>";

// boolean true/false
$boolean = true;
echo "Boolean: " . $boolean;
echo "<br>";

// array
$array = array(1, 2, 3, 4, 5);
$array2 = array('one', 'two', 'three', 'four', 'five');
var_dump($array, $array2);
echo "<br>";

// object 
class Car{
    public $brand;
    public $model;
    public $speed;

    public function __construct($brand, $model, $speed)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->speed = $speed;
    }

    public function showDetails(){
        return "This is a {$this->brand} {$this->model} with a top speed of {$this->speed} km/h.";
    }
}

// creating object
$car1 = new Car('BMW', 'X5', 500);
$car2 = new Car('Ford', 'Mustang', 400);

echo $car1->showDetails();
echo "<br>";
echo $car2->showDetails();
echo "<br>";

// null 
$email = null;

if(is_null($email)){
    echo "No email provided. Please enter you email.";
}else{
    echo "Your email is: $email";
}
echo '<br>';

// resource 
$file = fopen('./assets/resume.pdf', 'r');

if(is_resource($file)){
    echo "File opened successfullyl";
    fclose($file); // always close resource
}else{
    echo "Failed to open the file.";
}
?>