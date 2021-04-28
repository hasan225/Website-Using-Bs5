<?php
$servername="localhost";
$username="root";
$password="";
$database="awesome template";

$conn=mysqli_connect($servername,$username,$password,$database);


if(!$conn){die("connection error due to ".mysqli_connect_error());}




?>