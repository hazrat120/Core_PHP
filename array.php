<?php

// Indexed Array
$fruits = ['Apple', 'Banana', 'Mango'];

echo $fruits[0]; echo "<br>";

foreach($fruits as $fruit){
    echo $fruit . "<br>";
}

// Important Functions for Indexed Arrays
$animals[] = 'Dog';
array_push($animals, 'Cat');
array_push($animals, 'Tiger');
array_pop($animals);
sort($animals);
foreach($animals as $animal){
    echo $animal . "<br>";
}
echo "<br>";
echo "<br>";


// Associative Array
$user = ['Name' => 'Hazrat', 'Age' => 25, 'Email' => 'hazrat.ali@gmail.com'];
echo $user['Name']; echo "<br>";

foreach($user as $key => $value){
    echo "$key: $value <br>";
}

array_keys($user);  // Get all keys
array_values($user);  // Get all values
isset($user["age"]);  // Check if key exists
unset($user["email"]);  // Remove key-value pair
echo "<br>";
echo "<br>";

// Multidimensional Array
$users = [
    ["name" => "Alice", "age" => 25, "email" => "alice@example.com"],
    ["name" => "Bob", "age" => 28, "email" => "bob@example.com"]
];
echo $users[0]['name']; echo "<br>";

// Looping Through a Multidimensional Array
foreach ($users as $user){
    echo "Name: {$user['name']}, Age: {$user['age']}, Email: {$user['email']} <br>";
}


//  Merging Two Arrays
$arr1 = ['Red', 'Green', 'Dark'];
$arr2 = ['Blue', "Yellow", 'Orange'];

$merged = array_merge($arr1, $arr2);
print_r($merged); echo "<br>";

// Filtering an Array
$numbers = [10, 20, 30, 40, 50, 60, 70, 80, 90];

$filtered = array_filter($numbers, function($num){
    return $num > 50; // Keep only numbers greater than 50
});

print_r($filtered); echo "<br>";


// Finding an Element in an Array
$fruits1 = ['Apple', 'Banana', 'Mango', 'Orange', 'Tomayto'];

if(in_array('Mango', $fruits1)){
    echo "Mango is in the list!";
}

?>