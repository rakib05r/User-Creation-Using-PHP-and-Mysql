<?php 

	session_start();
	include ('config/db_connect.php');
		$loginFailed='';
	if(isset($_POST['login'])){
		$name=$_POST['user_name'];
		$email=$_POST['user_email'];
		$pass=$_POST['user_password'];

		$sql="SELECT * FROM user_register_table WHERE name='$name' && password='$pass'";
		$result=mysqli_query($conn,$sql);

		$num=mysqli_num_rows($result);

		if($num==1){
			$_SESSION['username']=$name;
			header('Location: index.php');
		}else{
			// header('Location: login.php');
			
			$loginFailed = "User Name OR password is not valid";
		}
	}

?>