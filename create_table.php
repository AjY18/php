<?php

//connect server
$servername ="localhost";
$username ="root";
$password="";
$database="database1";
$conn=mysqli_connect($servername,$username,$password);

if(!$conn){
die("not connect".mysqli_connect_error());
}
else{
echo "connected";}


// //connect database
// $dataB =("CREATE DATABASE database1");
// $result = mysqli_query($conn,$dataB);

// if($result){
//     echo("create database".mysqli_connect_error());
// }
// else{
//     echo("not create database".mysqli_connect_error());
// }


//create table in database
$sql ="CREATE TABLE `database1`.`trip1` (`S no.` INT NOT NULL , `Name` VARCHAR(20) NOT NULL , `course` VARCHAR(20) NOT NULL , PRIMARY KEY (`S no.`)) ";
$result = mysqli_query($conn,$sql);

if($result){
    echo("create table");
}
else{
    echo("not create table".mysqli_connect_error($conn));
 }
?>