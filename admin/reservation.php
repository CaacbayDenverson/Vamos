<?php

session_start();



?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Vamos | Reservation</title>
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
    <h3>List Of Check In</h3>
  </div>
  
  <div class="imgko">
      <center>

      <div class="imgko">
        <div class="lalagyan">
            <div class="img1">
                <div class="card">
                    <center><h4><b>King Type</b></h4>
                    <div class="purchase">
                        <a href="rooms/kingtype.php">CHECK INVENTORY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="imgko">
        <div class="lalagyan">
            <div class="img1">
                <div class="card">
                    <center><h4><b>Queen Type</b></h4>
                    <div class="purchase">
                        <a href="rooms/queentype.php">CHECK INVENTORY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <div class="imgko">
        <div class="lalagyan">
            <div class="img1">
                <div class="card">
                    <center><h4><b>Studio Type</b></h4>
                    <div class="purchase">
                        <a href="rooms/studiotype.php">CHECK INVENTORY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <div class="imgko">
        <div class="lalagyan">
                <div class="card">
                    <center><h4><b>Double Type</b></h4>
                    <div class="purchase">
                        <a href="rooms/doubletype.php">CHECK INVENTORY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="imgko">
        <div class="lalagyan">
            <div class="img1">
                <div class="card">
                    <center><h4><b>Double Double Type</b></h4>
                    <div class="purchase">
                        <a href="rooms/doubletype.php">CHECK INVENTORY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="app.js"></script>

    <script src="loginpopup.js"></script>

</body>
</html>