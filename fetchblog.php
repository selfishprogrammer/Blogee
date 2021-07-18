<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Blog | User</title>
</head>

<body style="background-color: yellowgreen;">


    <?php
  
  include 'header.php';
  include 'dbconn.php';
  ?>

    <div class="container">
        <div class="card">


            <div class="card-header text-center">


                <h4><i><b>My Blogs</b></i></h4>


            </div>

            <div class="card-body">


            <?php 

$user=$_SESSION['username'];

$sql="SELECT * FROM `blog` where `trace_id` = '$user'";
$result=mysqli_query($conn,$sql);
$nums=mysqli_num_rows($result);
if($nums > 0){
while($row=mysqli_fetch_assoc($result)){

    echo '  <div class="row no-gutters">
    <div class="col-md-4">
        <img src="Blog Images/'.$row['blog_image'].'" class="card-img" width="450" height="350" alt="...">
    </div>
    <div class="col-md-8">
        <div class="card-body">
            <h3 class="card-title text-center">'.$row['blog_title'].'</h3>
            <b><i>
                    <h6 class="card-text text-center my-4">'.$row['blog_desp'].'</h6></b></i>
            <b><i>
                    <p class="card-text d-flex justify-content-end my-4">'.$row['upload_time'].'</p>
            </b></i>
            <b><i>
                    <p class="card-text">By '.$row['author_name'].'</p></b></i><br>
           
        </div>
    </div>


</div><hr>';



}
}

else{
    echo 'You Have Not Posted Any Blog Till Now';
}

?>




              
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