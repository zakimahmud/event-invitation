<?php

session_start();
unset($_SESSION['sess_username']);
session_destroy();
header("location:Event Invitation.html");
 ?>
