<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Blogiee | Profile</title>
</head>

<body style="background-color: yellow;">
    <?php 
  
include 'header.php';
include 'dbconn.php';  
  
  
  ?>
    <?php

$user=$_GET['user'];
$sql="select * from `login` where `phone`='$user'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
$name=$row['name'];
$phone=$row['phone'];
$email=$row['email'];
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
                        <input type="number" class="form-control" name="phone" value="<?php echo $phone ?>" id="phone">

                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" value="<?php echo $email ?>" id="email">

                    </div>


                    <div class="form-group">
                        <input type="text" class="form-control" name="dist" placeholder="Dist" id="dist">

                    </div>


                    <div class="form-group">
                        <input type="text" class="form-control" name="address" placeholder="Your Address" id="address">

                    </div>


                    <div class="form-group">
                        <input type="text" class="form-control" name="state" placeholder="State" id="dist">

                    </div>



                    <div class="form-group">
                        <input type="number" class="form-control" name="pin" placeholder="Your Address Postcode"
                            id="address">

                    </div>

                    <div class="form-group">


                        <select class="custom-select" name="blog_category" required>
                            <option value="">Choose Your Blog Category</option>
                            <option value="Motivational Blogs">Motivational Blogs</option>
                            <option value="Sad Blogs">Sad Blogs</option>
                            <option value="Love Blogs">Love Blogs</option>
                            <option value="Motivational Thought">Motivational Thought</option>
                            <option value="Sad Thought">Sad Thought</option>
                            <option value="Love Thought">Love Thought</option>
                        </select>

                    </div>


                    <div class="form-group">

                        <label for="validatedCustomFile"><b>Image Of User</b></label>
                        <input type="file" class="form-control-file" name="image" id="validatedCustomFile" required>





                    </div>
                    <div class="card-footer">

                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-info">ADD BLOGS</button>

                        </div>


                    </div>

                </form>

            </div>

        </div>


    </div>

    <?php

if($_SERVER['REQUEST_METHOD'] =='POST'){


    $name_user=$_POST['name'];
    $phone_user=$_POST['phone'];
    $email_user=$_POST['email'];
    $dist=$_POST['dist'];
    $address=$_POST['address'];
    $state=$_POST['state'];
    $blog_category=$_POST['blog_category'];
    $pin=$_POST['pin'];
    $image=$_FILES['image']['name'];
    $image1=$_FILES['image']['tmp_name'];

    $inside_destination='Profile Picture/'.$image;
    move_uploaded_file($image1 , $inside_destination);


$sql1="insert into  `profile` (`name`,`phone`,`email`,`dist`,`address`,`state`,`blog_category`,`pin`,`image`) values('$name','$phone','$email','$dist','$address','$state','$blog_category','$pin','$image')";
$result1=mysqli_query($conn,$sql1);
if($result){

    echo 'Inserted';

}

else{

echo 'Not Inserted';


    }



}





?>






    <?php include 'footer.php';?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>