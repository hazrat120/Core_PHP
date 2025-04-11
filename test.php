<?php
// echo "Name: " . $_GET['name']. '<br>';
// echo "Age: " . $_GET['age'];

if ($_FILES["file"]["error"] == 0) {
    move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $_FILES["file"]["name"]);
    echo "ফাইল আপলোড সফল হয়েছে!";
}

?>