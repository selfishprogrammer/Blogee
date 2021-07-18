<?php 
session_start();
include 'dbconn.php';
$category_slno=$_GET['post_id'];
if($_SERVER['REQUEST_METHOD']=='POST'){
$comments=$_POST['comment'];
$cat=$_POST['hidden'];
$username=$_SESSION['name'];
$user_id=$_SESSION['user_slno'];
$sql="insert into `comments` (`user_id`,`post_id`,`comments`,`username`) values ('$user_id','$category_slno','$comments','$username')";
$result=mysqli_query($conn,$sql);
header("location:category.php?category_slno=$cat");
}


?>