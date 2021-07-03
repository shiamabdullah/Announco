<?php 
require_once('../model/db.php');
if (session_status() == PHP_SESSION_NONE) {
   session_start();
   }
   $conn = getConnection();

   if(isset($_POST['submit'])){
      print_r($_POST);
      $header = ($_POST['header']);
      $body = $_POST['body'];

      $conn=getConnection();
      $sql="INSERT INTO `announcement`(`header`, `body`) VALUES ('{$header}', '{$body}')";
      $result=mysqli_query($conn,$sql);
        echo($result);
        if ($result==1){
            $_SESSION['stat']="Added Post";
            $_SESSION['stat_code']="success";
            header('location: ../view/index.php');
    }
  }
?>