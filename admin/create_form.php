<!DOCTYPE html>
<html>
<head>
    <title>Vamos | Add Item</title>
    <link rel="stylesheet" type="text/css" href="form.css">
</head>

<body>
    <center><h3 class="logo" href="#">CREATE NEW PRODUCT</h3></center>

    <?php session_start(); ?>

    <div class="section1">
        <form action="create.php" method = "POST" class="container">
            <input type="text" name="item" placeholder="Item" >
            <input type="text" name="price" placeholder="Price">
            <input type="text" name="stock" placeholder="Stock">
            <input type="submit" value="Create"><br>
            <a class="btn" href="inventory.php">Back</a>
        </form>
    </div>
                
</body>
</html>