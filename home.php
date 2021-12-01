<?php

session_start();



?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Vamos | Home</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/logo.css">
        

    </head>

<style>
	

</style>

<body>
    <nav>
    <div class="logo">
        <img src="main/logo.png">
      </div>
        <ul class="nav-links">
                <a class="nav-button" href="home.php">Home</a>
                <a class="nav-button" href="rooms.php">Rooms</a>
                <a class="nav-button" href="services.php">Services</a>
                <!-- <a class="nav-button" href="#">Cart</a>
                <a class="nav-button" href="#">Profile</a> -->
                <a class="nav-button" href="about.php">About Us</a>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        </div>
    </nav>

    <div class="jam">
        <div class="i-left">
           <h1 style="color:white">Come, stay and enjoy your day.</h1>
           <br>
            
           <h1 style="color:white">Welcome &nbsp;<?php echo $_SESSION['username'];?></h1>
           <button class="open-button btn-logout" onclick="window.location.href= 'index.php'; alert('Logging out...');" style = "background: white; color: #1EA1A1;">
                 <strong>Log Out</strong>
                 </button>


           </div>
        <div class="i-right">
        </div>
      </div>
  <div class="na">
    <h3>Newest Rooms</h3>
  </div>
  
  <div class="imgko">
      <center>

      <div class="imgko">
        <div class="lalagyan">
            <div class="img1">
                <img src="main/1.jpg">
                <div class="card">
                    <center><h4><b>King Type</b></h4>
                    <h4><b>₱1000.00</b></h4></center>
                    <div class="purchase">
                        <a href="rooms/kingtype.php">PURCHASE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="imgko">
        <div class="lalagyan">
            <div class="img1">
                <img src="main/2.jpg">
                <div class="card">
                    <center><h4><b>Queen Type</b></h4>
                    <h4><b>₱1000.00</b></h4></center>
                    <div class="purchase">
                        <a href="rooms/queentype.php">PURCHASE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <div class="imgko">
        <div class="lalagyan">
            <div class="img1">
                <img src="main/3.jpg">
                <div class="card">
                    <center><h4><b>Studio Type</b></h4>
                    <h4><b>₱800.00</b></h4></center>
                    <div class="purchase">
                        <a href="rooms/studiotype.php">PURCHASE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <div class="imgko">
        <div class="lalagyan">
            <div class="img1">
                <img src="main/4.jpg">
                <div class="card">
                    <center><h4><b>Double Type</b></h4>
                    <h4><b>₱1,500.00</b></h4></center>
                    <div class="purchase">
                        <a href="rooms/doubletype.php">PURCHASE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="js/app.js"></script>
    <script src="js/loginpopup.js"></script>

</body>
</html>