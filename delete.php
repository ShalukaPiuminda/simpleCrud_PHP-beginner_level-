<?php
//database connection include
require_once 'connect.php';
// check delete parameter is exist in url

if(isset($_GET['delete_id'])){
  $deleteID=$_GET['delete_id'];

  $sql="DELETE  FROM user_table WHERE id = ' $deleteID' ";

  if ($con->query($sql) === TRUE) {
    echo "<script>alert('Record deleted successfully' )</script>"; 
    echo "<script>window.location.href='display.php';</script>";
  } else {
    echo "<script>alert('Error deleting record'. $con->error' )</script>";
  }
}
$con->close();
?>