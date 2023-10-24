<?php
global $db;
include_once './constants.php';
include_once './dbinfo.php';

//echo $_POST["Type"];

if(isset($_POST['submit']))
	$UserName=$_POST['un'];
	$Password=$_POST['pass'];
	$type=$_POST['Type'];  
	$query = "select * from user WHERE UserName='".$UserName."' and Password='".$Password."' and type='".$type."'";
	$result = mysqli_query($db, $query);
	if($result)
	{
		while($row=mysqli_fetch_array($result))
		{
		echo'<script type="text/javascript">alert("you are login successfully and you are logined as  '.$type.'")</script>';
		}
		if(mysqli_num_rows($result)>0)
		{
			if($type=="Admin")
			{
			echo "<script type='text/javascript'>window.location.href='admin.php'</script>";
			}
			else if($type=="Student")
			{
				echo "<script type='text/javascript'>window.location.href='student.php'</script>";
			}
			else
			{
				echo "<script type='text/javascript'>window.location.href='Teacher.php'</script>";
			}
		}
		else
		{
		echo "<script type='text/javascript'>window.location.href='Login.php'</script>";
		}
	}
?>