<?php

echo "Associative array";
$fun = array(
'rahul' => 'red',
'karan'=>'yellow',
'ajay'=>'blue',
8=>'green');
/*using for each we can print all array keys
and values*/
foreach($fun as $key=> $value){
    echo("<br>");
    echo("favorite color of $key is $value");
}
/*echo $fun[8];
echo "<br>";
echo $fun['ajay'];*/
?>