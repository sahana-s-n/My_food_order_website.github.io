<?php include('partials/menu.php'); ?>


<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br>
        <br>
        <?php
         if(isset($_SESSION['add']))//checked whether the session is set or not
         {
            echo $_SESSION['add'];//displaying session message
            unset($_SESSION['add']);//removing session message
         }
        ?>

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td>
                        <input type="text" name="username" placeholder="Your Username">
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name="password" placeholder="Your password">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>



<?php include('partials/footer.php'); ?>
<?php
//process the value  from form and save it in Database 
//check whether the button is clicked or not
if (isset($_POST['submit'])) {
    //button clicked
    // echo"Button clicked";

    //get the data from form
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']); //password encryption with md5

    //2.sql query to save the data into database
    $sql = "INSERT INTO tbl_admin SET
  full_name='$full_name',
  username='$username',
  password='$password'
  ";
    //3.execute query and save Data in database it is in constants.php
    $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    //4.check wheather the (query is executed) data is inserted or not and display the appropriate message
    if($res==TRUE)
    {
        //data inserted
        //echo" Data Inserted";
        //create a session variable to display the message
        $_SESSION['add']="<div class='success'>Admin added Successfully.</div>";
        //redirect the page
        header("location:".SITEURL.'admin/manage-admin.php');
    }
    else
    {
     //Failed to insert data
     //echo"Failed to Insert the Data";
     //create a session variable to display the message
     $_SESSION['add']="<div class='error'>Failed to Add Admin.</div>";
        //redirect the page add admin
        header("location:".SITEURL,'admin/manage-admin.php');
    }
}


?>