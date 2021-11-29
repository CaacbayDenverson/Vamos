<?php 
include 'regulartype_db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="form.css">
        <title>Vamos | Regular Type</title></title>
  </head>

  <body>
    <div class="testing">
    <br>
    <a class="button" href="../rooms.php">Back</a>
    <a class="logo" href="#">Regular Type Room</a>
    </div>
    <div class="contact-form">
      <div class="row">
        <h1>Regular Type </h1>
        <img src="../main/1.jpg">
      </div>
        <form action="kingtype.php" method="post" enctype="multipart/form-data" >
          <div class="txtb">
            <label><b>Enter Full Name :</b></label>
            <input type="text" style="color:#1EA1A1" name="fname"> <br>
          </div>
          <div class="txtb">
            <label><b>Enter Email :</b></label>
            <input type="text" style="color:#1EA1A1" name="email"> <br>
        </div>
        <div class="txtb">
            <label><b>Enter Contact Number :</b></label>
            <input type="text" style="color:#1EA1A1" name="contact"> <br>
        </div>
        <div class="txtb">
            <label><b>Enter Address :</b></label>
            <input type="text" style="color:#1EA1A1" name="address"> <br>
        </div>
        <div class="txtb">
          <label><b>Check In Date :</b></label>
          <br>
            <input style="color:#1EA1A1" type="date" value="2017-06-01">
        </div>
        <div class="txtb box">
          <label><b>How many Night ? :</b></label>
          <br>
            <select name="nights">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="4">5</option>
            </select>
        </div>
        
          <button class="btn" type="submit" name="save">Proceed to Payment</button>
        </form>
      
    </div>
  </body>
</html>
<!--
http://codewithawa.com/posts/how-to-upload-and-download-files-php-and-mysql