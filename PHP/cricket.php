<html>
<center>
<body>
<?php
$name=["verat kohle","rohit sharma","shikar dhawan","rishab paunde","hardec pandya"];
echo "<h4>cricket Team players name</h4>
<table border='1px'>
<tr><th>S1 No</th>
<th> NAME</th></tr>";
for($i=0;$i<10;$i++)
{
$sl=$i+1;
echo "<tr><td>$sl</td><th>$name[$i]</th></tr>";
}
echo "</table>";
?>
</body>
</html>
