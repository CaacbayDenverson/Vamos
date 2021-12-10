<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="form.css">
        <title>Vamos | Double Type</title>
        <script>
          function passvalues()
          {
            var fullname = document.getElementById("fullname").value;
            localStorage.setItem("textvalue",fullname);
            var email = document.getElementById("email").value;
            localStorage.setItem("textvalue2",email);
            var contactnumber = document.getElementById("contact").value;
            localStorage.setItem("textvalue3",contactnumber);
            var address = document.getElementById("address").value;
            localStorage.setItem("textvalue4",address);
            var date = document.getElementById("date").value;
            localStorage.setItem("textvalue5",date);
            var nights = document.getElementById("nights").value;
            localStorage.setItem("textvalue6",nights);
            var price = document.getElementById("price").value;
            localStorage.setItem("textvalue7",price);
            var room = document.getElementById("room").value;
            localStorage.setItem("textvalue8",room);
            
            var subtotal;
            var nights = document.getElementById("nights").value;
            switch(nights) {
              case "1":
                subtotal = "1500.00";
                localStorage.setItem("textvalue9",subtotal);
                break;
              case "2":
                subtotal = "3000.00";
                localStorage.setItem("textvalue9",subtotal);
                break;
              case "3":
                subtotal = "4500.00";
                localStorage.setItem("textvalue9",subtotal);
                break;
              case "4":
                subtotal = "6000.00";
                localStorage.setItem("textvalue9",subtotal);
                break;
              case "5":
                subtotal = "7500.00";
                localStorage.setItem("textvalue9",subtotal);
                break;
              default:
              subtotal = "no nights selected";
              }



            return false;
          }

        </script>
  </head>
<body>
  <table class="table">
    <tr>
      <th>Description</></th>
      <th>Form</th>
      <th style="text-align:end"><a class="button" href="../rooms.php">Back</a></th>
    </tr>
    <tr>
      <td>
        <div class="row">
        <img src="../main/4.jpg">
        <br><br>
        <h3>Our king size bedded also provides views over landscaped buildings. It has ample storage, a seating area, digital safe and mini fridge.</h3>
      </div>
      </td>
      <td colspan="2">
      <form action="create_reservation.php" method = "POST" enctype="multipart/form-data" >
        <div class="txtb">
            <label><b>Room Name :</b></label>
            <input type="text" style="color:#1EA1A1" id="room" name="room" value="Double Type Room"> <br>
          </div>
          <div class="txtb">
            <label><b>Price :</b></label>
            <input type="text" style="color:#1EA1A1" id="price" name="price" value="1500.00"> <br>
        </div>
          <div class="txtb">
            <label><b>Enter Full Name :</b></label>
            <input type="text" style="color:#1EA1A1" id="fullname" name="fullname"> <br>
          </div>
          <div class="txtb">
            <label><b>Enter Email :</b></label>
            <input type="text" style="color:#1EA1A1" id="email" name="email"> <br>
        </div>
        <div class="txtb">
            <label><b>Enter Contact Number :</b></label>
            <input type="text" style="color:#1EA1A1" id="contact" name="contactnumber"> <br>
        </div>
        <div class="txtb">
            <label><b>Enter Address :</b></label>
            <input type="text" style="color:#1EA1A1" id="address" name="address"> <br>
        </div>
        <div class="txtb">
          <label><b>Check In Date :</b></label>
          <br>
            <input style="color:#1EA1A1" type="date" id="date" value="2021-12-15">
        </div>
        <div class="txtb box">
          <label><b>How many Night ? :</b></label>
          <br>
            <select id="nights" name="nights">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="4">5</option>
            </select>
        </div>
        
        <input class="btn" type="submit" value="Go to Payment" onclick="passvalues()">
        </form>
      </td>
    </tr>
  </table>
</body>
</html>