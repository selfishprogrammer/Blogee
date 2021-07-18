<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <title>BLOGGIE</title>
</head>

<body>







    <?php include "header.php";
    include 'dbconn.php'; ?>

    <div class="jumbotron jumbotron-fluid" id="jumbo" style="height: 640px; width:100%;">
        <div class="container-fluid">

            <i>
                <h1 class="mx-4 my-4 text-center" id="title">BLOGGIE</h1>

            </i>

<?php
 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']){
            echo '<div class="d-flex justify-content-center my-4">
            <a href="addblog.php"><button type="button" class="btn btn-outline-danger my-3" style=" width:18rem; border-radius:15px;">Start Blogging</button></a>

            </div>';
 }
 else{
    echo '<div class="d-flex justify-content-center my-4">
    <button type="button" class="btn btn-outline-danger my-3" data-toggle="modal" data-target="#choose" style=" width:18rem; border-radius:15px;">Start Blogging</button>

</div>';

 }

?>
<!-- Modal -->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="choose" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bloggie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      


<!-- Choosing Login/Signup -->

<div class="card">

<h4 class="text-center"><b><i>To Write Your Own Blog Signup or Login With us</i></b></h4>

<div class="card-header">

<div class="d-flex justify-content-between">

<a href="login.php"><button type="button" class="btn btn-outline-success">Login</button></a>
<a href="signup.php"><button type="button" class="btn btn-outline-success">SignUp</button></a>

</div>


</div>



</div>

<!-- End Choosing -->



      </div>
     
    </div>
  </div>
</div>



<!-- Modal -->
























            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <i>
                            <p id="sub_title" class="text-center my-4">Create Your Own Blogg On Your Own Mood.
                            </p>
                        </i>
                    </div>
                    <div class="carousel-item">

                        <i>
                            <p id="sub_title" class="text-center my-4">Create Your Own Blogg On Your Own Mood.
                            </p>
                        </i>
                    </div>
                    <div class="carousel-item">

                        <i>
                            <p id="sub_title" class="text-center my-4">Create Your Own Blogg On Your Own Mood.
                            </p>
                        </i>
                    </div>
                </div>
            </div>




            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center my-4">
                            <b><i>
                                    <h3 class="mx-4 my-4" id="title2">BLOG WITH US</h3>
                                </i></b>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center my-4">
                            <b><i>
                                    <h3 class="mx-4 my-4" id="title2">BLOG WITH US</h3>
                                </i></b>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center my-4">
                            <b><i>
                                    <h3 class="mx-4 my-4" id="title2">BLOG WITH US</h3>
                                </i></b>
                        </div>
                    </div>
                </div>
            </div>



<div class="d-flex justify-content-center">

<a href="viewblogs.php"><button type="button" class="btn btn-outline-dark my-3" style=" width:18rem; border-radius:15px;">Our Blogs</button></a>


</div>


        </div>
    </div>

    <hr>

    <h4 class="text-center">YOUR WORDS OUR PLATFORM</h4>
    <hr>
    <div class=" container-fluid my-4">

        <div class="row">

            <div class="col-md-2">
                <div class="card">
                    <div class="card-header">



                        <hr><i><b>
                                <h3 class="text-center"><span style="color: red;">CATAGORY</span> </h3>
                            </b></i>
                        <hr>
                    </div>

                    <div class="card-body bg-info">
                        <?php

$sql="SELECT * FROM `category`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){


    echo '<a href="category.php?category_slno='.$row['category_slno'].'" class="nav-link">
    <div class="card my-3">
        <div class="card-header bg-warning">
            <h6 class="text-center">
                '.$row['blog_category'].'
            </h6>
        </div>

    </div>
</a>';




}



?>





                        <br>

                    </div>
                </div>

            </div>









            <div class="col-md-10">
                <hr>
                <i><b>
                        <h3 class="text-center"><span style="color: red;">BLOGS</span> </h3>
                    </b></i>

                <hr>

                <div class="row">



<?php 

$sql="select * from `blog`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){

echo '<div class="shadow bg-light rounded  mx-3 my-3 d-flex justify-content-center">
<div class=" d-flex justify-content-center">
    <div class=" my-2 mx-4" id="card" style="width: 18rem; ">
        <img src="Blog Images/'.$row['blog_image'].'" width="350" height="200" class="card-img-top " alt="...">


        
        <div class="card-body">
        <b><i><h6 class="text-center my-3">'.$row['blog_title'].'</h6></i></b>
            <b><i><p class="card-text my-3">'.$row['blog_desp'].'</p></i></b>
        </div>
        <div class="d-flex justify-content-between">
           <b><i><p class="text-center">'.$row['author_name'].'</p></i></b>
           <b><i><p class="text-center">'.$row['upload_time'].'</p></i></b>
        </div>
    </div>
</div>
</div>';


}


?>




                    







                </div>



















            </div>
        </div>
    </div>
    <style>
    #jumbo {
       
        background-image: url("img/back_gr.png");
        background-size: 100%, 100%;
    }

    #title {

        font-size: 47px;
        font-family: 'Signika', sans-serif;

    }

    #title2 {

        font-size: 30px;
        font-family: 'Signika', sans-serif;

    }

    #sub_title {
        font-size: 31px;
        font-family: 'Signika', sans-serif;

    }
    </style>
    <?php include 'footer.php'; ?>
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