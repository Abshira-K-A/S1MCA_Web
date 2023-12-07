<?php
include 'conection.php';
if ($_POST)
{
$name=$_POST['name'];
$ktuid=$_POST['ktuid'];
$semester=$_POST['semester'];
$rollno=$_POST['rollno'];
$gender=$_POST['gender'];


if($con)
{
$ab="insert into studentregistration values('$name','$ktuid','$semester','$rollno','$gender')";
$sh=mysqli_query($con,$ab);
if($ab)
{
$res="Registered successfully!";
}
}
}
?>

<html>
<head>
<title>Registration  status</title><head>
<body>
<center>
<h2><?php
echo "$res";
?></h2>

</center>
</body>
</html>
