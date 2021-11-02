<?php 

$db = new SQLite3('data.db');
// $db->exec("CREATE TABLE IF NOT EXISTS newslatter(
//     id INT PRIMARY KEY,
//     email VARCHAR(255) UNIQUE
// );");

$email = $_POST['email'];

$sql = $db->exec("SELECT * FROM newslatter");
// var_dump($email);



// $db->exec("INSERT INTO newslatter (email) VALUES ('".$email."')");
header("Location: index.html");


// echo($sql);