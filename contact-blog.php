<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | techzette</title>
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
// password -> empty or password
// database name -> techzette
// port number -> 3307

//port 3306 and 3308 are used by other programs
$conn = new mysqli('localhost', 'root', 'safirangi', 'techzette', 3307);

    /*$name = $POST_['name'];*/
    $email = $_POST['email'];

//database connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

if(isset($_POST["submit"])) {

    //retrieve the file title
    $title = $_POST["title"];

    //file name with a random number so that similar files do not get replaced
    $pname = rand(1000, 10000)."-".$_FILES["file"]["name"];

    //temporary file name to store file
    $tname = $_FILES["files"]["tmp_name"];

    //upload directory path
    $uploads_dir = '/techzette-blog';

    //to move the upload to a specific location 
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);

    //sql query to insert into database
    $sql = "INSERT into contact /*(name, email, title, techzette-blog)*/ VALUES ('$tname', '$email', '$title', '$pname')";


}

    

//insert query execution
//table name is 

/*$sql = "INSERT INTO fileup /*(email, password)*/ /*VALUES ('$name','$email')";*/

if(mysqli_query($sql, $conn)){
    echo "<h3>Data stored in a database successfully! </h3>";
        /*. " Please browse your localhost php my admin"
        . " to view the updated data*/

    echo nl2br("\nName: $name \n " 
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