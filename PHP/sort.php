<?php
$name=["adi","tony","kartik","anu","yadhu"];
$t=$name;
echo "deplayinh using print_r<br>";
print_r($name);
echo "<br><br>";
echo "sorting using asort()<br>";
asort($name);
print_r($name);
echo "<br><br>";
echo "sorting using assort()<br>";
asort($t);
print_r($t);
?>
