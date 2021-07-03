<?php 
$title = "Update Post";
require_once('header.php');
require_once('../model/announce.php');
$post = getPostbyId($_GET['id']);
// print_r($post);
?>
<nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
<div class="container"><a class="navbar-brand" href="#">X Titan E-COMMERCE</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
 </nav>

     
        <form method="post" action="../controller/updatecheck.php">

        <div class="illustration"></div>
            <div class="mb-3">
                <h4 class="text-center">Update Post</h4>
            </div>
            <div class="mb-3"><span>Title</span><input class="form-control" type="text" value="<?php echo $post['header'];?>" name="header"></div>
            <div class="mb-3"><span>Description</span><textarea class="form-control form-control-lg" name="body" > <?php echo $post['body'];?></textarea></div>
            <div class="mb-3"><button class="btn btn-primary d-block w-100" name="submit" type="submit" value="<?php echo $_GET['id'];?>">Update</button></div>
        
        </form>

      

<?php 
include('footer.php');
 ?>