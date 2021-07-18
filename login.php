<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>


    <div class="container">


        <div class="d-flex justify-content-center">

        <div class="shadow-lg p-3 mb-5 bg-white rounded" id="center">


                <div class="card">

                    <div class="card-header">

                        <h4 class="text-center">Login</h4>

                    </div>

                    <div class="card-body">


<?php include 'dbconn.php'; ?>


<?php
if($_SERVER['REQUEST_METHOD']   ==  'POST'){
    $login=false;
$username=$_POST['username'];
$password=$_POST['password'];


$sql="SELECT * FROM `login` where `phone` = '$username' and `password`='$password'";
$result=mysqli_query($conn,$sql);

$num=mysqli_num_rows($result);


if($num==1){
    
$row=mysqli_fetch_assoc($result);
   
     
session_start();
$login=true;
    $_SESSION['loggedin']  =true;
    $_SESSION['user_slno'] =$row['user_slno'];
    $_SESSION['username'] =$username;
    $_SESSION['name']=$row['name'];
   
     
  
    
    echo "logged in Successful";


    header('location:index.php');

    }
}
?>










                        <form action="<?php $_SERVER['REQUEST_METHOD'] ?>" method="post">
                            <div class="form-group">

                                <input type="number" name="username" class="form-control" placeholder="Phone Number"
                                    id="username" required>

                            </div>

                            <div class="form-group">

                                <input type="password" name="password" class="form-control" placeholder="Password"
                                    id="password" required>

                            </div>


                            <div class="card-footer">
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success">Login</button>
                                </div>
                            </div>
                        </form>


                    </div>



                </div>


            </div>

        </div>



    </div>







    <style>
    body {
        background-image: url('img/lg_back.jpg');
        background-size: 100%, 100%;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }


    #center {
        margin-top: 190px;
       
    }
    </style>

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