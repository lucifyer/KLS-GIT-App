
<?php
	
	$db_name = "u519370004_quiz";
	$mysql_user = "root";
	$mysql_pass = "";
	$server_name = "localhost";
		
	if(isset($con))
        mysqli_close($con);
	$con = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);
	if (mysqli_connect_errno())
	{
		die("Error in connection " . mysqli_connect_error());
	}
?>
