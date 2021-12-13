<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Vamos | Payment</title>
        <link rel="stylesheet" href="payment.css">
    </head>

<body>
        <div class="logo">
          <h1>Payment</h1>
        </div>


    <div class="information">
        <h3>Contact Information</h3><br>
        <b>Fullname &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : <span id="fullname"></span> <br><br>
        Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;          : <span id="email"></span> <br><br>
        Contact Number : <span id="contactnumber"></span> <br><br>
        Address   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;    : <span id="address"></span></b>
    </div>

    <div class="payment">
        <h3>Reserve Room</h3>
        <table>
            <tr>
                <th>Room</th>
                <th>Nights</th>
                <th>Date</th>
                <th>Price</th>
                <th>Sub Total</th>
            </tr>
            <tr>
                <td><span id="room"></span></td>
                <td><span id="nights"></span></td>
                <td><span id="checkindate"></span></td>
                <td><span id="price"></span></td>
                <td><span id="subtotal"></span></td>
            </tr>
        </table>

        <div class="txtb box">
<!--payment button-->
        <div class="form-box">
            <div class="open-btn">
                <button class="open-button" onclick="addForm()">
                    <strong>PAY NOW</strong>
                </button>
            </div>
               <div id="addPopup">
                 <div class="form-popup" id="popupForm">
                   <form action="update_payment.php" method = "POST" class="form-container">
                     <h2>Payment</h2><br>
                     <label for="payment">
                     <strong>Enter Name :</strong>
                     </label>
                     <input type="text" id="fullname" placeholder="" name="fullname" required>
                     <label for="payment">
                     <strong>Enter Amount :</strong>
                     </label>
                     <input type="text" id="payment" placeholder="" name="payment" required>
                     <button type="submit" class="btn">Pay Now</button>
                     <button type="button" class="btn cancel" onclick="closeForm()">Back</button>
                   </form>
                 </div>
               </div>
            </div>
            
        </div>
    </div>
</div>






    <script>
    document.getElementById("fullname").innerHTML=localStorage.getItem("textvalue");
    document.getElementById("email").innerHTML=localStorage.getItem("textvalue2");
    document.getElementById("contactnumber").innerHTML=localStorage.getItem("textvalue3");
    document.getElementById("address").innerHTML=localStorage.getItem("textvalue4");
    document.getElementById("checkindate").innerHTML=localStorage.getItem("textvalue5");
    document.getElementById("nights").innerHTML=localStorage.getItem("textvalue6");
    document.getElementById("price").innerHTML=localStorage.getItem("textvalue7");
    document.getElementById("room").innerHTML=localStorage.getItem("textvalue8");
    document.getElementById("subtotal").innerHTML=localStorage.getItem("textvalue9");
    </script>
    <script src="../js/app.js"></script>
    <script src="../js/loginpopup.js"></script>
</body>
</html>