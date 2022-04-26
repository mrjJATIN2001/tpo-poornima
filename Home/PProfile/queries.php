<?php
  session_start();
 if (isset($_SESSION['pusername'])){
	   }
   else {
	   header("location: index.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Queries</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <?php
		  $Welcome = "Welcome";
          echo "<h1>" . $Welcome . "<br>". $_SESSION['pusername']. "</h1>";
		 echo "<br>";
		  ?>
        </header>
        <div class="profile-photo-container">
          <img src="images/profile.png" alt="Profile Photo" class="img-responsive">

        </div>
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
        <nav class="templatemo-left-nav">
          <ul>
         <ul>
            <li><a href="login.php" ><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="Placement Drives.php"><i class="fa fa-home fa-fw"></i>Placement Drives</a></li>
            <li><a href="manage-users.php" ><i class="fa fa-users fa-fw"></i>View Students</a></li>
			<li><a href="#" class="active"><i class="fa fa-users fa-fw"></i>Queries</a></li>
      <li><a href="Students Eligibility.php"><i class="fa fa-users fa-fw"></i>Students Eligibility Status</a></li>
            <li><a href="logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>
        </nav>
      </div>
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
               <li><a href="../index.php">Home TPO-PIET</a></li>
                <li><a href="../Drives/index.php">Drives Home</a></li>
                <li><a href="Notif.php">Notification</a></li>
                <li><a href="Change Password.php">Change Password</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
		<div class="templatemo-content-widget no-padding">
		<center>
		    <h3>Student Queries</h3>
	
<div  class="templatemo-content-container" >
<table class="table table-striped table-bordered templatemo-user-table">
  <thead>
    <tr>
        <td><a  class="white-text templatemo-sort-by">Name </a></td>
      <td><a class="white-text templatemo-sort-by">Email </a></td>
        <td><a  class="white-text templatemo-sort-by">Subject </a></td>
      <td><a class="white-text templatemo-sort-by">Message </a></td>
</thead>
</tr>

<?php
$p = $_SESSION['pusername'];
$num_rec_per_page=15;
$conn = mysqli_connect('localhost','id18835262_tpo','Admin@123456','id18835262_tpo_poornima');
// mysql_select_db('id18835262_tpo_poornima');
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $num_rec_per_page;
$sql = "SELECT * FROM queries";
$rs_result = $conn->query($sql); //run the query
// $rs_result = $sql->query();
while ($row = $rs_result->fetch_assoc())
{

print "<tr>";
print "<td>" . $row['Name'] . "</td>";
print "<td>" . $row['Email'] . "</td>";
print "<td>" . $row['Subject'] . "</td>";
print "<td>" . $row['Message'] . "</td>";
print "</tr>";

}
?>
  </tbody>
</table>
</div>
	</div>
		</div>
          <footer class="text-right">
            <p>Copyright &copy; 2022 PIET-PGC|<a href="#" target="_parent"> Developed by Code Brigade </a></p>
          </footer>
        </div>
      </div>
    </div>
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
      $(document).ready(function(){
        // Content widget with background image
        var imageUrl = $('img.content-bg-img').attr('src');
        $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
        $('img.content-bg-img').hide();
      });
    </script>
  </body>
</html>