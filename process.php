<?php
include 'db.php';

//check if form is submitted
if(isset($_POST['submit'])){
	$user = mysqli_real_escape_string($con,$_POST['user']);

	$message = mysqli_real_escape_string($con,$_POST['message']);

	//set timezone
	date_default_timezone_set('Asia/Kolkata');
	//$time = date('h:i:s a',time());
	$time = date("Y-m-d h:i:sa");
	//validate input

	if(!isset($user)||$user==''|| !isset($message)|| $message == ''){

		$error ="Please fill in your name and message";
		header("Location:index.php?error=".urlencode($error));
		exit();

	} else {
			$query = "INSERT INTO shouts(user,message,time)
			values('$user','$message','$time')";
			if(!mysqli_query($con,$query))	{
				die("Error".mysqli_error($con));
			}	else {
				header("Location: index.php");
			}
	}
}
?>