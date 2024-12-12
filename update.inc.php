<?php
require_once 'connect.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
  $id=$_POST['id'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];

// update query
$sql=" UPDATE user_table SET name=' $name', gmail=' $email', password=' $password'  WHERE id = '$id'";

//check if update is successful
if($con->query($sql)==TRUE){
  echo "<script>alert('User table updated successfully');</script>";
  echo"<script>window.location.href='display.php';</script>"; 
}else{
  echo "Error updating record: ". $con->error;
}

}
$con->close();



?>