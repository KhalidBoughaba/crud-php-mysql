<?php
require_once "../config.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password' ";
// $result = mysqli_query($connect,$sql);
$stmt = $con->prepare($sql);
$stmt->execute();
$row = $stmt->rowCount();
// $user = $stmt->fetch();

if($row === 1){
  $_SESSION['login'] = "loginTrue";
  // print_r($_SESSION);
  header("Location:http://localhost:8000/home/index.php");
  exit;
}else{
  header("location:../");
}
}else{
  header("location:/");
}


?>