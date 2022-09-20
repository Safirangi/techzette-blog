
<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!--Title-->
    <title>LOG IN | Techzette</title>
    
    <!--Stylesheet-->
    <link rel="stylesheet" href="style/login.css" />
    
    <!--Social Media Icons-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    
    <!--Favicon-->
    <link rel="icon" href="img/logo3.png" type="image/x-icon" />
    
    <!--Script </script>-->



  </head>

<!--Navigation & Header-->
  <body style="background-image: url('img/book.jpg');background-size:cover;">
    <header>
      <h5 class="brand"><a class="brand" href="home.html">Techzette</a></h5>
        <div class="navbar">
          <ol>
            <li><a href="home.html">Home</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="aboutUs.html">About Us</a></li>
            
          </ol>
        </div>
      </header>
<!--Navigation & Header-->
    
<!--Login Form-->
      <div class="card">
        <div class="container">
          <div class="intro-text">
            <h2>Log In</h2>
            <p>
              Don't have an account? Create one now. 
              <p><a href="index.php" class="signup">Sign Up</a></p>
            </p>
          </div>
        
          <form name="form" action="validate.php" method="post" id="form" >
            
  
            <input type="email" name="email" placeholder="Email" id="email"/>
            
            <!--Password-->
            <input type="password" name="password" placeholder="Password" id="password"/>
            <div class="check-box">
              <input type="checkbox" onclick="viewPW()" class="show-pw"/>
              <label for="check" class="show-pw-label">Show Password</label>
            </div>
              <a href="#" class="forgot">Forgot Password?</a>
            <!--Password-->
            
            <div class="btn">
            <!--Button type=submit, since javascript validation doesn't work with type=button-->
            <button type="submit" class="submit" name="login" >Log In</button>
            <button type="button" class="cancel">Cancel</button>
            </div>
          </form>
        
        </div>
      </div>
<!--Login Form-->
      
<!--Footer-->
      <footer>
        <div class="footer">
          <footer> <div class="social">
            <a href="#"><i class="icon ion-social-instagram"></i></a>
            <a href="#"><i class="icon ion-social-snapchat"></i></a>
            <a href="#"><i class="icon ion-social-twitter"></i></a>
            <a href="#"><i class="icon ion-social-facebook"></i></a>
          </div>
              <ul class="list-inline">
                  <li class="list-inline-item"><a href="home.html">Home</a></li>
                  <li class="list-inline-item"><a href="blog.html">Blog</a></li>
                  <li class="list-inline-item"><a href="contact.html">Contact Us</a></li>
                  <li class="list-inline-item"><a href="aboutUs.html">About Us</a></li>
                  <li class="list-inline-item"><a href="login.html">Log In</a></li>
                  <li class="list-inline-item"><a href="policy.html">Privacy Policy</a></li>
              </ul>
            <p class="copyright">Techzette © 2021-22</p>
          </div>
        </div>
        
      </footer>
<!--Footer-->
  
  </body>
</html>
