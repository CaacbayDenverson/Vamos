<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Vamos | Payment</title>
        <link rel="stylesheet" href="payment.css">
    </head>
<style>
    *{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
body{
background: #f5f5f5;
font-family:'Open Sans', sans-serif;
}
.logo{
    padding:30px;
    width:100%;
    height: 100px;
    background: #1EA1A1;
    color: #ffffff;
}

.information{
    margin-top:30px;
    margin-left: 7%;
    width:85%;
    height: 220px;
    background: #ffffff;
    border: 2px #1EA1A1 solid;
    border-radius: 10px;
}

.payment{
    margin-top: 20px;
    margin-left: 7%;
    width:85%;
    height: 300px;
    background: #ffffff;
    border: 2px #1EA1A1 solid;
    border-radius: 10px;
}

table, td, th {
	text-align: center;
    font-size:12px;
    padding:15px;
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

.txtb{
    margin-top: 70px;
    margin-left: 50px;
}

.btn{
    float:right;
    margin-right:50px;
    background-color: #1EA1A1;
    text-decoration:none;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
</style>


<body>
        <div class="logo">
          <h1>Checkout</h1>
        </div>


    <div class="information">
        <h3>Contact Information</h3><br>
        Fullname :<span id="fullname"></span> <br><br>
        Email :<span id="email"></span> <br><br>
        Contact Number :<span id="contactnumber"></span> <br><br>
        Address :<span id="address"></span>
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

        <div class="txtb">
          <label><b>Select Payment Method</b></label>
          <br>
            <select name="Select" id="payment">
              <option value="1">Gcash</option>
              <option value="2">Credit / Debit</option>
              <option value="3"></option>
            </select>

            <button class="btn">RESERVED</button>
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
    <script src="../js/app.js"></scrip>
    <script src="../js/loginpopup.js"></script>
</body>
</html>