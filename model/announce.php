<?php
  require_once('db.php');
  
  
  function getPostbyId($id)
  {
      $conn = getConnection();
      $sql = "SELECT * FROM `announcement` WHERE `id`='{$id}'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      return $row;
    
    }

  ?>