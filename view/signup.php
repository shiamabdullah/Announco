<?php 
$title = "Sign Up";
require_once('header.php');

?>   

<!-- <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
<div class="container"><a class="navbar-brand" href="#">X Titan E-COMMERCE</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
</div> -->
 </nav>
 <section class="register-photo">
 
    <div class="form-container">
    <div class="image-holder"></div>
    <form method="post"  action="../controller/regcheck.php">
        <h2 class="text-center"><strong>Create</strong> an account.</h2>
        <div class="mb-3"><input class="form-control" type="text" name="name" placeholder="Name" minlength="3" maxlength="30"></div>
        <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="Username" minlength="3" maxlength="30"></div>
        <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" required="" minlength="4"></div>
        <div class="mb-3"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)" required="" minlength="4"></div>
        <div class="mb-3">
            <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
        </div>
        <div class="mb-3"><button class="btn btn-dark d-block w-100" type="submit" name="submit">Sign Up</button></div><a class="already" href="/view/login.php">You already have an account? Login here.</a>
    </form>
</div>
</section>

<?php 
include('footer.php');
 ?>