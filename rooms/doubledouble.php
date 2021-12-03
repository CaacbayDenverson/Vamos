<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="form.css">
        <title>Vamos | Double Double Type</title>
  </head>
  <body>
    <div class="testing">
    <br>
    <a class="button" href="../rooms.php">Back</a>
    </div>
    <div class="contact-form">
      <div class="row">
        <h1>Description</h1>
        <img src="../main/5.jpg">
      </div>
        <form action="payment.php" method="post" enctype="multipart/form-data" >
        <h1 id="room">Double Double Type</h1>
          <div class="txtb">
            <label><b>Enter Full Name :</b></label>
            <input type="text" style="color:#1EA1A1" id="fullname" name="fname"> <br>
          </div>
          <div class="txtb">
            <label><b>Enter Email :</b></label>
            <input type="text" style="color:#1EA1A1" id="email" name="email"> <br>
        </div>
        <div class="txtb">
            <label><b>Enter Contact Number :</b></label>
            <input type="text" style="color:#1EA1A1" id="contact" name="contact"> <br>
        </div>
        <div class="txtb">
            <label><b>Enter Address :</b></label>
            <input type="text" style="color:#1EA1A1" id="address" name="address"> <br>
        </div>
        <div class="txtb">
          <label><b>Check In Date :</b></label>
          <br>
            <input style="color:#1EA1A1" type="date" id="date" value="2017-06-01">
        </div>
        <div class="txtb box">
          <label><b>How many Night ? :</b></label>
          <br>
            <select name="nights" id="nights">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="4">5</option>
            </select>
        </div>
        
         <input class="btn" type="submit" value="Go to Payment" onclick="passvalues();">
        </form>
      
    </div>
    <script src="../js/displaydata.js"></script>
  </body>
</html>