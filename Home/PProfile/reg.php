<?php
$connect = mysql_connect("localhost", "id18835262_tpo", ""); // Establishing Connection with Server
mysql_select_db("id18835262_tpo_poornima"); // Selecting Database from Server
if(isset($_POST['update']))
{ 
$Username = $_POST['Fname'];
$Password = $_POST['Lname'];
$Email = $_POST['Username'];
$Question = $_SESSION["username"];
$Answer = $_POST['Num'];


if($Username !=''||$email !='')
{
	if($Username == $sun)
	{
		
	$sql = mysql_query("SELECT * FROM `id18835262_tpo_poornima`.`student_details` WHERE `Username`='$Username'");
	if(mysql_num_rows($sql) == 1)
	{
  
		if($query = mysql_query("UPDATE `id18835262_tpo_poornima`.`student_details` SET `FirstName`='$fname', `LastName`='$lname', `Mobile`='$phno', `Email`='$email', `DOB`='$date', `Sem`='$cursem', `Branch`= '$branch', `SSLC`='$per', `PU/Dip`='$puagg', `BE`='$beaggregate', `Backlogs`='$back', `HofBacklogs`='$hisofbk', `DetainYears`='$detyear' ,`Approve`='0'
           WHERE `student_details`.`Username` = '$Username'"))
               {
				echo "<center>Data Updated successfully...!!</center>";
               }
	  
            else echo "<center>FAILED</center>";
		
	}	
	else echo "<center>NO record found for update</center>";
	}
else
	echo "<center>enter your Username only</center>";
}
}
?>