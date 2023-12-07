<?php
  $con=mysqli_connect('localhost','root','cetmca','stud');
$username=$_POST['username'];
$password=$_POST['password'];

if($con)
{
    echo"connection succesful";
}
else
{
    echo"connection failed";
}
    $sql="select * from register where username = '$username' and password = '$password'";
    $result = mysqli_query($con,$sql);
    
    

if(mysqli_num_rows($result)==1)
{
 
header("Location:frameset.php");
}
else
{
    echo "<h1>login failed. Invalid username or password.</h1>";
}
?>
