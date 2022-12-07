<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SignUp <Form></Form></title>
	<link rel="stylesheet" href="css/logout.css">
</head>
<body>
<div class="form">
	    <!--signup form start-->
	<form class="signup-form" id="" action="signup_form.php" method="post" enctype="multipart/form-data">
      <i class="fas fa-user-plus"></i>
      <input class="user-input" type="text" name="username" placeholder="Username" required>
      <input class="user-input" type="email" name="email" placeholder="Email Address" required>
      <input class="user-input" type="password" name="password" placeholder="Password" required>
      <input class="btn" type="submit" name="submit" value="SIGN UP">
      <div class="options-02">
        <p>Already Registered? <a href="signin.php">Sign In</a></p>
      </div>
  </form>
    <!--signup form end-->

    <br>
    <br>
    <div class="d-flex">
      <a class="b-btn" target="blank" href="https://www.buymeacoffee.com/danishlaeeq">
        Buy Me a Coffee&nbsp;<i class="fa fa-coffee"></i>
      </a>

      <a class="support b-btn paypal" target="blank" href="https://www.technodigitz.com/donate">
        <i class="fab fa-paypal"></i>&nbsp;Donate
      </a>
  </div>
    <!--form area end-->
</body>
</html>