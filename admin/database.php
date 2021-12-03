<?php

$mysqli = new mysqli('localhost', 'root', '', 'vamos_db');


$item="";
$price ="";
$stock = "";

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM inventory WHERE id=$id");

    $_SESSION['message'] = "Item been deleted";

    header("location: inventory.php");
}
?>