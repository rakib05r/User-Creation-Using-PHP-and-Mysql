<?php 

	// session_start();
	include ('config/db_connect.php');
	$userExist='';
	$regSuccess='';
	if(isset($_POST['register'])){
		$name=$_POST['user_name'];
		$email=$_POST['user_email'];
		$pass=$_POST['user_password'];

		$sql="SELECT * FROM user_register_table WHERE name='$name'";
		$result=mysqli_query($conn,$sql);

		$num=mysqli_num_rows($result);

		if($num==1){
			$userExist = "User Name ". $name ." Already Exist";
		}else{
			$reg="INSERT INTO user_register_table(name,email,password) VALUES ('$name','$email','$pass')";
			mysqli_query($conn,$reg);
			$regSuccess = "Registration Complete";
			// header('Location: login.php');
		}
	}

?>