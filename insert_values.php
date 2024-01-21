<?php
//connect server
$servername ="localhost";
$username ="root";
$password="";
$database="database1";
$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
die("not connect".mysqli_connect_error());
}
else{
echo "connected";}


//value insert into table

$sql= "INSERT INTO `trip2` (`S no.`, `Name`, `course`) VALUES ('1', 'rohan', 'mca'), ('2', 'karan', 'bcom')";
$result = mysqli_query($conn, $sql);

if($result){
    echo("insert data into  table");
}
else{
    echo("data not insert into table".mysqli_connect_error($conn));
 }
 ?>