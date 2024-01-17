<?php
echo "multidimensional array <br>";

$multidim = array(array(2,4,5,6),
array(7,5,3,5),
array(8,2,6,9),
array(5,7,1,4));

for($i=0;$i<count($multidim);$i++){
for($j=0;$j<count($multidim[$i]);$j++){
     echo $multidim[$i][$j];
echo " ";
}
echo "<br>";}
?>