<?php

mb_internal_encoding("utf8");

$dsn = "mysql:dbname=lesson2;host=localhost;";
$usr = "root";
$pass = "";

$pdo = new PDO($dsn, $usr, $pass);

$pdo->exec("insert into 4each_keijiban (handlename, title, comments) values ('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");


header("Location:http://localhost/4each_keijiban/index.php");
?>