<?php

session_start();



?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Vamos | Inventory</title>
        <link rel="stylesheet" href="style.css">
        

    </head>

<style>
	

</style>

<body>
    <nav>
    <div class="logo">
        <img src="../main/logo.png">
    </div>
    <ul class="nav-links">
                <a class="nav-button" href="inventory.php">Inventory</a>
                <a class="nav-button" href="reservation.php">Reservations</a>
                <button class="btnlogout" onclick="window.location.href= '../index.php'; alert('Logging out...');" style = "background: white; color: #1EA1A1;">
                 <strong>Log Out</strong>
                 </button>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        </div>
    </nav>

  <div class="na">
    <h3>ITEM'S Inventory</h3>
  </div>
  
  

    <script src="app.js"></script>

    <script src="loginpopup.js"></script>

</body>
</html>