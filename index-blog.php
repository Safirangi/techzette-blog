<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in | techzette</title>
    <style>
            @import url('https://fonts.googleapis.com/css2?family=Work+Sans&display=swap');

            :root {
            --font: "Work Sans", sans-serif;
            }

            * {
                font-family: var(--font);
            }
    </style>
</head>
<body>

<center>
<?php

// servername -> localhost
// username -> root
// password -> empty
// database name -> techzette
// port number -> 3307

//port 3306 and 3308 are used by other programs
$conn = new mysqli('localhost', 'root', 'safirangi', 'techzette', 3307);

//database connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

    $name = $_POST['name'];
    $email = $_POST['email'];

    //encrypting password in phpmyadmin : using MD5 algorithm (SHA1 is alternative to MD5)
    $password = md5($_POST['password']);

//insert query execution
//table name : signin_page

$sql = "INSERT INTO signin_page /*(name, email, password)*/ VALUES ('$name', '$email','$password')";

if(mysqli_query($conn, $sql)){
    echo "<h3>Data stored in a database successfully! </h3>";
        /*. " Please browse your localhost php my admin"
        . " to view the updated data*/

    echo nl2br("\nFull Name: $name\n"
        . "Email: $email\n");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// close connection
mysqli_close($conn);
?>

</center>
    
</body>
</html>