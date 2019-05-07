<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login As Admin</title>
      <link rel="stylesheet" href="log.css"/>
  </head>
  <body>
    <div class="back">
      <div class="abc">

      </div>
    <div class="login">
    <a href="Event Invitation.html"><h2>&#10006;</h2></a>
    <h1 class="font_1" style="line-height:1.2em; text-align:center;">
      <span style="display:none;">&nbsp;</span>
      <span style="letter-spacing:0.15em;">Please Login First !!</span>
      <span style="display:none;">&nbsp;</span>
    </h1>
<br>
<br>
      <form action="loginAsAdmin.php" method="post">
         <div class="form-input">
        <input type="text" name="username" placeholder="Enter username">
        </div>
        <div class="form-input">
        <input type="password" name="password" placeholder="Enter password">
        </div>
      <br>
      <br>
        <input type="submit" name="submit" value="Ok, got it" class="btn-login">
      </form>

    </div>
  </div>


  <script src="http://connect.facebook.net/en_US/all.js"></script>

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
  name: 'welcome',
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
  <?php
  if(isset($_POST["submit"])){

    if(!empty($_POST['username']) && !empty($_POST['password'])){
      $username = $_POST['username'];
      $password = $_POST['password'];

      $con=@mysql_connect("localhost", "root", "") or die(@mysql_error());
      $db=@mysql_select_db('admin', $con) or die(@mysql_error());

      $query= @mysql_query("select * from admin where username='".$username."' and password='".$password."'");

      $numrows=@mysql_num_rows($query);

      if($numrows !=0)
      {
        while($row=@mysql_fetch_assoc($query))
        {
          $dbusername=$row['username'];
          $dbpassword=$row['password'];
        }
        if($username == $dbusername && $password == $dbpassword)
        {
          session_start();
          $_SESSION['sess_username']=$username;

          //redirect
          header("Location: adminView.php");


        }

      }
      else{
        echo "<script>alert('Invalid username or password')</script>";
      }

    } else {
      echo "<script>alert('All fields are required.')</script>";
    }
  }

   ?>


  </body>
</html>
