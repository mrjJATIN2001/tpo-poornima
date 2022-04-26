<?php
session_start();
$connect = mysqli_connect("localhost", "id18835262_tpo", "Admin@123456","id18835262_tpo_poornima"); // Establishing Connection with Server
// mysql_select_db("id18835262_tpo_poornima"); // Selecting Database from Server

	$Username = $_SESSION['husername'];
	$Password = $_POST['Password'];
	$repassword = $_POST['repassword'];
	$cur = $_POST['curpassword'];
	if($Password && $repassword && $cur)
	{
		if($Password == $repassword)
		{
			$sql = $connect->query("SELECT * FROM `id18835262_tpo_poornima`.`hod_login` WHERE `Username`='$Username'");
			if($sql->num_rows == 1)
			{
				$row = $sql->fetch_assoc();
				$dbpassword = $row['Password'];

				if($cur == $dbpassword)
				{
					if($query = $connect->query("UPDATE `id18835262_tpo_poornima`.`hod_login` SET `Password` = '$Password' WHERE `hod_login`.`Username` = '$Username'"))
					{
						echo "<center>Password Changed Successfully</center>";
					} else {
						echo "<center>Can't Be Changed! Try Again</center>";
					}
				} else {
					die("<center>Error! Please Check ur Password</center>");
				}
			} else {
				die("<center>Username not Found</center>");
			}
		} else{
			die("<center>Passwords Donot Match</center>");
		}
	} else {
		die ("<center>Enter All Fields</center>");
	}
