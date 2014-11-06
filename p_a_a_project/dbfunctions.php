<?php
function OpenDatabaseConnection()
{
	$dbconnection = mysql_connect("localhost", "root", ""); 
	if (!$dbconnection)
	{
		return null;
	}
	else
	{
		error_reporting(E_ERROR | E_PARSE);
		return $dbconnection;
	}
}

function QueryDatabase()
{

}

function CloseDatabaseConnection($dbconnection)
{
	mysql_close($dbconnection);
	$dbconnection = null;
}

?>