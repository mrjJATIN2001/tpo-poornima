<?php
   $connect = mysql_connect("localhost", "id18835262_tpo", ""); // Establishing Connection with Server
   mysql_select_db("id18835262_tpo_poornima") or die("Cant Connect to database"); // Selecting Database from Server
   
   
if(isset($_POST['submit']))
{ 
  
 $Name = $_POST['Fullname'];
 $Username = $_POST['Username'];
 $password = $_POST['Password'];
 $repassword = $_POST['repassword'];
 $Email = $_POST['Email'];
  $Question = $_POST['Question'];
   $Answer = $_POST['Answer'];
  

 $check = mysql_query("SELECT * FROM student_login WHERE Username='".$Username."'") or die("Check Query");
 if(mysql_num_rows($check) == 0) 
 {
  if($repassword == $password)
  {
    
    
    if($query = mysql_query("INSERT INTO student_login(Name, Username ,Password,Email,Question,Answer) VALUES ('$Name', '$Username', '$password','$Email','$Question','$Answer')"))
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
}
?>