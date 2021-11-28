<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login & Sign Up</title>
        <link rel="stylesheet" href="css/indexstyle.css">
        <link rel="stylesheet" href="css/btnstyle.css">
    </head>

    <style>
  .logo img{
    width:130px;
    height:50px;
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

    <div class="jam">
        <div class="i-left">
           <h1 style="color:white">Come, stay and enjoy your day.</h1>
           <br>
            
            <div class="form-box">
                
                <div class="open-btn">
                 <button class="open-button" onclick="addForm()">
                 <strong>Login</strong>
                 </button>
               </div>
               <div id="addPopup">
                 <div class="form-popup" id="popupForm">
                   <form action="login_db.php" method = "post" class="form-container">
                     <h2>Login</h2>
                     <label for="username">
                     <strong>Username</strong>
                     </label>
                     <input type="text" id="email" placeholder="" name="username" required>
                     <label for="password">
                     <strong>Password</strong>
                     </label>
                     <input type="password" id="psw" placeholder="" name="password" required>
                     <button type="submit" class="btn">Login</button>
                     <button type="button" class="btn cancel" onclick="closeForm()">Back</button>
                   </form>
                 </div>
               </div>

               <div class="open-btn">
                <button class="open-button" onclick="signForm()">
                <strong>Sign Up</strong>
                </button>
              </div>
              <div id="signPopup">
                <div class="form-popup" id="popupForm">
                  <form action="signup_db.php" method = "post" class="form-container">
                    <h2>Sign Up</h2>
                    <label for="username">
                    <strong>Username</strong>
                    </label>
                    <input type="text" id="email" placeholder="" name="username" required>
              
                    <strong>Password</strong>
                    </label>
                    <input type="text" id="email" placeholder="" name="password" required>

                    <button type="submit" class="btn">Add</button>
                    <button type="button" class="btn cancel" onclick="closeForm()">Back</button>
                  </form>
                </div>
              </div>
           </div>
           
        </div>
        <div class="i-right">
        </div>
      </div>

    <script src="js/app.js"></script>
    <script src="js/loginpopup.js"></script>
</body>
</html>