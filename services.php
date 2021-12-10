<?php

session_start();



?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Vamos | Services</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/logostyle.css">
    </head>
    <style>
table, td, th {
  text-align:start;
  width:50%;
    font-size:20px;
    padding:15px;
  }
  table, ul{
    margin-left: 20%;
    font-size: 20px;
  }
 table th{
    background-color: #1EA1A1;
    color: white;
}
 
table {
    width: 93%;
    margin-top:20px;
    margin-left: auto;
    margin-right: auto;
    border-collapse: collapse;
    border: 3px #1EA1A1 solid;
  }
 table tr:nth-child(odd){
    background-color: #ffffff;
}
table tr:nth-child(even){
    background-color: #ffffff;
}

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
                <a class="nav-button" href="about.php">About Us</a>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        </div>
    </nav>
  <div class="na">
    <h3>Services & Facilities</h3>
  </div>
  <table>
    <tr>
      <th>Hotel Services</th>
      <th>Hotel Facilities</th>
    </tr>
    <tr>
      <td>
        <ul style="list-style-type:square">
          <li>Catering services</li>
          <li>Concierge services</li>
          <li>Courier services</li>
          <li> Doctor on call</li>
          <li>Dry cleaning</li>
          <li>Excursions and guided tours</li>
          <li>Flower arrangement</li>
          <li>Ironing service</li>
          <li>Laundry and valet service</li>
          <li> Massages</li>
          <li>Room service (24-hour)</li>
          <li>Shoeshine service</li>
          <li>Valet parking</li>
        </ul>
      </td>
      <td>
        <ul style="list-style-type:square">
          <li>Banquet facilities</li>
          <li>Bar</li>
          <li>Computer facility</li>
          <li>Conference and meeting facilities</li>
          <li>Disabled room</li>
          <li>Fitness room</li>
          <li>Health club</li>
          <li>Sauna and steam bath</li>
          <li>Lounge</li>
          <li>Luggage storage</li>
          <li>Non-smoking rooms</li>
          <li>Smoking rooms</li>
          <li>Parking outside the hotel at an extra charge</li>
          <li>Pet friendly, at a surcharge</li>
          <li> Restaurant</li>
          <li> Complimentary Wi-Fi internet throughout the entire hotel</li>
        </ul>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
     
     
      </td>
    </tr>
  </table>
  


    <script src="js/app.js"></script>
    <script src="js/loginpopup.js"></script>

</body>
</html>