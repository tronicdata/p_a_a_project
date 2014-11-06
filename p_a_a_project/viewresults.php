<?php
	ini_set('display_errors', 'On');
error_reporting(E_ALL);

$host="localhost";
$username="root";
$password="root";
$db_name="p_a_project";
	
	
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
   mysql_select_db("$db_name")or die("cannot select DB");

$sql = "SELECT * FROM `job_experience` ORDER BY `start_date` DESC ";

$data = mysql_query($sql) or die (mysql_error());


		



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
<h1>Professional Accomplishments App View Results</h1>
<h3>Your Resume:</h3>

<table class="table table-striped table-bordered">
	<tr>
		<th>#</th>
		<th>Company Name</th>
		<th>Start Date</th>
		<th>End Date</th>
		
		<th>Job Title</th>
		<th>Delete</th>
		
		
	</tr>
	
	<?php 
		$numb_item="1";
		while ($info= mysql_fetch_array( $data ))
		{
			echo "<tr>";
			echo "<td>". $numb_item++ ."</td>";
			echo "<td><a href=\"view_individ.php/?id=". $info['id'] ."\">".$info['company_name'] . "</a></td>";
			echo "<td>".$info['start_date'] . "</td>";
			echo "<td>".$info['end_date'] . "</td>";
			
			echo "<td>".$info['job_title'] . "</td>";
			echo "<td><a class=\"btn btn-default\"href=\"delete.php/?id=". $info['id'] ."\">DELETE</a></td>";
			
			echo "</tr>";
		}
	?>

</table>


	<p>
		<a class="btn btn-default"href="index.html">Go Back</a>
	</p>
</div><!--end container-->
</body>
</html>