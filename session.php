<?php
$servername="localhost";
$username="root";
$password="";
$database="atulya";

$conn=mysqli_connect($servername, $username, $password, $database);
$name=$_POST['user'];
$email=$_POST['email'];
$sql = "SELECT `Email address` FROM `details` WHERE `Email address`='$email'";
$result = $conn->query($sql);
if($result->num_rows >= 1) {
    echo "Email already exist, Please login<br>";
    ?>
   <!DOCTYPE html>
   <html>
   <head>
   	<title></title>
   </head>
   <body>
   		<form action="login.html">
   		<button>Login</button>
   </body>
   </html>
   <?php
}else{
	$email=$_POST['email'];
	$pass=$_POST['psd'];
	$sql = "INSERT INTO `registration` (`S.no`,`Username` `Email address`, `Password`) VALUES (NULL, '$email','$name', '$pass')";
	$result = mysqli_query($conn,$sql);
	echo "<h2>Welcome</h2>"."<h2>$name</h2>";
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="login.html">
		<button>LogOut</button>
	</body>
	</html>
	<?php
	}
	?>
