<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Add Blog</title>
</head>







<body style="background-color: greenyellow;">
    <?php include 'header.php';
    include 'dbconn.php'; ?>

<?php

$user=$_SESSION['username'];
$sql="select * from `login` where `phone`='$user'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
$name=$row['name'];
$phone=$row['phone'];
$email=$row['email'];
}
?>


    <div class="container">

        <h4 class="text-center my-2"><b><i>WRITE YOU BLOGS</i></b></h4>


        <div class="card my-4">

            <div class="card-header" style="background-color:lavender;">

                <h4 class="text-center"><i>WELCOME , </i> <i><span
                        style="color: limegreen; font-size:20px;"><?php echo $name ?></span></i></h4>

            </div>
            <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">


                    <div class="form-group">


                        <select class="custom-select" name="blog_category" required>
                            <option value="">Choose Your Blog Category</option>
                            <option value="1">Motivational Blogs</option>
                            <option value="2">Sad Blogs</option>
                            <option value="3">Love Blogs</option>
                            <option value="4">Motivational Thought</option>
                            <option value="5">Sad Thought</option>
                            <option value="6">Love Thought</option>
                        </select>

                    </div>

                    <div class="form-group">

                        <input type="text" class="form-control" name="title" placeholder="Enter The Title Of Your Blog">

                    </div>


                    <div class="form-group">

                        <textarea type="text" cols="145" rows="15" name="blog" class="form-control my-4"
                            placeholder="Enter Your Blog (Not More Than 255 Words)"></textarea>

                    </div>


                    <div class="form-group">

                        <label for="validatedCustomFile"><b>Image Of Blog</b></label>
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

    <!-- PHP Code Start-->


    <?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $title=$_POST['title'];
    $blog=$_POST['blog'];
    $blog_category=$_POST['blog_category'];
    $image=$_FILES['image']['name'];


    $image1=$_FILES['image']['tmp_name'];



    $inside_destination='Blog Images/'.$image;
    move_uploaded_file($image1 , $inside_destination); $inside_destination='Blog Images/'.$image;
    move_uploaded_file($image1 , $inside_destination);
    $author_name=$_SESSION['username'];

$sql1="select `name` from `login` where `phone`='$author_name'";
$result1=mysqli_query($conn,$sql1);

while($row=mysqli_fetch_assoc($result1)){

    $author=$row['name'];
    $author_phone=$row['phone'];


}





    $sql="insert into `blog` (`blog_category_no`,`blog_title`,`blog_desp`,`blog_image`,`author_name` ,`trace_id`) values('$blog_category','$title','$blog','$image','$author','$author_name')";
$result=mysqli_query($conn,$sql);
if($result){


    echo 'done';

}

else{
    echo 'look once';
}
}





?>




    <!-- Php code end -->




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