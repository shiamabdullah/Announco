<?php 
$title = "Sign Up";
require_once('header.php');

?>   
 <section class="register-photo">
<div class="form-container">
    <div class="image-holder"></div>
    <form method="post">
        <h2 class="text-center"><strong>Create</strong> an account.</h2>
        <div class="mb-3"><input class="form-control" type="email" name="name" placeholder="Name" minlength="5" maxlength="30"></div>
        <div class="mb-3"><input class="form-control" type="email" name="username" placeholder="Username" minlength="3" maxlength="30"></div>
        <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" required="" minlength="8"></div>
        <div class="mb-3"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)" required="" minlength="8"></div>
        <div class="mb-3">
            <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
        </div>
        <div class="mb-3"><button class="btn btn-dark d-block w-100" type="submit">Sign Up</button></div><a class="already" href="#">You already have an account? Login here.</a>
    </form>
</div>
</section>

<?php 
include('footer.php');
 ?>