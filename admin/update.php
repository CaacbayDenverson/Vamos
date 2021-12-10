<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'vamos_db');

	// initialize variables
    $id = "";
	$choice = "";
	$new = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['product_id'];
    $choice = $_POST['choice'];
    $product = $_POST['product'];


    mysqli_query($db, "UPDATE inventory SET $choice = '".$new."' WHERE id = '".$id."'");
    echo '<script>
	window.location = "inventory.php";
	alert("Updating successfully");
	
	 </script>';
}
else{
    echo '<script>
	window.location = "inventory.php";
	alert("Update Failed");
	
	 </script>';
}
?>