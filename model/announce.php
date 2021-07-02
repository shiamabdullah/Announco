<?php
  require_once('db.php');
  
  
  function fetchPost($id)
  {
      $conn = getConnection();
      $sql = "SELECT * FROM `products` WHERE `pid`='{$id}'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      return $row;
    
    }
  ?>