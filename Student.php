<?php include_once './constants.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<?php $page_title = 'Home';
$page_menu = 'home'; ?>
<?php include_once './header.php'; ?>
<link href="./assets/lib/css/custom.css" rel="stylesheet" >

<body>
  <?php @session_start(); ?>
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo PROJECT_NAME; ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?php echo ($page_menu == 'home' ? 'class="active"' : ''); ?> ><a href="index.php">Home</a></li>
                <li <?php echo ($page_menu == 'GET MARKSHEET' ? 'class="active"' : ''); ?> ><a href="#">GET MARKSHEET</a></li>
               



  <div class="dropdown"><button class="dropbtn">DETAILS</button>
  <div class="dropdown-content">
   <a href="AttendenceDeatils.php"> ALL Attendence</a>
    <a href="SubjectDeatils.php">Subject Details</a>
    <a href="FeesDeatils.php">Fees Details</a>
  </div>
</div>



   <div class="dropdown"><button class="dropbtn">Logout</button>
  <div class="dropdown-content">
    <a href="Login.php">Logout</a>
  </div>
</div>

            
            </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar --> 

  <div class="container">
    <div class="col-md-12">
     </div>
	
	<center><h1 style="margin-top: 250px;
  margin-bottom: 300px;"> STUDENT INFORMATION MANGEMENT SYSTEM </h1></center>
    </div>



    
	<?php include_once 'footer.php'; ?>


    <?php include_once 'footer.php'; ?>

  </div>
  <!--/.container-->


  <?php include_once 'footer_scripts.php'; ?>
 
</body>

</html>