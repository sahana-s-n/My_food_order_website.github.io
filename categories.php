<?php include('partials-front/menu.php');?>



    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <?php
            //display all the categories that are active
            //sql query
            $sql="SELECT * FROM tbl_category WHERE active='Yes'";

            //execute the query
            $res=mysqli_query($conn,$sql);

           //count the rows
             $count=mysqli_num_rows($res);

            //check whether the categories are available or not
            if($count>0)
            {
                //category is available
                while($row=mysqli_fetch_assoc($res))
                {
                    //get the values
                    $id=$row['id'];
                    $title=$row['title'];
                    $image_name=$row['image_name'];
                      ?>
                                <a href="<?php echo SITEURL;?>category-foods.php?category_id=<?php echo $id;?>">
                                    <div class="box-3 float-container">
                                        <?php
                                         if($image_name=="")
                                         {
                                           //image  not available display message
                                           echo "<div class='error'>Image not available</div>";
   
                                         }
                                         else{       
                                               //image available
                                                    ?>
                                                    <img src="<?php echo SITEURL;?>images/category/<?php echo $image_name;?>" alt="Pizza" class="img-responsive img-curve">
                                                    
                                                  <?php
                                         }
                                       ?>

                                        <h3 class="float-text text-white"><?php echo $title;?></h3>
                                    </div>
                                </a>
                      <?php
                }
            }
           else
           {
              //category is not available
                echo "<div class='error'>Category not Found.</div>";
            }


            ?>
            <a href="category-foods.html">
            <div class="box-3 float-container">
                <img src="images/pizza.jpg" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white">Pizza</h3>
            </div>
            </a>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->


    <?php include('partials-front/footer.php');?>