<?php
  require_once('db.php');
  function getUserbyId($id)
  {
      $conn = getConnection();
      $sql = "SELECT * FROM `admin` WHERE `username`='{$id}'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      return $row;
  }

  function validateUser($username,$password)
  {     
        $conn=getConnection();
        $sql = "select * from admin where username='{$username}' and password='{$password}'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        if($row){
            return true;
          }
          else{
            return false;
          }
  }

  function insertUser($user)
  {print_r($user);
    $conn=getConnection();
    $sql="INSERT INTO `admin` (`name`, `username`, `password`) VALUES 
    ('{$user['name']}','{$user['username']}','{$user['password']}')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        return true;
    }
    else
    {
        return false;
    }
  }

  ?>