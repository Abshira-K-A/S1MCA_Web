<?php
include 'conection.php';
if ($_POST)
{
$ktuid=$_POST['KTUID'];
$semester=$_POST['semester'];
$subject=$_POST['subject'];
$series1=$_POST['series1'];
$series2=$_POST['series2'];
$assignment=$_POST['assignment'];
$attendance=$_POST['attendance'];

if($con)
{
$rq="insert into markdetails values('$ktuid','$semester','$subject','$series1','$series2','$assignment','$attendance')";
$rs=mysqli_query($con,$rq);
if($rs)
{
$res= "marks added succesfully";
}
}
}
?>


<html>
<head><title>Marks status</title></head>
<body>
<center>
<h2><?php
echo "res";
?></h2>
</center>
</body>
</html>

