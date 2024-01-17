<?php
$a=10;
$b=20;

function printval(){
    global $a,$b; 
    /* using global we can  
     use funtion local variable value in 
     outside the function */
$a=40;
$b=30;
echo("value of a:$a and b:$b");
echo("<br>");
 /*in funtion we can not acces a 
global variable but we can change a using 
 a 'global ' keyword; */
}
printval();
echo("value of a:$a and b:$b");
?>