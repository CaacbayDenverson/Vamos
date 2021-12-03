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

$item = $_POST['item'];
$price = $_POST['price'];
$stock = $_POST['stock'];

$sql = "insert into inventory (item, price, stock) values ('$item','$price', '$stock')";


if(!mysqli_query($con, $sql))
{
	echo 'Not inserted.';
}

else {
	echo '<script>
	window.location = "inventory.php";
	alert("Added successfully.");
	
	 </script>';	
}
