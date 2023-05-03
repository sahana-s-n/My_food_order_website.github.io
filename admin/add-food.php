<?php include("partials/menu.php")?>
<div class="main-content">
    <div class="wrapper">
      <h1>Add Food</h1>

      <br><br>
      <?php
              if (isset($_SESSION['upload'])) {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
      ?>

      <form action="" method="POST" enctype="multipart/form-data">

      <table class="tbl-30">
        <tr>
            <td>Title:</td>
            <td>
                <input type="text" name="title" placeholder="Title of the Food">
            </td>
        </tr>

        <tr>
            <td>Description:</td>
            <td>
                <textarea name="description" id="" cols="30" rows="5" placeholder="Description of the Food."></textarea>
            </td>
        </tr>

        <tr>
            <td>Price:</td>
            <td>
                <input type="number" name="price">
            </td>
        </tr>

        <tr>
            <td>Select_Image:</td>
            <td>
                <input type="file" name="image">
            </td>
        </tr>

        <tr>
            <td>Category:</td>
            <td>
                <select name="category">

                 <?php 
                 //create php to display category from database
                 //1.create sql to get all active categories from database
                $sql="SELECT * FROM tbl_category WHERE active='Yes'";
                //executing the query
                $res=mysqli_query($conn,$sql);

                //count rows whether we have category or not
                $count=mysqli_num_rows($res);
                //if count is greater then zero ,we have categories else we donot have categories
                
                if($count>0)
                {
                    //we have the category
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //get the details of categories
                        $id=$row['id'];
                        $title=$row['title'];
                        ?>

                         <option value="<?php echo $id;?>"><?php echo $title;?></option>

                        <?php
                    }
                }
                else
                {
                    //we do not have category
                    ?>
                     <option value="0">No Category Found</option>
                    <?php
                }

                 //2.display dropdown
                 ?>

                  
                </select>
            </td>
        </tr>

        <tr>
            <td>Featured:</td>
            <td>
                <input type="radio" name="featured" value="Yes">Yes
                <input type="radio" name="featured" value="No">No
        </td>
        </tr>
            
        <tr>
            <td>Active:</td>
            <td>
                    <input type="radio" name="active" value="Yes">Yes
                    <input type="radio" name="active" value="No">No
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="submit" name="submit" value="Add Food" class="btn-secondary">
            </td>
        </tr>
      </table>
      </form>

      <?php
      //check wheather the button is liked or not
      if(isset($_POST['submit']))
      {
        //add the food in database
       // echo "clicked";

       //1.get the data from form
        $title=$_POST['title'];
        $description=$_POST['description'];
        $price=$_POST['price'];
        $category=$_POST['category'];
        //check wheather radion button for featured and active are checked or not
        if(isset($_POST['featured']))
        {
            $featured=$_POST['featured'];
        }
        else
        {
           $featured="No";//setting the default value
        }

        if(isset($_POST['active']))
        {
            $active=$_POST['active'];
        }
        else
        {
           $active="No";//setting the default value
        }

       //2.upload the image if selected
       //check wheather the select image is clicked or not upload the image if the image is selected
       if(isset($_FILES['image']['name']))
       {
         //get the details of selected image
         $image_name=$_FILES['image']['name'];

         //check wheather the image is selected or not and upload image only if selected
         if($image_name!="")
         {
            //image is selected
            //A.rername the image
            // get the extension of selected image (jpg,phg,gif,atc)etc:"burger.jpg"
            $ext=end(explode('.',$image_name));//it select only the extension i.e, after the "." symbol

            // create new name for image
            $image_name="Food-Name".random_int(0000,9999).".".$ext;//new image name may be"Food-Name-657.jpg"
            //B.upload the image
            //get the source path and destination path

            //source path is the current location of the image
            $src= $_FILES['image']['tmp_name'];

            //destination path for image to be uploaded
            $dst="../images/food/".$image_name;

            //finally upload food image
            $upload=move_uploaded_file($src,$dst);
            //check whether image is uploaded or not

            if($upload==false)
            {
                //failed to upload the image
                //redirect to add food page with error message
                $_SESSION['upload']="<div class='error'>Failed to Upload Image</div>";
                header('location:'.SITEURL."admin/add-food.php");
                //stop the process
                die();
            }

         }
       }
       else{
        $image_name="";//setting default values as blank
       }

       //3.insert into database
       //create the sql query to save or add food
    //    for numarical we do not need to pass the value inside quotes ' ' but for string it is compulsory
       $sql2="INSERT INTO  tbl_food SET
         title='$title',
         description='$description',
         price=$price,
        image_name='$image_name',
        category_id=$category,
        featured='$featured',
        active='$active'
        ";

       //exceute  the query
       $res2=mysqli_query($conn,$sql2);
       //check wheather data is inserted or not
       //4.redirect with message to manage food page
       
    if($res==true)
       {
          //data inserted successfully
             $_SESSION['add']="<div class='success'>Food Added Successfully.</div>";
             header('location:'.SITEURL."admin/manage-food.php");
       }
       else
       {
        //failed to insert data
        $_SESSION['add']="<div class='error' class='text-center'>Failed to Added Food.</div>";
        header('location:'.SITEURL."admin/manage-food.php");
       }


       
      }
      ?>
    </div>
</div>

<?php include("partials/footer.php")?>