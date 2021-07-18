<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>SignUp</title>
</head>

<body>

<?php ?>



    <div class="container">


        <div class="d-flex justify-content-center">

            <div class="shadow-lg p-3 mb-5 bg-white rounded my-1" id="center">


                <div class="card mx-2" style="width: 380px;">

                    <div class="card-header">

                        <h4 class="text-center">SignUp</h4>

                    </div>


                    <form action="">
                        <div class="card-footer">

                            <div class="form-group">

                                <input type="number" name="otp" class="form-control"
                                    placeholder="Enter Number you Want to Register" id="username" required maxlength=10>

                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success">SEND OTP</button>
                            </div>
                        </div>
                    </form>




                    <form action="">
                        <div class="card-footer">

                            <div class="form-group">

                                <input type="number" name="enter_otp" class="form-control"
                                    placeholder="Enter 6 Digit OTP" id="username" required autocomplete="off" maxlength="6">

                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success">Verify</button>
                            </div>
                        </div>
                    </form>



                    <div class="card-body">

<!-- Php code for Signup Start  -->


<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
include 'dbconn.php'; 
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $password=$_POST['password'];
 $cpassword=$_POST['cpassword'];
    $sql1="select `phone` from `login` where `phone` = '$phone'";
    $result1=mysqli_query($conn,$sql1);

    $nums=mysqli_num_rows($result1);



if($nums){
    
   
    
        echo 'Email or Phone Number Already Exist';
}
  
    else{





   
  

if( $password ==    $cpassword){
    $sql="insert into `login` (`name` ,`email`,`phone`,`password`,`cpassword`) values ('$name' , '$email' ,'$phone' ,'$password','$cpassword')";
    $result=mysqli_query($conn,$sql);

    echo 'Signed Up successfuly';

    header('location:profile.php ? user='.$phone.'');
}

 else{
     echo 'Password Not Matched';
 }

}
}
?>

<!-- php code for signup end -->


                        <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" >
                            <div class="form-group">

                                <input type="text" name="name" class="form-control" placeholder="Full Name"
                                    id="username" required>

                            </div>

                            <div class="form-group">

                                <input type="email" name="email" class="form-control" placeholder="Email" id="email"
                                    required maxlength="30">

                            </div>

                            <div class="form-group">

                                <input type="number" name="phone" class="form-control" placeholder="Phone" id="phone"
                                    required>

                            </div>

                            <div class="form-group">

                                <input type="text" name="password" class="form-control" placeholder="Password"
                                    id="password" required>

                            </div>


                            <div class="form-group">

                                <input type="password" name="cpassword" class="form-control"
                                    placeholder="Confirm Password" id="username" required maxlength="8">

                            </div>


                         


                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success">SignUp</button>
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