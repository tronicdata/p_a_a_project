<?php
$id_view = $_GET['id'];

ini_set('display_errors', 'On');
error_reporting(E_ALL);

$host="localhost";
$username="root";
$password="root";
$db_name="p_a_project";
	
	
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$sql = "SELECT * FROM `job_experience` WHERE `id` = '$id_view' ";

$data = mysql_query($sql) or die (mysql_error("you fucked up"));

$info= mysql_fetch_array( $data ); 

$company_name = $info["company_name"];

		



?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="script.js"> </script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="page-header">
			<h1><?php echo $company_name ?></h1>
		</div>
		<p><strong>Start Date:</strong> <?php echo $info['start_date'] ?></p>
		<p><strong>End Date:</strong> <?php echo $info['end_date'] ?></p>
		<p><strong>Address:</strong> <?php echo $info['company_address'] ?></p>
		<p><strong>Phone:</strong> <?php echo $info['company_phone'] ?></p>
		<p><strong>Job title:</strong> <?php echo $info['job_title'] ?></p>
		<p><strong>Pay:</strong> <?php echo $info['pay'] ?></p>
		<p><strong>Duties:</strong> <?php echo $info['duties'] ?></p>
		<p><strong>References:</strong> <?php echo $info['references'] ?></p>
		<p><strong>Accomplishments:</strong> <?php echo $info['accomplishments'] ?></p>
		<p><strong>Reason for Leaving:</strong> <?php echo $info['reason_leaving'] ?></p>
		<p><strong>Notes:</strong> <?php echo $info['notes'] ?></p>
		<?php

			echo "<a class=\"btn btn-default\" href=\"/p_a_a_project/edit.php/?id=". $id_view ."\">Edit</a>"

		?>
		<a class="btn btn-default" href="/p_a_a_project/viewresults.php">Back to main page</a>
	</div><!--end container-->
</body>
</html>