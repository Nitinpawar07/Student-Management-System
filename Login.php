<?php include_once './constants.php';
include_once './dbinfo.php'; 
 ?>

<!DOCTYPE html>
<html>
<?php $page_title = 'Home';?>
<?php $page_menu = 'home'; ?>
<?php include_once './header.php'; ?>
<body>
  <?php include_once './topmenu.php'; ?>

  <div class="container">
    <div class="col-md-12">
      <form class="form-horizontal" method="post" action="login_data.php" >
        <fieldset>
			
          <!-- Form Name -->
          <legend>Login Form</legend>
		  

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="fname">UserName</label>
            <div class="col-md-4">
              <input id="un" name="un" type="text" placeholder="UserName"class="form-control input-md">
              <span class="help-block">Enter UserName</span>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="lname">Password</label>
            <div class="col-md-4">
              <input id="pass" name="pass" type="password" placeholder="Password"class="form-control input-md" >
              <span class="help-block">Enter Password</span>
            
		  
		  <select name="Type">
		  <option value="Student">Student</option>
		  <option value="Teacher">Teacher</option>
		  <option value="Admin">Admin</option>
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

   <?php include_once 'footer.php'; ?>

  </div>
  <!--/.container-->
  <?php include_once 'footer_scripts.php'; ?>
</body>
</html>