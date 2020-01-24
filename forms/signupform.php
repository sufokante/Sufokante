<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $passErr = "";
$name = $email = $gender = $comment = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["pass"])) {
    $passErr = "Password is Required";
  } else {
    $website = test_input($_POST['pass']);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="container bg-success mt-5 w-50 ">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <table class="m-auto">
  <h1 class="text-center text-white">Resgistration Form</h1>
  	<table class="m-auto text-danger">
		  <tr>
		  <td><span class="error"><?php echo $nameErr;?></span></td>
		  <td><span class="error"><?php echo $emailErr;?></span></td>
		  </tr>
		  <tr>
		  <td><span class="error"><?php echo $passErr;?></span></td>
		  <td><span class="error"><?php echo $genderErr;?></span></td>
		  </tr>	
	</table>
  <tr>
  <td colspan="3">First Name <input type="text" name="name" class=" mb-2 w-100"></td>
  </tr>
  <tr>
  <td colspan="3">Last Name <input type="text" name="name" class="mb-2 w-100""></td>
  </tr>
  <tr>
  <td colspan="3">E-mail: <input type="text" name="email" class=" mb-2 w-100"></td>
  </tr>
  <tr>
  <td colspan="3">Password: <input type="password" name="pass" class=" mb-2 w-100"></td>
  </tr>
  <tr>
  <td>Gender:
  <input type="radio" name="gender" value="female" >Female
  <input type="radio" name="gender" value="male" >Male <br></td>
  <td>Birhtdate: <input type="date" name="" class="mb-2 w-100"></td>
  <td></td>
  </tr>
  <tr>
  <td colspan="2"><input type="submit" name="submit" value="Submit" style="width: 100%;"> </td>
  <td></td>
  </tr>
  <tr><td colspan="2"><a href="loginform.php"><p class="text-center">Login Now</p></a></td></tr>
    </table>
</form>
<a href="../index.php"><p class="text-center text-danger">Go back to landing page</p></a>
</div>

 