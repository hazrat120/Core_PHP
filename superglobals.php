<?php

// $GLOBALS = এটি গ্লোবাল স্কোপে থাকা সব ভেরিয়েবলকে অ্যাক্সেস করতে ব্যবহৃত হয়।
$x = 10;
$y = 20;

function sum(){
    global $x, $y;
    echo "Sum is: " . $x + $y . '<br>'; 
}
sum();

function sumGlobal(){
    echo "Sum is: " . $GLOBALS['x'] + $GLOBALS['y'] . '<br>'; 
}
sumGlobal();


// $_SERVER = সার্ভার ও রানটাইম এনভায়রনমেন্ট সম্পর্কে তথ্য রাখে।
echo $_SERVER['PHP_SELF']. "<br>";
echo $_SERVER['SERVER_NAME']. "<br>";
echo $_SERVER['HTTP_HOST']. "<br>";
echo $_SERVER['HTTP_USER_AGENT']. "<br>";;
echo $_SERVER['REMOTE_ADDR'] . "<br>";

?>

<!--  $_REQUEST = GET & POST উভয় ডাটাই গ্রহণ করতে পারে। -->

<form action="" method="post">
    Name: <input type="text" name="username">
    <input type="submit">
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "Your name is: " . $_REQUEST['username'];
}
?>



<!-- $_POST == ফর্ম থেকে POST মেথড ব্যবহার করে ডাটা পাঠালে তা $_POST দ্বারা অ্যাক্সেস করা যায়। -->
<form action="" method="post">
    Name: <input type="text" name="name">
    <input type="submit" value="submit">
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "Your name is: " . $_POST['name'] . "<br>";
}
?>


<!--  $_GET  == Query String (URL Parameter) থেকে ডাটা সংগ্রহ করে।  -->
  <a href="test.php?name=Hazrat&age=24">Click Here</a>



<!--  $_FILES = এটি ফর্ম থেকে আপলোড করা ফাইল পরিচালনা করতে ব্যবহৃত হয়। -->
<form action="test.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Upload">
</form>

<!-- $_COOKIE =  কুকি সেট করে এবং পরবর্তী রিকোয়েস্টে রিড করে। -->
<?php
 setcookie('User', 'Rahim', time() + 3600, '/');

 if(isset($_COOKIE['user'])){
    echo "welcome, " . $_COOKIE['user'];
 }


//  $_SESSION ===== ইউজারের ডাটা সংরক্ষণ করে পুরো সাইটে ব্যবহারের জন্য

session_start();
$_SESSION['username'] = 'Rahim';
echo "Session set!" . "<br>"; 

// $_ENV == সার্ভারের এনভায়রনমেন্ট ভেরিয়েবল ধরে রাখে।

print_r($_ENV); echo "<br>";


//  $_PHP_SELF == নিজস্ব স্ক্রিপ্টের নাম রিটার্ন করে।
echo $_PHP_SELF; echo "<br>";

?>


