<!DOCTYPE html>
<html>
<head>
    <title>Vamos | Add Item</title>
    <link rel="stylesheet" type="text/css" href="reservations/style.css">
</head>

<body>
<div class="testing">
    <br>
    <a class="back" href="inventory.php">Back</a>
    <center><h3 class="logo" href="#">CREATE NEW PRODUCT</h3></center>
    </div>

    <?php session_start(); ?>

    <div>
        <form action="create.php" method = "POST" class="container">
            <input type="text" name="item" placeholder="Item" >
            <input type="text" name="price" placeholder="Price">
            <input type="text" name="stock" placeholder="Stock">
            <input type="submit" value="Create">
        </form>
    </div>
                
</body>
</html>