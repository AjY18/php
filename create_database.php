<?php
$servername ="localhost";
$username ="root";
$password ="";
$conn= mysqli_connect($servername,$username,$password);
if(!$conn){
    echo ("sorry we fail to connect".mysqli_connect_error());
}
else{
    echo "connect successfully";
}

$sql = "CREATE DATABASE dbajay1";
$result =mysqli_query($conn,$sql); 


if($result){
    die("the db was created successfully".mysqli_connect_error());
}
else{
    echo ("the db was not created successfully --->".mysqli_connect.error());
}

?>