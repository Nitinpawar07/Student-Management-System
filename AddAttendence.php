<?php 
global $db;
include_once './constants.php';
include_once './dbinfo.php';

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
                <div class="dropdown"><button class="dropbtn">ADMINISTRATION</button>
  <div class="dropdown-content">
    <a href="Admin.php">Add Student</a>
    <a href="#">Add Subject</a>
    <a href="#">Add Fees</a>
    <a href="#">Add Attendence</a>
  </div>
</div>        



  <div class="dropdown"><button class="dropbtn">DETAILS</button>
  <div class="dropdown-content">
    <a href="#">Student Details</a>
    <a href="#">Subject Details</a>
    <a href="#">Fees Details</a>
    <a href="#">Attendence Details</a>
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
      <form class="form-horizontal" method="post" action="new_reg3.php" >
        <fieldset>

          <!-- Form Name -->
          <legend>Add Attendence</legend>
		  
		  

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="fname">First Name</label>
            <div class="col-md-4">
              <input id="fname" name="fname" type="text" placeholder="First Name" value="<?php echo isset($row['fname'])?$row['fname']:""; ?>" class="form-control input-md">
              <span class="help-block">Enter First Name</span>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="lname">Last Name</label>
            <div class="col-md-4">
              <input id="lname" name="lname" type="text" placeholder="Last Name" value="<?php echo isset($row['lname'])?$row['lname']:"";?>" class="form-control input-md" >
              <span class="help-block">Enter Last Name</span>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="mobile">Date</label>
            <div class="col-md-4">
              <input id="date" name="date" type="date" value="<?php echo isset($row['date'])?$row['date']:"";?>" placeholder="date" class="form-control input-md" >
              <span class="help-block">Enter Date</span>
            </div>
          </div>

         <!-- Select Basic -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="notifications">Attendence</label>
            <div class="col-md-4">
              <select id="Attendence" name="Attendence" class="form-control">
                <option value="0">Select</option>
                <option value="Present">Present</option>
                <option value="Absent">Absent</option>
              </select>
            </div>
          </div>
		  

          <!-- Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
              <button id="submit" name="submit" class="btn btn-primary" >Submit</button>
            </div>
          </div>
		   
		  



        </fieldset>
      </form>


    </div>



    <hr>

    <?php include_once 'footer.php'; ?>

  </div>
  <!--/.container-->


  <?php include_once 'footer_scripts.php'; ?>
 
</body>

</html>