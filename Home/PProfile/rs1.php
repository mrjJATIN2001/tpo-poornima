<?php
	session_start();
	
	$Username1 = $_POST['Username'];
	$password = $_POST['Password'];
	$confirm = $_POST['repassword'];
	
	$connect = mysql_connect("localhost", "id18835262_tpo", ""); // Establishing Connection with Server
    mysql_select_db("id18835262_tpo_poornima") or die("Cant Connect to database"); // Selecting Database from Server
	
	if($password == $confirm) {
		if($sql = mysql_query("UPDATE `id18835262_tpo_poornima`.`tpo_login` SET `Password` ='$password' WHERE `tpo_login`.`Username` = '$Username1'"));
		echo "<center>Password Reset Complete</center>";
		session_unset();
	} else
	echo "Update Failed";
?>