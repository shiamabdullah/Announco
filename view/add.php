<?php 
$title = "Add Post";
require_once('header.php');
require_once('../model/announce.php');
?>
 </nav>
 <div class="container" style="text-align: center;">

     
        <form method="post" action="../controller/addcheck.php">

        <div class="illustration" ></div>
            <div class="mb-3">
                <h4 class="text-center">Add Post</h4>
            </div>
            <div class="mb-3"><span>Title</span><input class="form-control" type="text" value="" name="header"></div>
            <div class="mb-3"><span>Description</span><textarea class="form-control form-control-lg" name="body" > </textarea></div>
            <div class="mb-3"><button class="btn btn-primary d-block w-100" name="submit" type="submit" value="">Update</button></div>
        
        </form>
 </div>
      

<?php 
include('footer.php');
 ?>