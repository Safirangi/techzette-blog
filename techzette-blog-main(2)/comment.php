<?php      
     $host = "localhost";  
     $user = "root";  
     $password = '';  
     $db_name = "techzette";  
       
     $con = mysqli_connect($host, $user, $password, $db_name);  
     if(mysqli_connect_errno()) {  
         die("Failed to connect with MySQL: ". mysqli_connect_error());  
     } 

    $comment = $_POST['comment'];  
      
        //to prevent from mysqli injection
        $username = stripcslashes($username);  
  
        $comment = stripcslashes($comment);  
       
        $comment = mysqli_real_escape_string($con, $comment);  
     
      
        $sql = "insert into comment values ('$username','$comment')";  
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