
<?php
/*

$con=  mysql_connect("localhost", "root", "root"); 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	mysql_select_db("posts") or die(mysql_error());
	
  $sql="INSERT INTO `comments`(`user_id`, `user_name`, `profile_pic_path`, `review`) 
  VALUES
  ('$_POST[user_name]','$_POST[profile_pic_path]','$_POST[user_id]', '$_POST[review]')";

  if (!mysqli_query($con,$sql))
    {
    die('Error: ' . mysqli_error($con));
    }
  echo "1 record added";


mysqli_close($con);

*/
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
       

       $sql = "INSERT INTO `job_experience` SET
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

           		";

       $result = mysql_query($sql);

       if($result){
           echo "Successful";
           echo "<BR>";
           echo "<a href='index.html'>Back to main page</a>";
       }
       else
       {
           echo "unsuccessfull";
           echo "<BR>";
           echo "<a href='index.html'>Back to main page</a>";
       }
  
  
   /*
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	mysql_select_db("posts") or die(mysql_error());
	
$sql="INSERT INTO comments (user_id, user_name, profile_pic_path, review`) 
  VALUES
  ('$_POST[user_name]','$_POST[profile_pic_path]','$_POST[user_id]', '$_POST[review]')";

if (!mysqli_query($con,$sql))
  {
  die('thug life243 ' . mysqli_error($con));
  }
 
echo "1 record added";

mysqli_close($con);
*/
?>
