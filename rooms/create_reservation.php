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
$email = $_POST['email'];
$contactnumber = $_POST['contactnumber'];
$address = $_POST['address'];
$checkindate = $_POST['checkindate'];
$nights = $_POST['nights'];
$room = $_POST['room'];
$paid = $_POST['paid'];

$sql = "insert into reservation (fullname, email, contactnumber, address, checkindate, nights, room, paid) values ('$fullname','$email', '$contactnumber', '$address', '$checkindate','$nights','$room', '$paid')";


if(!mysqli_query($con, $sql))
{
	echo 'Not inserted.';
}

else {
	echo '<script>
	window.location = "payment.php";
	
	 </script>';	
}
