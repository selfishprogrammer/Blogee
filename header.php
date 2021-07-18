<?php include 'dbconn.php';

session_start();
echo '
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="index.php" style="color: cyan;"><i><b>BLOGIEE</b></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" style="color: white;">
      <li class="nav-item active">
        <b><i><a class="nav-link" href="index.php" style="color: white;">Home</a></i></b>
      </li>
      <b><i><li class="nav-item active">
        <a class="nav-link" href="about.php" style="color: white;">About Us</a></i></b>
      </li>';
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']){

        echo '
      <b><i> <li class="nav-item active">
        <a class="nav-link" href="fetchblog.php" style="color: white;">Your Blog</a></i></b>
      </li>
      <b><i> <li class="nav-item active">
        <a class="nav-link" href="fetchprofile.php" style="color: white;">Your Profile</a></i></b>
      </li>';
      }
      echo '
      
    </ul>
    
    <div class="d-flex justify-content-end">
    <ul class="navbar-nav mr-auto " style="color: white;">';
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']){
$username=$_SESSION['username'];
      $sql1="select `name` from `login` where `phone`='$username'";
      $result1=mysqli_query($conn,$sql1);
      
      while($row=mysqli_fetch_assoc($result1)){
      
          $user=$row['name'];
      
      
      }
echo '
  
 

      <b><i><li class="nav-item active ">
        <a class="nav-link" href="logout.php" style="color: white;">'.$user.'</a>
      </li></i></b>
  ';



  $sql="select `image` from `profile` where `phone`='$username'";
  $result=mysqli_query($conn,$sql);
  
  while($row=mysqli_fetch_assoc($result)){
  
      $user1=$row['image'];
  
  
  }
 echo ' <b><i><li class="nav-item active ">
 <img src="Profile Picture/'.$user1.'" class="rounded-circle my-2 mx-2 " alt="" height="30" width="30">
</li></i></b>
';


    }
else{
  echo ' <li class="nav-item active">
  <b><i><a class="nav-link" href="login.php" style="color: white;">Login</a>
</li></i></b>
<b><i><li class="nav-item active">
  <a class="nav-link" href="signup.php" style="color: white;">SignUp</a>
</li></i></b>';
}
    
  echo '</ul>
  </div>
  </div>
 
</nav>';
    ?>