<?php
$naam=$_POST['naam'];
$email=$_POST['email'];
$aantal=$_POST['aantal'];

$dbServername = "localhost";
$dbUsername =  "db_84218";
$dbPassword = "Vb3$sr18";
$dbName = "loginsystem";

$conn = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);
