<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<div class="container mt-5 w-25 bg-info">
	<h1 class="text-center text-white">Login Here</h1>
		<form method="POST" action="">
		<input type="hidden" name="submitted" value="true">
		Username:
		<input type="text" name="username" placeholder="Enter your username" style="width: 90%;" class="mb-2">
		<br>
		Password:
		<input type="password" name="password" placeholder="Enter your password" style="width: 90%;" class="mb-2">
		<input type="submit" name="submit" value="LOGIN" style="width: 90%">
		<a href="signupform.php"><p class="text-center text-white">Not Registered?</p></a>
		</form>
		<a href="../index.php"><p class="text-danger text-center">Go back to landing page</p></a>
</div>
