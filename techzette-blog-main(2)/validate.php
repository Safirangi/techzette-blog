<?php      
     $host = "localhost";  
     $user = "root";  
     $password = '';  
     $db_name = "techzette";  
       
     $con = mysqli_connect($host, $user, $password, $db_name);  
     if(mysqli_connect_errno()) {  
         die("Failed to connect with MySQL: ". mysqli_connect_error());  
     } 

    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from signin  where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header('location:http://localhost/techzette-blog-main%20(2)/techzette-blog-main(2)/home.html ');
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }   
        

?>  