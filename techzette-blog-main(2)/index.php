
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!--Title-->
    <title>SIGN UP | Techzette</title>
    
    <!--Stylesheet-->
    <link rel="stylesheet" href="style/signup.css" />
    
    <!--Social Media Icons-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    
    <!--Favicon-->
    <link rel="icon" href="img/logo3.png" type="image/x-icon" />
    
    <!--Form Validation Link-->
    <script src="signup.js"></script>

  </head>
  
  <body style="background-image: url('img/book.jpg');background-size:cover;">
    
<!--Navbar-->
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
<!--Navbar-->
    
<!--Form-->
      <div class="card">
        <div class="glass">
          <div class="container">
          <div class="intro-text">
            <h2>Create Account</h2>
            <p>
              Already have an account?
              <a href="http://localhost/techzette-blog-main%20(2)/techzette-blog-main(2)/login.php" class="login">Login</a>
            </p>
          </div>
            
      <form name="form" action="index.php" method="post" id="form" onsubmit="return signup()">
        <?php include('error.php'); ?>
        <input type="text" name="name" id="name" placeholder="Full Name"/>
            
        <input type="email" name="email" id="email" placeholder="Email"/>
            
        <!--Password-->
            <input type="password" name="password" id="password" placeholder="Password"/>
        <div class="check-box">
            <input type="checkbox" onclick="viewPW()" class="show-pw"/>
            <label for="check" class="show-pw-label">Show Password</label>
          </div>
        <!--Password-->
        
            <div class="check-box">
              <input type="checkbox" id="checkbox" name="checkbox" value="check"/>
              <label for="check">
                I have read and agree to the
                <a href="policy.html" class="policy">Terms & Privacy</a>
              </label>
            </div>
            <button type="submit"  name="reg_user">Sign Up</button>
          </form>
            
        </div>
        </div>
      </div>
<!--Form--> 

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
