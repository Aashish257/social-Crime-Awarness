<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Log in</title>
  <link rel="stylesheet" href="css/login.css">
	
</head>
<body>

  <!--form area start-->
  <div class="form">
    <h2>Welcome To Crime Awearness Website</h2>
    <!--login form start-->
    <form class="login-form" id="signup-form" action="signin_form.php" method="post" enctype="multipart/form-data">
      <i class="fas fa-user-circle"></i>
      <input class="user-input" type="email" name="email" placeholder="Username" required>
      <input class="user-input" type="password" name="password" placeholder="Password" required>
      <div class="options-01">
        <label class="remember-me"><input type="checkbox" name="RememberMe">Remember me</label>
        <a href="signup.php">Forgot your password?</a>
      </div>
      <input class="btn" type="submit" name="submit" value="LOGIN" />
      <div class="options-02">
        <p>Not Registered? <a href="signup.php">Create an Account</a></p>
      </div>
    </form>
</body>
</html>