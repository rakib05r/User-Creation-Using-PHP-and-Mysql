<?php 

	$conn=mysqli_connect('localhost','root','','ninja_pizza');

	if(!$conn){
		echo 'Databas Connection Error '.mysqli_connect_error();
	}

 ?>