<?php
//connect to db
$con =mysqli_connect("localhost","root","","shouts");
//test connection
if(mysqli_connect_errno()){
	echo 'Filed to connect to MYSQL: '.$mysqli_connect_error();
}
?>