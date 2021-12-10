<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'vamos_db');

	// initialize variables
    $fullname = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];


    mysqli_query($db, "UPDATE reservation SET $paid = '".$new."' WHERE id = '".$id."'");
    echo '<script>
	window.location = "../room.php";
	alert("Payment Successfully");
	
	 </script>';
}
else{
    echo '<script>
	window.location = "payment.php";
	alert("Payment Failed");
	
	 </script>';
}
?>