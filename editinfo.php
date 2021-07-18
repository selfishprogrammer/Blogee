<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Edit | Profile</title>
  </head>
  <body style="background-color: cadetblue;">



  <?php 
  
  include 'header.php';
include 'dbconn.php';  
  
  
  ?>
<?php

$user=$_GET['user'];
$sql="select * from `profile` where `phone`='$user'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    $name=$row['name'];
   
    $email=$row['email'];
    $dist=$row['dist'];
    $state=$row['state'];
    $address=$row['address'];
    $category=$row['blog_category'];
   
}
?>


    <div class="container">

        <b><i>
                <h4 class="text-center my-4">Make Your Profile</h4>
            </i></b>


        <div class="card my-4">

            <div class="card-header">
                <h4 class="text-center"><b><i>Profile</i></b> </h4>

            </div>


            <div class="card-body">
            <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <input type="text" class="form-control" name="name" value="<?php echo $name ?>" id="name">

                    </div>
                   
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" value="<?php echo $email ?>" id="email">

                    </div>


                    <div class="form-group">
                        <input type="text" class="form-control" name="dist" value="<?php echo $dist ?>"  placeholder="Dist" id="dist">

                    </div>


                    <div class="form-group">
                        <input type="text" class="form-control" name="address" placeholder="Your Address" value="<?php echo $address ?>"  id="address">

                    </div>
                   
                   
                    <div class="form-group">
                        <input type="text" class="form-control" name="state"  value="<?php echo $state ?>"  placeholder="State" id="dist">

                    </div>



                    <div class="form-group">
                        <input type="text" class="form-control" name="blog_category" value="<?php echo $category ?>"  placeholder="Blog Category"
                            id="address">

                    </div>

                  


                  
                    <div class="card-footer">

                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-info">Update Information</button>

                        </div>


                    </div>

                </form>

            </div>

        </div>


    </div>

  <?php
  $user=$_GET['user'];
  if($_SERVER['REQUEST_METHOD']=='POST'){

    $name_user=$_POST['name'];
    $user_email=$_POST['email'];
    $user_state=$_POST['state'];
    $user_city=$_POST['dist'];
    $user_category=$_POST['blog_category'];
    $user_address=$_POST['address'];


    $sql1="update `profile` set `name`='$name_user' , `email`= '$user_email' , `state` ='$user_state' , `dist` ='$user_city' , `address` = '$user_address' , `blog_category` = '$user_category'  where `phone` = '$user'";
    $result1=mysqli_query($conn,$sql1);
    if($result1){

        header('location:fetchprofile.php');

    }
    else{
        die("Wrong");
    }

  }
  
  
  
  ?>
<?php include 'footer.php' ;?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>