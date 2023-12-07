<?php
include 'conection.php';
?>

<html>
<head>
<title>Mark Details</title>
</head>
<body>

</head>
<body>

<form action='markresult.php' method='POST'>
<center>
<table border=1px padding=40px width=600px>
<tr rowspan=2>
<td colspan=2><center><h1>student details</h1></tr>

<tr>
<td width=250px>KTU-ID</td>
<td>
<select name="ktuid">
<option value="">Select an option</option>
<?php
$query="SELECT ktuid from studentregistration";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_assoc($result))
{
echo "<option">.$row['ktuid'] . "<br></option>";
}
}
?>
</select>
</td>
</tr>


<tr>
<td width=250px>semester</td>
<td><input type='text' name='semester'></td>
</tr>

<tr>
<td width=250px>subject</td>
<td>
<select name="subject">
<option value="">Select an option</option>
<?php
$query2="SELECT subject from subjects";
$result2=mysqli_query($con,$query);
if(mysqli_num_rows($result2) > 0)
{
while($row = mysqli_fetch_assoc($result2))
{
echo "<option>".$row['subject'] . "<br></option>";
}
}
?>
</select>
</td>
</tr>

<tr>
<td width=250px>scores</td>
<td> FIRST SERIES <input type='text' name='series1'>
second SERIES <input type='text' name='series2'>
assignment <input type='text' name='assignmnet2'>
attendance <input type='text' name='attendance'>
</td>
</tr>



<tr>
<td colspan=2><center><input type="submit" values="save"></center></td>
</tr>
</table>
</center>
</form>
</body>
</html>












