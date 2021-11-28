<?php

session_start();



?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Vamos | Admin</title>
        <link rel="stylesheet" href="inventory.css">
        

    </head>

<style>
	

</style>

<body>
    <nav>
    <div class="border">
        <div class="logo">
            <h4>VAMOS</h4>
        </div>
        </div>
    </nav>

    <div class="jam">
        <div class="i-left">
           <h1 style="color:white">Come, stay and enjoy your day.</h1>
           <br>
            
           <h1 style="color:white">Welcome &nbsp;<?php echo $_SESSION['username'];?></h1>
           <button class="btnlogout" onclick="window.location.href= '../index.php'; alert('Logging out...');" style = "background: white; color: #1EA1A1;">
                 <strong>Log Out</strong>
                 </button>


           </div>
        <div class="i-right">
        </div>
      </div>
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