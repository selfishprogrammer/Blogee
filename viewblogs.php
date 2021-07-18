<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@700&display=swap" rel="stylesheet">

    <title>Categories | Blogiee</title>
</head>

<body>
    <?php
     include 'header.php';
    include 'dbconn.php';
    

    
    
    
    ?>



    





        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                






                        <div class="card-body">





                            <!-- Fetching Data From Data Base -->


                            <?php 



$sql1="select * from `blog`";
$result1=mysqli_query($conn,$sql1);

while($row1=mysqli_fetch_assoc($result1)){
$category_slno=$row1['blog_slno_1'];
    echo '
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="Blog Images/'.$row1['blog_image'].'" class="card-img" width="450" height="350" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title text-center">'.$row1['blog_title'].'</h3>
                <b><i>
                        <h6 class="card-text text-center my-4">'.$row1['blog_desp'].'</h6></b></i>
                <b><i>
                        <p class="card-text d-flex justify-content-end my-4">'.$row1['upload_time'].'</p></b></i>
                <b><i>
                        <p class="card-text">By  '.$row1['author_name'].'</p></b></i><br>';

                        if(isset($_SESSION['loggedin'])){
                            
                        ?>
                            <div class="d-flex justify-content-between">
                                <button id="flip" class="btn btn-info my-4 mx-1" style="width: 8rem;">Comment</button>
                                <button id="" class="btn btn-danger my-4" style="width: 8rem;">Like &nbsp; (0)</button>
                                <button id="" class="btn btn-danger my-4 mx-1" style="width: 8rem;">Dislike &nbsp; (0)</button>
                            </div>

                            <div class="card-header" style="background-color: gray; height:200px; overflow-y:auto;" id="panel">
                                <form action="comments.php?post_id=<?php echo $category_slno ?>" method="post">
                                    <div class="form-group">

                                        <textarea name="comment" placeholder="Comment Your Thoughts"
                                            class="form-control my-4"></textarea>
                                        <button type="submit" class="btn btn-outline-info">Comment</button>
                                    </div>

                                </form>



                                <hr>

                                <div><b>Comments</b></div>
<?php
$sql="select * from `comments` where `post_id`='$category_slno'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){






?>
                                <div class="media mt-4">
                                    <img src="img/login.png" class="mr-3" width="30px" height="30px">
                                    <div class="media-body">
                                        <h6 class="mt-0"><b><i><?php echo $row['username'] ?></i></b></h6>
                                        <p><?php echo $row['comments'] ?></p>
                                    </div>
                                </div><hr>

<?php } ?>



                            </div>
                            <?php
                        }
                        else{
                            echo ' <div class="d-flex justify-content-between">
                            <button id="flip" class="btn btn-info my-4 mx-1" style="width: 8rem;" disabled>Comment</button>
                            <button id="" class="btn btn-danger my-4" style="width: 8rem;" disabled>Like</button>
                            <button id="" class="btn btn-danger my-4 mx-1" style="width: 8rem;" disabled>Dislike</button>
                        </div>';
                        }
               echo ' <hr>




            </div>









        </div>
    </div>






    <hr>';

}


?>













                            <!-- End Fetching -->






                        </div>





                    </div>










                </div>







            </div>




        </div>


        <style>
        #jumbo {
            background-image: url("img/blog.jpg");
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





        #panel {
            padding: 50px;
        }
        </style>



        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script>
        $(document).ready(function() {
            $("#flip").on('click', function() {
                $("#panel").slideToggle("slow");
            });
        });
        </script>
        <?php include 'footer.php'; ?>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</body>

</html>