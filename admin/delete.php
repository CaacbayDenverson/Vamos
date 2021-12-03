<?php

$mysqli = new mysqli('localhost', 'root', '', 'istock');


$id ="";

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM inventory WHERE product_id=$id");

    $_SESSION['message'] = "Product has been deleted";

    header("location: inventory.php");
}
?>