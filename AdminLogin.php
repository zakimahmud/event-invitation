<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="admin.css"/>
  </head>
  <body>
<div class="login">
<a href="Event Invitation.html"><h2>&#10006;</h2></a>


  <form action="AdminLogin.php" method="post">
     <div class="form-input">
    <input type="text" name="username" placeholder="Enter username">
    </div>
    <div class="form-input">
    <input type="text" name="password" placeholder="Enter password">
    </div>
  <br>
  <br>
    <input type="submit" name="submit" value="Ok, got it" class="btn-login">
  </form>

</div>

  </body>
</html>

<?php
$con=@mysql_connect("localhost", "root", "") or die(@mysql_error());
$db=@mysql_select_db('admin', $con) or die(@mysql_error());
if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];

if($username==''){
echo "<script>alert('Enter your username')</script>";
}
if($password==''){
echo "<script>alert('Enter your password')</script>";
}
else {
$query= "insert into admin (username,password) values ('$username','$password')";

if(@mysql_query($query)){
echo "<script>alert('You are successfully register')</script>";
//echo "<script>window.open('Event Invitation.html')</script>";
}
}

}
?>
