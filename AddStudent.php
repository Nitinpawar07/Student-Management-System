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
    <a href="#"> Details</a>
  </div>
</div>



   <div class="dropdown"><button class="dropbtn">My Profile</button>
  <div class="dropdown-content">
    <a href="#">Profile</a>
    <a href="Login.php">Logout</a>
  </div>
</div>
            
            </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->




  <div class="container">
    <div class="col-md-12">
      <form class="form-horizontal" method="post" action="new_reg.php" >
        <fieldset>

          <!-- Form Name -->
          <legend>Add Student</legend>
		  
		  <input type="hidden" id="eid" name="eid" value="<?php echo $edit_id ?>" >

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
            <label class="col-md-4 control-label" for="mobile">Mobile</label>
            <div class="col-md-4">
              <input id="mobile" name="mobile" maxlength="10" type="text" value="<?php echo isset($row['mobile'])?$row['mobile']:"";?>" placeholder="Mobile Number" class="form-control input-md" >
              <span class="help-block">Enter Mobile</span>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>
            <div class="col-md-4">
              <input id="email" name="email" type="email" placeholder="Enter Email" value="<?php echo isset($row['email'])?$row['email']:"";?>" value="<?php echo $row['lname']?> class="form-control input-md">
              <span class="help-block">Enter Email</span>
            </div>
          </div>
   <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="bloodgroup">Blood Group</label>
            <div class="col-md-4">
              <input id="bgr" name="bgr" type="text" placeholder="Enter Your Blood Group" value="<?php echo isset($row['bg'])?$row['bg']:"";?>" class="form-control input-md">
              <span class="help-block">Enter Your Blood Group</span>
            </div>
          </div>
          <!-- Multiple Radios (inline) -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="radios_reg">Registration Type</label>
            <div class="col-md-4">
              <label class="radio-inline" for="radios_reg-0">
                <input type="radio" name="radios_reg" id="radios_reg-0" value="N" checked="checked"  >
                New
              </label>
              <label class="radio-inline" for="radios_reg-1">
                <input type="radio" name="radios_reg" id="radios_reg-1" value="E">
                Existing
              </label>
            </div>
          </div>

          <!-- Select Basic -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="notifications">Notifications</label>
            <div class="col-md-4">
              <select id="notifications" name="notifications" class="form-control">
                <option value="Y">Yes - All</option>
                <option value="N">No</option>
                <option value="I">Important Only</option>
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