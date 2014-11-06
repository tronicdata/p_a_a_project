<?php
$id_view= $_GET['id'];

ini_set('display_errors', 'On');
error_reporting(E_ALL);

    $host="localhost";
    $username="root";
    $password="root";
    $db_name="p_a_project";
	
	
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
   mysql_select_db("$db_name")or die("cannot select DB");
  
  	   $company_name = $_POST['company_name'];
       $start_date = $_POST['start_date'];
       $end_date = $_POST['end_date'];
       $duties = $_POST['duties'];
       $job_title = $_POST['job_title'];
	     $notes= $_POST['notes'];
       $references = $_POST['references'];
       $pay = $_POST['pay'];
       $company_address = $_POST['company_address'];
       $accomplishments = $_POST['accomplishments'];
       $company_phone = $_POST['company_phone'];
       $reason_leaving = $_POST['reason_leaving'];
       

       $sql = "UPDATE `job_experience` SET
               `company_name` = '$company_name',
               `start_date` = '$start_date',
               `end_date` = '$end_date',
			         `duties`= '$duties',
               `job_title` = '$job_title',
               `notes` = '$notes',
               `references` = '$references',
               `pay` = '$pay',
               
               `company_address` = '$company_address',
               `accomplishments` = '$accomplishments',
               `company_phone` = '$company_phone',
               `reason_leaving` = '$reason_leaving' 

               WHERE `id` = '$id_view'

           		";

       $result = mysql_query($sql);

       if($result){
           echo "Successful";
           echo "<BR>";
           echo "<a href='/p_a_a_project/viewresults.php'>Back to main page</a>";
       }
       else
       {
           echo "unsuccessfull";
           echo "<BR>";
           echo "<a href='/p_a_a_project/viewresults.php'>Back to main page</a>";
       }
  
  
?>
