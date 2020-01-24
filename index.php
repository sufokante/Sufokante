<?php
include("content/head.php");
include("content/title.php");
include("content/body.php");
?>
<div class="container">
<h1 class="text-center bg-danger p-3 text-white">Welcome to Landing Page</h1>
	<div class="" style="display: flex;">
		<div class="bg-warning m-1 p-3">
		<p class="text-dark text-center">Forget your Password?</p>
		<a href="forms/forgetform.php"><p class="text-danger text-center">Click here to Reset</p></a>
		</div>
		<div class="bg-info p-3">
		<p class="text-white text-center">Already Have an Account?</p>
		<a href="forms/loginform.php"><p class="text-warning text-center">Click here to Login</p></a>
		</div> 
		<div class=" bg-success m-1 p-3">
		<p class="text-dark text-center">Dont Have an Account?</p>
		<a href="forms/signupform.php"><p class="text-primary text-center">Click here to Register</p></a> 
		</div>
	</div>
</div>
<?php
include("content/footer.php");
?>