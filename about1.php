<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>About Us</title>
        <link rel="stylesheet" href="css/indexstyle.css">
    </head>
    <style>
  .logo img{
    width:130px;
    height:50px;
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
  float:right;
  width:50%;
  height:500px;
  background:#1EA1A1;
  border-radius:10px;
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
        <h1>HI</h1>
      </div>
      <!--Right-->
      <div class="rightus">
        <h1>Hi</h1>
        <h1>Hi</h1>
        <h1>Hi</h1>
        <h1>Hi</h1>
        <h1>Hi</h1>
        <h1>Hi</h1>
      <div class="form-box">
        <div class="open-btn">
          <button class="open-button" onclick="addForm()">
            <strong>CONTACT US</strong>
          </button>
        </div>
        <div id="addPopup">
          <div class="form-popup" id="popupForm">
            <form action="/action_page.php" class="form-container">
              <h2>CONTACT US</h2>
              <br>
              <button type="button" class="btn cancel" onclick="closeForm()">Back</button>
            </form>
          </div>
        </div>      
      </div>
    </div>


 









   



    <script src="js/app.js"></script>
    <script src="js/loginpopup.js"></script>
</body>
</html>