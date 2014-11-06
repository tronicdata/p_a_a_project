<?php
     $id_delete = $_GET["id"];

	ini_set('display_errors', 'On');
error_reporting(E_ALL);





$host="localhost";
    $username="root";
    $password="root";
    $db_name="p_a_project";
	
	
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
   mysql_select_db("$db_name")or die("cannot select DB");
  
  	   
         

       $sql = "DELETE FROM `job_experience` WHERE `id` = '$id_delete' ";

       $result = mysql_query($sql);

       if($result){
           echo "Successful";
           echo "<BR>";
           echo "<a href=\"/p_a_a_project/viewresults.php\">Back to main page</a>";
       }
       else
       {
           echo "unsuccessfull";
           echo "<BR>";
           echo "<a class=\"btn btn-default\" href=\"viewresults.php\">Back to main page</a>";
       }
?>