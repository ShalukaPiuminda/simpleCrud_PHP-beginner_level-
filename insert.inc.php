<?php
  // include connection php file
require_once "connect.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  $checkQuery="SELECT * FROM  user_table WHERE gmail='$email' ";
    $result=$con->query($checkQuery);
    if($result->num_rows>0){
      echo "<script>alert('Email already exists')</script>";
      echo "<script>window.location.href='insert.php';</script>";
      exit();
    }  else{
      // insert data into database
      $sql="INSERT INTO user_table (name, email, password) VALUES ('$name', '$email', '$password')";
    }

//  check if the insert was syccesful
if($con->query($sql)==TRUE){
  echo "<script>alert('Data inserted successfully')</script>";
  echo "<script>window.location.href='display.php';</script>";
}else{
  echo "Error: ". $sql. "<br>". $con->error;
}
}
$con->close();
 

?>