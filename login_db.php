<?php
session_start();


/* Database Connection */
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'vamos_db');
/* ------------------- */



$username = $_POST['username'];
$password = $_POST['password'];


$s = "select * from signup_tb where username = '$username' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	$_SESSION['username'] = $username;
	echo '<script>
		 window.location = "home.php";
		 
 		 </script>';	
}

else if ($num == 0) {
	echo '<script>
		 window.location = "index.php";
		 alert("Incorrect email and/or password.");
		 
 		 </script>';
}

else {
	header('location: index.php');	
}




?>


