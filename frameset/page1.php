<html>
<head>
<title>student registration</title>
</head>
<body>

<form action='registrationresult.php' method='POST'>
<center>
<table border=1px padding=40px width=600px>
<tr rowspan=2>
<td colspan=2><center><h1>Registration form</h1></center></td></tr>


<tr>
<td width=250px>Name</td>
<td><input type='text' name='name'></td>
</tr>
 
<tr>
<td width=250px>KTU-ID</td>
<td><input type='text' name='ktuid'></td>
</tr>

<tr>
<td width=250px>Semester</td>
<td><input type='text' name='semester'></td>
</tr>


<tr>
<td width=250px>Roll no</td>
<td><input type='text' name='rollno'></td>
</tr>

<tr>
<td width=250px>Gender</td>
<td><input type='radio' name='gender' value='male'>MALE</input><br>
<input type='radio' name='gender' value='female'>FEMALE</input><br>
<input type='radio' name='gender' value='other'>OTHER</input><br></td>
</tr>

<tr>
<td colspan=2><center><input type='submit' value='Register'></center></td>
</tr>
</table>
</center>
</form>
</body>
</html>
</html>
