<?php
	session_start();

	$Username1 = $_POST['Username'];
	$password = $_POST['Password'];
	$confirm = $_POST['repassword'];
	$Username2 = ($_SESSION['reset']);

	$connect = mysqli_connect("localhost", "id18835262_tpo", "Admin@123456", "id18835262_tpo_poornima"); // Establishing Connection with Server
    // mysql_select_db("id18835262_tpo_poornima") or die("Cant Connect to database"); // Selecting Database from Server

			if($Username1 && $password && $confirm ){


	if($password == $confirm) {

		if($Username2 == $Username1){
		if($sql = $conect->query("UPDATE `id18835262_tpo_poornima`.`student_login` SET `Password` ='$password' WHERE `student_login`.`Username` = '$Username1'")){
		echo "<center>Password Reset Complete</center>";
		session_unset();
		}
		} else {
			session_unset();
			die("Enter Your Username only");

			}
	} else
	{
	echo "Update Failed";
	session_unset();
	}
	}
	else
	{
	echo "Field cannot be left blank";
	session_unset();
	}
?>
