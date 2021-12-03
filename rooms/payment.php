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
                <th>Price</th>
                <th>Nights</th>
                <th>Email</th>
                <th>Nights</th>
                <th>Sub Total</th>
            </tr>
        </table>
        <div class="txtb box">
          <label><b>Select Payment Method</b></label>
          <br>
            <select name="Select" id="payment">
              <option value="">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
        </div>
        </div>
    </div>






    <script>
    document.getElementById("fullname").innerHTML=localStorage.getItem("fullname");
    document.getElementById("email").innerHTML=localStorage.getItem("email");
    document.getElementById("contactnumber").innerHTML=localStorage.getItem("contactnumber");
    document.getElementById("address").innerHTML=localStorage.getItem("address");
    document.getElementById("checkindate").innerHTML=localStorage.getItem("checkindate");
    document.getElementById("nights").innerHTML=localStorage.getItem("nights");
    document.getElementById("cost").innerHTML=localStorage.getItem("cost");
    document.getElementById("room").innerHTML=localStorage.getItem("room");
    </script>
    <script src="../js/app.js"></scrip>
    <script src="../js/loginpopup.js"></script>
</body>
</html>