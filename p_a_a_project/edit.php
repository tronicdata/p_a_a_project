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

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="script.js"> </script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
<div class="container">
<h1>Professional Accomplishments App</h1>
<p>This is where we will enter information:</p>
<form class="form-horizontal" action="/p_a_a_project/update.php?id=<?php echo $id_view ?>" role="form" method="post">
	<div class="row">
		<div class="form-group col-lg-6">
			<div class="input-group">
				<label class="input-group-addon">Company Name</label>
				<input type="text" value= "<?php echo $info['company_name'] ?>" class="form-control" name="company_name">
			</div>
		</div>
		
		<div class="form-group col-lg-3">
			<div class="input-group">
				<div class="input-group-addon">Start Date</div>
				<input type="text" class="form-control" value="<?php echo $info['start_date'] ?>" name="start_date" >
			</div>
		</div>
		<div class="form-group col-lg-3">
			<div class="input-group">
				<div class="input-group-addon">End Date</div>
				<input type="text" class="form-control" value="<?php echo $info['end_date'] ?>" name="end_date" >
			</div>
		</div>
	</div><!--end row-->
	<div class="row">
		<div class="form-group col-lg-6">
			<div class="input-group">
				<div class="input-group-addon">Address</div>
				<textarea type="text" class="form-control" name="company_address" rows="4"><?php echo $info['company_address']  ?></textarea>
			</div>
		</div>
		<div class="form-group col-lg-4">
			<div class="input-group">
				<div class="input-group-addon">Phone #</div>
				<input type="text" class="form-control" value="<?php echo $info['company_phone'] ?>" name="company_phone">
			</div>
		</div>
		<div class="form-group col-lg-4">
			<div class="input-group">
				<div class="input-group-addon">Job Title</div>
				<input type="text" class="form-control" value="<?php echo $info['job_title'] ?>" name="job_title">
			</div>
		</div>
		<div class="form-group col-lg-2">
			<div class="input-group">
				<div class="input-group-addon">Pay</div>
				<input type="text" class="form-control" value="<?php echo $info['pay'] ?>" name="pay">
			</div>
		</div>
	</div><!--end row-->
	<div class="form-group">
		<div class="input-group">
			<div class="input-group-addon">Duties</div>
			<textarea type="text" class="form-control" name="duties" rows="6"><?php echo $info['duties'] ?></textarea>
		</div>
	</div>
	
	
	<div class="form-group">
		<div class="input-group">
			<div class="input-group-addon">References</div>
			<textarea type="text" class="form-control" name="references" rows="3"><?php echo $info['references'] ?></textarea>
		</div>

	</div>
	
	
	<div class="form-group">
		<div class="input-group">
			<div class="input-group-addon">Accomplishments</div>
			<textarea type="text" class="form-control" name="accomplishments" rows="3"><?php echo $info['accomplishments'] ?></textarea>
		</div>
	</div>

	<div class="form-group">
		<div class="input-group">
			<div class="input-group-addon">Reason for Leaving</div>
			<input type="text" class="form-control" name="reason_leaving" value="<?php echo $info['reason_leaving'] ?>">
		</div>
	</div>
	<div class="form-group">
		<div class="input-group">
			<div class="input-group-addon">Notes</div>
			<textarea type="text" class="form-control" name="notes" rows="5"><?php echo $info['notes'] ?></textarea>
		</div>
	</div>
	<div class="row">
		<button type="submit" class="btn btn-default" value="submit" name="b1">Update</button>
		<a class="btn btn-default" href="/p_a_a_project/viewresults.php">View</a>
	</div>
</form>
	
</div><!--end container-->
</body>
</html>

