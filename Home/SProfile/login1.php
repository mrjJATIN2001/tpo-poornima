
<?php
	session_start();
	$username = $_POST['username'];
	$password  = $_POST['password'];

	if ($username&&$password)
	{
		$connect = mysqli_connect("localhost","id18835262_tpo","Admin@123456","id18835262_tpo_poornima") or die("Couldn't Connect");
		//mysql_select_db("id18835262_tpo_poornima") or die("Cant find DB");

		$query = $connect->query("SELECT * FROM student_login WHERE Username='$username'");

		$numrows = $query->num_rows;

		if ($numrows!=0)
		{
			while($row = $query->fetch_assoc())
			{
				$dbusername = $row['Username'];
				$dbpassword = $row['Password'];

			}
			if ($username==$dbusername&& $password==$dbpassword)
			{
				  echo "<center>Login Successfull..!! <br/>Redirecting you to HomePage! </br>If not Goto <a href='index.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='3; url=index.php'>";
				$_SESSION['username'] = $username;
				//$_SESSION['Name'] = mysql_query("SELECT Name FROM student_login WHERE Username='$username'");
			} else{
				$message = "Username and/or Password incorrect.";
  			echo "<script type='text/javascript'>alert('$message');</script>";
			  echo "<center>Redirecting you back to Login Page! If not Goto <a href='index.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='1; url=index.php'>";
			}
		}else
			die("User not exist");
	}
	else
	die("Please enter Username and Password");
?>
