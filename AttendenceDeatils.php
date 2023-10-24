<?php
global $db;
include_once './constants.php';
include_once './dbinfo.php';

$sql = "SELECT * FROM addattendence";

$result = mysqli_query($db, $sql);


?>
<!DOCTYPE html>
<html lang="en">
<?php $page_title = 'List';
$page_menu = 'list'; ?>
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
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Attendence</td>
                            <td>Date</td>
                       </tr>
                    </thead>
                    <tbody>

                        <?php $counter = 1; ?>
                        <?php while ($row = mysqli_fetch_assoc($result)):?>
                            <tr>
                                
                                <td><?php echo $row['fname'] . ' ' . $row['lname']; ?></td>
                                <td><?php echo $row['Attendence']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                             
                            </tr>
                            <?php $counter++; ?>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>


        <!--/row-->

        <hr>

        <?php include_once 'footer.php'; ?>

    </div>
    <!--/.container-->


    <?php include_once 'footer_scripts.php'; ?>
</body>

</html>