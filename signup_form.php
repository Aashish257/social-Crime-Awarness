<?php include ('session.php');?>
<?php
	include ('includes/database.php');
	
	if (isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];		
			$sql=mySQLi_query($con,"select * from user WHERE email='$email'");
			$row=mySQLi_num_rows($sql);
			if ($row > 0)
			{
			echo "<script>alert('E-mail already taken!'); window.location='signup.php'</script>";
			}
			elseif($password != $password2)
			{
			echo "<script>alert('Password do not match!'); window.location='signup.php'</script>";
			}else
		{
			mySQLi_query($con,"INSERT INTO user (username,email,password)
			VALUES ('$username','$email','$password')");
			echo "<script>alert('Account successfully created!'); window.location='signin.php'</script>";
		}
			
	}
	
?>