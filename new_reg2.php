<?php
global $db;
include_once './constants.php';
include_once './dbinfo.php';

/** Need to update query **/



echo '<pre>';
print_r($_POST);
echo '</pre>';

$sql = "INSERT INTO 
       addfees
        SET 
		Fees='" . $_POST['Fees'] . "',
        description='" . $_POST['description'] . "'";

$result = mysqli_query($db, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<?php $page_title = 'Home';
$page_menu = 'home'; ?>
<?php include_once './header.php'; ?>

<body>
    <?php include_once './topmenu.php'; ?>

    <div class="container">

        <div class="row row-offcanvas row-offcanvas-right">
            <h3>Record is added successfully.</h3>
        </div>
        <!--/row-->

        <hr>

        <?php include_once 'footer.php'; ?>

    </div>
    <!--/.container-->


    <?php include_once 'footer_scripts.php'; ?>
</body>

</html>