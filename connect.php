<?php
  $servername="localhost";
  $username="root";
  $dbname="useraccount";
  $password="";
  // create database connection

  $con=new mysqli($servername,$username,$password,$dbname);

  // check the connection 
  if($con->connect_error){
   die("Error connecting to :".$con->connect_error);
  }
 
?>