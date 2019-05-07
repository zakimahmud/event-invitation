<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RSVP</title>
    <link rel="stylesheet" href="rsvp.css"/>

  </head>
  <body>
    <div class="back">

    </div>
    <div class="main">
      <div class="abc">

      </div>
      <div class="login">

<div class="info">
  <a href="Event Invitation.html"><h2>&#10006;</h2></a>
  <h1 class="font_1" style="line-height:1.2em; text-align:center;">
    <span style="display:none;">&nbsp;</span>
    <span style="letter-spacing:0.15em;">CAN YOU COME?</span>
    <span style="display:none;">&nbsp;</span>
  </h1>
  <br>
  <h6 class="font_2" style="line-height:1.2em; text-align:center;">
    <span style="letter-spacing:0.15em;">We really hope you can make it.</span>
  </h6>
  <br>
  <br>
<form action="rsvp.php" method="post">
   <div class="form-input">
  <input type="text" name="Full_name" placeholder="Enter Full Name">
  </div>
  <div class="form-input">
  <input type="text" name="Address" placeholder="Enter Address">
  </div>
  <div class="form-input">
  <input type="text" name="Contact" placeholder="Enter Contact Number">
  </div>
  <div class="form-input">
    <h4>From which side?
  <input type="radio" name="Side" value="bride"> Bride
  <input type="radio" name="Side" value="groom"> Groom</h4>
</div>
<br>
<br>
<h6 class="font_2" style="line-height:1.2em; text-align:center;">
  <i><span style="letter-spacing:0.15em;">Sincerely, Bipasha & Siam</span></i>
</h6>
<br>
  <input type="submit" name="submit" value="I'm Going" class="btn-reg">
</form>
</div>
<br>

    </div>

    </div>
  </body>
</html>


<?php
$con=@mysql_connect("localhost", "root", "") or die(mysql_error());
$db=@mysql_select_db('rsvp', $con) or die(mysql_error());
if(isset($_POST['submit'])){
$full_name = $_POST['Full_name'];
$address = $_POST['Address'];
$contact = $_POST['Contact'];
$side = $_POST['Side'];

if($full_name==''){
echo "<script>alert('Enter your Full name')</script>";
}
if($address==''){
echo "<script>alert('Enter your Address')</script>";
}
if($contact==''){
echo "<script>alert('Enter your contact')</script>";
}
if($side==''){
echo "<script>alert('Select which side from you')</script>";
}
else {
$query= "insert into guests (Full_name,Address,Contact,Side) values ('$full_name','$address','$contact','$side')";

if(@mysql_query($query)){
echo "<script>alert('You are successfully register')</script>";
//echo "<script>window.open('Event Invitation.html')</script>";
}
}



}
 ?>
