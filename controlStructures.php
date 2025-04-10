<?php

// ========== Conditional Statements ==========

// if else
$x = 20;

if($x > 10){
    echo "Greater";
}elseif($x == 20){
    echo "Equal";
}else{
    echo "Smaller";
}


// switch case
switch($x){
    case "Monday" : echo "Start of the week"; break;
    default: echo "Another day";
}

$role = "Editor";
$action = "edit"; // User's action request

switch ($role) {
    case "Admin":
        echo "Access granted: You have full control.";
        break;
    
    case "Editor":
        switch ($action) {
            case "edit":
                echo "Access granted: You can edit content.";
                break;
            case "delete":
                echo "Access denied: You cannot delete content.";
                break;
            default:
                echo "Invalid action for Editor.";
        }
        break;
    
    case "User":
        echo "Access granted: You can only view content.";
        break;

    default:
        echo "Access denied: Unknown role.";
}


// loops

for($i = 0; $i < 10; $i++){
    echo "Number: " . $i . '<br>';
}

for($i = 1; $i <= 5; $i++){
    for ($j = 1; $j <= 5; $j++){
        echo "$i x $j = " . ($i * $j) . "\t";
    }
    echo "<br>";
}

for ($i =1; $i <= 10; $i++){
    if($i == 7){
        break;
    }
    if($i % 2 == 0){
        continue;
    }

    echo $i . '<br>';
}


// while loop
$num = 29;
$isPrime = true;
$i = 2;

while ($i <= sqrt($num)) {
    if ($num % $i == 0) {
        $isPrime = false;
        break;
    }
    $i++;
}

echo $isPrime ? "$num is a prime number" : "$num is not a prime number"; echo "<br>";


// foreach loop
$users = [
    ['name' => 'Hazrat', 'age' => 24, 'role' => 'admin'],
    ['name' => 'Ali',  'age' => 25, 'role' => 'Editor'],
    ['name' => 'Motu', 'age' => 23, 'role' => 'User'],
];

foreach ($users as $user){
    echo "Name: {$user['name']}, Age: {$user['age']}, Role: {$user['role']} <br>";
}

// do-while
$balance = 100;

do{
    echo "Current balance: $balance <br>";
    $balance -= 30;
}while($balance > 0);


// Infinite Loop with while(true) and break
$count = 0;
while(true){
    echo "Count: $count <br>";
    $count ++;
    if($count == 5) break;
}

//  Looping Through JSON Data
$jsonData = '[{"id": 1, "name": "Hazrat"}, {"id": 2, "name": "Ali"}]';
$users = json_decode($jsonData, true);

foreach ($users as $user){
    echo "ID: {$user['id']}, Name: {$user['name']} <br>";
}

?>