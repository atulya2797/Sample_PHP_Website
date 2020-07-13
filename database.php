<?php
$servername="localhost";
$username="root";
$password="";

$conn = mysqli_connect($servername, $username, $password);
$sql = 'CREATE DATABASE Techyroots';
$result=mysqli_query($conn,$sql);
if($result){
	echo var_dump($result);
	echo "Database created successfully";
}
else{
echo "Try again";}
?>