<?php
session_start();

// Database connection
$con = mysqli_connect('localhost','root','');


if(!$con)
{
	echo 'Not connected to the server.';
}

if(!mysqli_select_db($con, 'vamos_db'))
{
	echo 'Database not selected.';
}

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "insert into signup_tb(username, password) values('$username', '$password')";


if(!mysqli_query($con, $sql))
{
	echo 'Not inserted.';
}

else {
	echo '<script>
	window.location = "index.php";
	alert("Registered successfully.");
	
	 </script>';	
}
