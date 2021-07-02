<?php 
require_once('../model/admin.php');
require_once('../view/header.php');

if(isset($_POST['submit'])){

   
		$name = trim($_POST['name']," ");
		$username = trim($_POST['username']," ");
		$password = $_POST['password'];
		$repass = $_POST['password-repeat'];
    
            if($password != $repass){

				echo "password & confirm password mismatch...";
			}
            else{
                $user = ['name'=> $name, 'username'=> $username, 'password'=> $password, 'repass'=>$repass];
                print_r($user);
                $status=insertUser($user);
				echo $status;

                if($status)
                {	$_SESSION['stat']="Registered in";
					$_SESSION['stat_code']="success";
                    header('location: ../view/login.php');
                }
                else
                {
				$_SESSION['stat']="Not Registered Succesfully";
				$_SESSION['stat_code']="error";
                    echo "Error";
                }
            }
        }


    

?>