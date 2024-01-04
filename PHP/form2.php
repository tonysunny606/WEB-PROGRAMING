<html>
<head>
<title>
Form
</title>
</head>
<body bgcolor="teal">
<h2>Registration Form</h2>
<form name="form" method="post" action="#">
Name :<input type="text" name="name"><br>
Email:<input type="email" name="email"><br>
Mobile no :<input type="tel" name="mob"><br>
Username :<input type="text" name="user"><br>
Password :<input type="password" name="password"><br>
<input type="submit" value="submit" name="submit"/><br>
</form>
<?php
if(isset($_POST['submit']))
{
 $name=$_POST['name'];
 $email=$_POST['email'];
 $mobile=$_POST['mob'];
 $user=$_POST['user'];
 $password=$_POST['password'];
 
 
 if(empty($name))
 {
 echo"<script>alert('Enter name!!')</script>";
 }
 else if(!preg_match("/^[a-zA-Z]*$/",$name))
 {
 echo"<script>alert('Enter valid name!!')</script>";
 }
 else if(empty($email))
 {
echo"<script>alert('Enter email!!')</script>";
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
echo"<script>alert('Enter valid email : ')</script>";
}
else if(empty($mobile))
{
echo"<script>alert('Enter mobile no ')</script>";
}
else if(!preg_match("/^[0-9]*$/",$mobile))
{
echo"<script>alert('Enter valid mobile !!!')</script>";
}
else if(strlen($mobile)!=10)
{
echo "<script>alert('Enter valid 10 mobile!!')</script>";
}
else if(empty($user))
{
echo"<script>alert('Enter username ')</script";
}
else if(empty($password))
{
echo"<script>alert('Enter password !!')</script>";
}
else if(strlen($password)<8)
{
echo"<script>alert('Password must contain 8 characters !!')</script>";
}
else
{
echo"<script>alert('Registration Successfull !')</script>";
}
}
?>
</body>
</html>

