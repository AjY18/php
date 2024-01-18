<?php
//way to connect to a mysql database
//   1.MySqli extension      2.PDO

echo "welcome to database <br>";
//connecting to the Database
$servername= "localhost";
$username ="root";
$password ="";

//create a connection 
$conn=mysqli_connect($servername,$username,$password);
//die if connection was not successful
if(!$conn){
    die("sorrry we failed to connect".mysqli_connect_error());
}
else{
echo" connect successfully";
}
?>