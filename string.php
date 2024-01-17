
<?php
$name= "hello buddy how are you";
echo $name;
echo "<br>";
echo strlen($name);
echo "here the length of "."string is ". strlen($name);
echo "<br>";
echo "'strlen'  help we can know how many words in my string and it's also count a spaces  <br><br>";
echo "<br>";
echo "'str_word_count'  help we can count words<br>";
echo str_word_count($name);
echo "<br><br>";
echo " 'strrev'  help we can reverse a string :<br>";
echo strrev($name);
echo "<br><br>";
echo " 'str_replace'  help we can replace our a string :<br>";
echo str_replace("buddy" ,"Ajay",$name);
echo "<br><br>";
echo " 'str_repeat'  help we can repeat a string :<br>";
echo str_repeat($name,4);
?>
