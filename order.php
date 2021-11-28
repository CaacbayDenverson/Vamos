<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "denver";

$conn = new mysqli($servername, $username, $password, $dbname);


$name = $_POST['name'];
$address = $_POST['address'];
$emailaddress = $_POST['emailaddress'];
$contactno = $_POST['contactno'];


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "insert into orders (name, address, emailaddress, contactno) values ('$name', '$address', '$emailaddress', '$contactno')";

if ($conn->query($sql) === TRUE) { 
  echo '<script>
        window.location = "indexlogin.php";
        alert("Thank you for purchasing! Please wait for our admin response through your email.");
        </script>';

} 

else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>