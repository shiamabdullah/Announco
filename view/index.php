<?php 
$title = "X Titan E-COMM";

require_once('header.php');

?>

<nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container"><a class="navbar-brand" href="#">X Titan E-COMMERCE</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">

            <?php 
            if(!isset($_SESSION['flag'])){
              
            echo '<ul class="navbar-nav me-auto"></ul><span class="navbar-text actions"> <a class="login" href="login.php">Log In</a><a class="btn btn-light action-button" role="button" href="#">Sign Up</a></span>';
            echo '';
            }
            

            else 
            {
                echo "other output";
            }
            ?>
                
            </div>
        </div>
    </nav>

<?php 
include('footer.php');
 ?>