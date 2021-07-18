<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Profile | User</title>
</head>

<body style="background-color: gray;">

    <?php 
  
  include 'header.php';
  include 'dbconn.php';
  
  
  ?>

<?php

$user=$_SESSION['username'];
$sql="select * from `profile` where `phone`='$user'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
$name=$row['name'];
$phone=$row['phone'];
$email=$row['email'];
$dist=$row['dist'];
$state=$row['state'];
$address=$row['address'];
$category=$row['blog_category'];
$image=$row['image'];
}
?>

    <div class="container">
        <div class="shadow p-3 mb-5 bg-white rounded  my-4">
            <div class="card">

                <div class="card-header " style="background-color: black;">

                    <i><b>
                            <h5 class="text-center" style="color: white;">Hi ,<span style="color: red;"><?php echo $name ?></span>
                                Welcome To Your Profile Of Bloggie.</h5>
                        </b></i>

                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="Profile Picture/<?php echo $image ?>" height="200" width="230" class="rounded " alt="...">

                            <button type="button" class="btn btn-outline-info form-control my-4">ADD NEW</button>
                        </div>

                        <div class="col-md-4">


                            <div class="add">





                            </div>



                        </div>
                        <div class="col-md-5">
                            <div class="">
                                <i><b>
                                        <h5>Blogger Name : <span style="color: red; font-size:20px;"><?php echo $name ?></span>
                                        </h5>
                                    </b></i>

                                <i><b>
                                        <h5>Blogger Email : <span
                                                style="color: red; font-size:20px;"><?php echo $email ?></span></h5>
                                    </b></i>

                                <i><b>
                                        <h5>Blogger Phone : <span style="color: red; font-size:20px;"><?php echo $phone ?></span>
                                        </h5>
                                    </b></i>


                                <i><b>
                                        <h5>Blogger Category : <span style="color: red; font-size:20px;"><?php echo $category ?></span></h5>
                                    </b></i>
                                <i><b>
                                        <h5>Blogger State : <span style="color: red; font-size:20px;"><?php echo $state ?></span>
                                        </h5>
                                    </b></i>
                                <i><b>
                                        <h5>Blogger Dist : <span style="color: red; font-size:20px;"><?php echo $dist ?></span>
                                        </h5>
                                    </b></i>
                                <i><b>
                                        <h5>Blogger Full Address : <span
                                                style="color: red; font-size:20px;"><?php echo $address ?></span></h5>
                                    </b></i>
                                <a href="editinfo.php?user=<?php echo $phone ?>"><button type="button" class="btn btn-outline-info form-control my-2">EDIT INFORMATION</button></a>
                            </div>
                          
                        </div>






                    </div>
                    <hr>
                    <a href="fetchblog.php"><button type="button" class="btn btn-outline-success form-control my-2">GO TO YOUR BLOGS</button></a><hr>
                </div>
            </div>


        </div>


    </div>




    </div>
    <?php include 'footer.php' ;?>

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