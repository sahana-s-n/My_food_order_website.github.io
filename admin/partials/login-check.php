<?php
//AUTHORIZATION - Access Control
//check whether the user is logged in or no
  if(!isset($_SESSION['user']))//if user session is not set
  {
    //user is not logged in
    //redirect to login page with message
    $_SESSION['no-login-message']="<div class='error text-center'>Please Login to access Admin Panel. </div>";
    //redirect to loin page
    header('location:'.SITEURL.'admin/login.php');
  }
?>