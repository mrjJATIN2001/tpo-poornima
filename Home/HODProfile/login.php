<?php
  session_start();
 if (isset($_SESSION['husername'])){

  }
   else {
	   header("location: index.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!--favicon-->
        <link rel="shortcut icon" href="image/favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOD Profile</title>
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
          echo "<h1>" . $Welcome . "<br>". $_SESSION['husername']. "</h1>"."<br>";
		   echo "<h1>[</h1>";
		    echo "<h1>" . $_SESSION['department']. "</h1>";
            echo "<h1>]</h1>";
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
            <li><a href="#" class="active"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="manage-student.php"><i class="fa fa-users fa-fw"></i>Manage Students</a></li>
            <li><a href="preferences.php"><i class="fa fa-sliders fa-fw"></i>Preferences</a></li>
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
                <li><a href="../Drives/index.php">Drives</a></li>
    <li><a href="Notif.php">Notification</a></li>
	<li><a href="Change Password.php">Change Password</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-flex-row flex-content-row">
            <div class="templatemo-content-widget white-bg col-2">
              <i class="fa fa-times"></i>
              <div class="square"></div>
              <h2 class="templatemo-inline-block">Welcome to PIET-PGC</h2><hr>
              <p>Being The Head of the Department, Its the Duty of you to take your students and Faculties to the right way. Approve the details of students in Manage Students tab. You may Revoke the Details and Approve them if it is Wrong and Entered Correctly Respectively.</p>
              <p><a href="manage-student.php">Approve the Students</a></p>
              <p><a href="manage-student.php">View Student Details</a></p>
              <p><a href="Change Password.php">Change your account Password</a></p>
            </div>
            
           
          </div>
          <div class="templatemo-flex-row flex-content-row">
            <div class="col-1">
              <div class="templatemo-content-widget orange-bg">
                <i class="fa fa-times"></i>
                <div class="media">
                  <div class="media-left">
                    <a href="../Drives/index.php">
                      <img class="media-object img-circle" src="images/DD.jpg">
                    </a>
                  </div>
                  <div class="media-body">
                    <h2 class="media-heading text-uppercase">Latest Drive</h2>
                    <p>Click on and get the Latest Drive</p>
                  </div>
                </div>
              </div>
              <div class="templatemo-content-widget white-bg">
                <i class="fa fa-times"></i>
                <div class="media">
                  <div class="media-left">
                    <a href="../Drives/products.php">
                      <img class="media-object img-circle" src="images/sunset22.png">
                    </a>
                  </div>
                  <div class="media-body">
                    <h2 class="media-heading text-uppercase">Upcomming Drives</h2>
                    <p>Click on and get the Upcomming Drive Details</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-1">
              <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
                <i class="fa fa-times"></i>
                <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">Latest Placed Students</h2></div>
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <td>No.</td>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Username</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1.</td>
                        <td>Test</td>
                        <td>1</td>
                        <td>test1@piet</td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Test</td>
                        <td>2</td>
                        <td>test2@piet</td>
                      </tr>
                      <tr>
                        <td>3.</td>
                       <td>Test</td>
                        <td>3</td>
                        <td>test3@piet</td>
                      </tr>
                      <tr>
                        <td>4.</td>
                       <td>Test</td>
                        <td>4</td>
                        <td>test4@piet</td>
                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>Test</td>
                        <td>5</td>
                        <td>test5@piet</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div> <!-- Second row ends -->

          <footer class="text-right">
           <p>Copyright &copy; 2022 PIET-PGC | 
              <a href="#" target="_parent">Developed by Code Brigade</a>
          </footer>
        </div>
      </div>
    </div>

    <!-- JS -->
    <script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
    <script src="https://www.google.com/jsapi"></script> <!-- Google Chart -->

    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

  </body>
</html>
