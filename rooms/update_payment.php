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

$fullname = $_POST['fullname'];
$paid = $_POST['payment'];

	$sql = "UPDATE reservation SET paid = 'PAID' WHERE fullname ='$fullname'";

	if(!mysqli_query($con, $sql))
	{
		echo 'Not inserted.';
	}
	
	else {
		echo '<script>
		window.location = "../rooms.php";
		alert("Reserved Successfully.");
		</script>';	
	}
?>	