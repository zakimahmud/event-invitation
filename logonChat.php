<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Logon to chat</title>
      <link rel="stylesheet" href="logonChat.css"/>
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
        <input type="text" name="Full_name" placeholder="Enter username">
        </div>
      <br>
      <br>
        <input type="submit" name="submit" value="log on" class="btn-login">
      </form>

    </div>
  </div>

  <?php
  if(isset($_POST["submit"])){

    if(!empty($_POST['Full_name'])){
      $Full_name = $_POST['Full_name'];

      $con=@mysql_connect("localhost", "root", "") or die(@mysql_error());
      $db=@mysql_select_db('rsvp', $con) or die(@mysql_error());

      $query= @mysql_query("select * from guests where Full_name='".$Full_name."'");

      $numrows=@mysql_num_rows($query);

      if($numrows !=0)
      {
        while($row=@mysql_fetch_assoc($query))
        {
          $dbusername=$row['Full_name'];
        }
        if($Full_name == $dbusername)
        {
          session_start();
          $_SESSION['sess_Full_name']=$Full_name;

          //redirect
          header("Location: chatting.php");

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
