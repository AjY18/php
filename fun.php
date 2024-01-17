<?php
function one( $arr){
     $sum =0;
     foreach($arr as $val){
        $sum= $sum+$val;
     }
return $sum;
}
function avg( $arr1){
    $sum =0;
    $i=0;
    foreach($arr1 as $val){
       $sum= $sum+$val;
     $i++;
    }
return $sum/$i;
}

function sum($one1,$two2){
$add =$one1+$two2;
return $add;
}
$ajay =[34,43,65,64,95];
$total_no= one($ajay);
$total_avg= avg($ajay);
echo("total marks $total_no");
echo("<br>");
echo("total average $total_avg");
echo("<br>");
$total_add = sum(12,15);
echo("addition is  $total_add");
?>