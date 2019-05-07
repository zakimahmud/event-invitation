<?php
session_start();
if(!isset($_SESSION["sess_username"])){
  header("location:loginAsAdmin.php");
}else{
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Page</title>
    <link rel="stylesheet" href="view.css">
  </head>
  <body>
      <script src="http://connect.facebook.net/en_US/all.js"></script>

    <div class="back">
      <div class="abc">
<a href="logout.php">Log Out</a>
      </div>
    <div class="login">

    <h1 class="font_1" style="line-height:1.2em; text-align:center;">
      <span style="display:none;">&nbsp;</span>
      <span style="letter-spacing:0.15em;">Welcome, <?=$_SESSION['sess_username'];?>!</span>
      <span style="display:none;">&nbsp;</span>
    </h1>
<br>
<br>
<input type="button" name="" value="INVITE" onclick="FacebookInviteFriends();" class="btn-invite">
    </div>
  </div>

  <script>
  FB.init({
  appId:'1386063544772102',
  cookie:true,
  status:true,
  xfbml:true
  });

  function FacebookInviteFriends()
  {
  FB.ui({
  method: 'send',
  message: 'Your message dialogue',
  link: 'http://www.fbrell.com/'
  });
  }
  </script>

  <script type='text/javascript'>
  if (top.location!= self.location)
  {
  top.location = self.location
  }
  </script>

  </body>
</html>
<?php
}
  ?>
