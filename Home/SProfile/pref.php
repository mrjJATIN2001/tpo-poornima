<?php
  session_start();
  if($_SESSION["username"]){
    echo "Welcome, ".$_SESSION['username']."!";
  }
   else {
	   header("location: index.php");
}

?>
<?php
$connect = mysqli_connect("localhost", "id18835262_tpo", "Admin@123456","id18835262_tpo_poornima"); // Establishing Connection with Server
// mysql_select_db("id18835262_tpo_poornima"); // Selecting Database from Server
if(isset($_POST['submit']))
{
$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$Username = $_POST['Username'];
$sun = $_SESSION["username"];
$phno = $_POST['Num'];
$email = $_POST['Email'];
$date = $_POST['DOB'];
$cursem = $_POST['Cursem'];
$branch = $_POST['Branch'];
$per = $_POST['Percentage'];
$puagg = $_POST['Puagg'];
$beaggregate = $_POST['Beagg'];
$back = $_POST['Backlogs'];
$hisofbk = $_POST['History'];
$detyear = $_POST['Dety'];
if($Username !=''||$email !='')
{
	if($Username == $sun)
    {
    if($query = $connect->query("INSERT INTO `id18835262_tpo_poornima`.`student_details` ( `FirstName`, `LastName`, `Username`, `Mobile`, `Email`, `DOB`, `Sem`, `Branch`, `SSLC`, `PU/Dip`, `BE`, `Backlogs`, `HofBacklogs`, `DetainYears`, `Approve`)
          VALUES ('$fname', '$lname', '$Username', '$phno', '$email', '$date', '$cursem', '$branch', '$per', '$puagg', '$beaggregate', '$back', '$hisofbk', '$detyear', '0')"))
    {
				echo "<center>Details has been received successfully...!!</center>";
      }


		else echo "FAILED";
}

else{
	  echo "<center>enter your Username only...!!</center>";
}
}
}
?>


<?php
$connect = mysqli_connect("localhost", "id18835262_tpo", "Admin@123456","id18835262_tpo_poornima"); // Establishing Connection with Server
// mysql_select_db("id18835262_tpo_poornima"); // Selecting Database from Server
if(isset($_POST['update']))
{
$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$Username = $_POST['Username'];
$sun = $_SESSION["username"];
$phno = $_POST['Num'];
$email = $_POST['Email'];
$date = $_POST['DOB'];
$cursem = $_POST['Cursem'];
$branch = $_POST['Branch'];
$per = $_POST['Percentage'];
$puagg = $_POST['Puagg'];
$beaggregate = $_POST['Beagg'];
$back = $_POST['Backlogs'];
$hisofbk = $_POST['History'];
$detyear = $_POST['Dety'];

if($Username !=''||$email !='')
{
	if($Username == $sun)
	{

	$sql = $connect->query("SELECT * FROM `id18835262_tpo_poornima`.`student_details` WHERE `Username`='$Username'");
	if($sql->num_rows == 1)
	{

		if($query = $connect->query("UPDATE `id18835262_tpo_poornima`.`student_details` SET `FirstName`='$fname', `LastName`='$lname', `Mobile`='$phno', `Email`='$email', `DOB`='$date', `Sem`='$cursem', `Branch`= '$branch', `SSLC`='$per', `PU/Dip`='$puagg', `BE`='$beaggregate', `Backlogs`='$back', `HofBacklogs`='$hisofbk', `DetainYears`='$detyear' ,`Approve`='0'
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
