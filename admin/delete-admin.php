<?php
//include constants.php
include('../config/constants.php');
//1.get the id of admin to be deleted
$id = $_GET['id'];
//2. create sql query to delete admin
$sql = "delete from  tbl_admin where id=$id";
//execute the query
$res= mysqli_query($conn, $sql);

//check whether the query excuted successfully or not
if($res==true)
{
    //query executed successfully and admin deleted
  // echo "Admin Deleted";
  //create session variable to display message
  $_SESSION['delete']= "<div class='success'>Admin Deleted Successfully </div>";
  //redirect to manage admin page
  header('location:'.SITEURL.'admin/manage-admin.php');

}
else{
  //failed to delete admin
 // echo "Falied to delete Admin" ;
 $_SESSION['delete']="<div class='error'>Failed to Delete Admin.Try Again Later </div>";
 header('location:'.SITEURL.'admin/manage-admin.php');
}

//3.redirect to manage admin page with message (success/error)
?>