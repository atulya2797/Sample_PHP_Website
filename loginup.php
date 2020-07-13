<?php
$servername="localhost";
$username="root";
$password="";
$database="Techyroots";

$conn=mysqli_connect($servername, $username, $password, $database);
$name=$_POST['user'];
$email=$_POST['email'];
$sql = "SELECT `Email address` FROM `registration` WHERE `Email address`='$email'";
$result = $conn->query($sql);
if($result-> num_rows >= 1) {
    echo "Welcome".$name;
    ?>
   <!DOCTYPE html>
   <html>
   <head>
   	<title></title>
   </head>
   <body>
   		<form action="loginpage.html">
   		<button>Login</button>
   </body>
   </html>
   <?php
}else{
	echo "Please Signup";
}
?>