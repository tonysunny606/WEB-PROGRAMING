<html>
<body>
<h2>Electricity Bill</h2>
<form method="post" acion="#">
comsumer ID:<input type="number"name="id"><br>
Name:<input  type="text" name="name"><br>
Unit consumed:<input type="number"name="units"><br>
<input type="submit">
<input type="reset">
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$id=$_POST['id'];
$name=$_POST['name'];
$units=$_POST['units'];
echo"<h3>KSEB</h3>";
echo "consumer ID:".$id."<br>";
echo "consumer Name:".$name."<br>";
echo "units consumed:".$units."<br>";
if($units<=100)
{
$amt=$units*3;
}
else if($units>100&&$units<=200)
{
$amt=$units*4;
}
else if($units>200 && $units<=300)
{
$amt=$units*5;
}
else
{
$amt=$units*5;
}
echo "<h4>Total:Rs.".($amt)."</h4><br>";
}
?>
</form>
</body>
</html>
