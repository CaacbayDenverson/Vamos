<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>About Us</title>
        <link rel="stylesheet" href="css/indexstyle.css">
        <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"
    />
    </head>
    <style>
  .logo img{
    width:130px;
    height:70px;
  }
  /*ABOUT US STYLE*/
.aboutus{
    width:70%;
    height:500px;
    margin-top: 5%;
    margin-left: 15%;
    background:#eee;
    border:1px #1EA1A1 solid;
    border-radius:10px;
}
.leftus{
  float:left;
}
.rightus{
  padding-top:20px;
  padding-left:20px;
  float:right;
  width:60%;
  height:500px;
  background:#1EA1A1;
  border-radius:10px;
}
.rightus h1{
  color:white;
  font-family:calibri;
}


</style>

<body>
    <nav>
      <div class="logo">
        <img src="main/logo.png">
      </div>
        <ul class="nav-links">
                <a class="nav-button" href="index.php">Login & Sign Up</a>
                <a class="nav-button" href="about1.php">About Us</a>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        </div>
    </nav>

    <!--About Section-->
    <div class="aboutus">
      <!--Left-->
      <div class="leftus">
        <img class="logo_teal" src="main/logo_teal.png">
      </div>
      <!--Right-->
      <div class="rightus">
        <h1>Vamos Hotel</h1>
        <br>
        <br>
        <h1>Location :</h1>
        <h1>Olongapo City , Zambales</h1>
        <br>
        <h1>Contact Number :</h1>
        <h1>09 - 000 - 000- 000</h1>
        <br>
        <h1>Email Address :</h1>
        <h1>vamoshotel@gmail.com</h1>
        <br>
        <section class="social__media">
          <div class="social__media--wrap">
            <div class="social__icons">
              <a href="https://www.facebook.com/Vamos-Hotel-106825488504554/" class="social__icon--link" target="_blank"
                ><i class="fab fa-facebook"></i
              ></a>
              <a href="https://www.instagram.com/vamos_hotel?utm_medium=copy_link" class="social__icon--link"
                ><i class="fab fa-instagram"></i
              ></a>
              <a href="https://mobile.twitter.com/VamosHotel" class="social__icon--link"
                ><i class="fab fa-twitter"></i
              ></a>
            </div>
          </div>
        </section>
      </div>


 









   



    <script src="js/app.js"></script>
    <script src="js/loginpopup.js"></script>
</body>
</html>