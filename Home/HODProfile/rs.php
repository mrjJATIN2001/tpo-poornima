<?php
session_start();

$connect = mysql_connect("localhost", "id18835262_tpo", ""); // Establishing Connection with Server
   mysql_select_db("id18835262_tpo_poornima") or die("Cant Connect to database"); // Selecting Database from Server
 
  $Username = $_POST['Username'];
  $Question = $_POST['Question'];
  $Answer = $_POST['Answer'];
  $check = mysql_query("SELECT * FROM hod_login WHERE Username='".$Username."'") or die("Check Query");
 if(mysql_num_rows($check) != 0) 
 {
	 $row = mysql_fetch_assoc($check);
	 $dbQuestion = $row['Question'];
	 $dbAnswer = $row['Answer'];
  if($dbQuestion == $Question && $dbAnswer==$Answer) 
  {
     $_SESSION['reset'] = $Username;
	   header("location: Reset password.php");
	   
  }
  else 
	  echo "<center>Failed! Incorrect Credentials</center>";
 } else
 echo "<center> Enter Something Correctly!!! </center>";
 
    /*if($query = mysql_query("INSERT INTO student_login(Fullname, Username ,Password,Email,Question,Answer) VALUES ('$Name', '$Username', '$password','$Email','$Question','$Answer')"))
    {
                       echo "<center> You have registered successfully...!! Go back to  </center>";
					             echo "<center><a href='index.php'>Login here</a> </center>";
					   
    }
  }
   else
    {
       echo "<center>Your password do not match</center>";
    }
   }
   else
   {
       echo "<center>This Username already exists</center>"; 
  }
 }*/
?>