<?php

$mysqli = new mysqli('localhost', 'root', '', 'vamos_db');


$fullname="";
$email ="";
$contactnumber = "";
$nights="";
$room ="";
$paid = "";


if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM reservation WHERE id=$id");

    $_SESSION['message'] = "Reserved has been remove";

    header("location: reservation.php");
}
?>