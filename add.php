<?php 

	session_start();
	include ('config/db_connect.php');
	$title=$email=$ingredients=$image=$gender='';
	$errors= array('name'=>'','title'=>'','email'=>'','image'=>'','gender'=>'','marital_status'=>'','address'=>'','mobile'=>'');

	if(isset($_POST['submit'])){

		$target = "images/";//.basename($_FILES['image']['name']);
		$imageTempName = $_FILES['image']['tmp_name'];

		if(empty($_POST['u_email'])){
			$errors['email']= 'Email Field Required <br/>';
		}else{
			$email=$_POST['u_email'];
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				$errors['email']= 'EMAIL IS NOT VALID <br/>';
			}
		}
		if(empty($_POST['u_title'])){
			$errors['title'] = 'title Field Required <br/>';
		}else{
			$title = $_POST['u_title'];
		}
		if(empty($_POST['u_name'])){
			$errors['name'] = 'name Field Required <br/>';
		}
		if(empty($_POST['u_gender'])){
			$errors['gender'] = 'Gender Field Required <br/>';
		}else{

		}
		if(empty($_POST['u_marital_status'])){
			$errors['marital_status'] = 'Marital_status Field Required <br/>';
		}else{

		}
		if(empty($_POST['u_address'])){
			$errors['address'] = 'Address Field Required <br/>';
		}
		if(empty($_POST['u_mob'])){
			$errors['mobile'] = 'Mobile Field Required <br/>';
		}
		if(array_filter($errors)){
		}else{

			$name=mysqli_real_escape_string($conn,$_POST['u_name']);
			$email=mysqli_real_escape_string($conn,$_POST['u_email']);
			$title=mysqli_real_escape_string($conn,$_POST['u_title']);
			$image=mysqli_real_escape_string($conn,$_FILES['image']['name']);
			$gender=mysqli_real_escape_string($conn,$_POST['u_gender']);
			$marital_status=mysqli_real_escape_string($conn,$_POST['u_marital_status']);
			$address=mysqli_real_escape_string($conn,$_POST['u_address']);
			$mobile=mysqli_real_escape_string($conn,$_POST['u_mob']);

			$sql="INSERT INTO user_info(name,email,title,image,gender,marital_status,Address,mobile_no) VALUES ('$name','$email','$title','$image','$gender','$marital_status','$address','$mobile')";

			if(mysqli_query($conn,$sql)){
				if(move_uploaded_file($imageTempName, $target.$image)){
					header('Location: index.php');
				}
			}else{
				echo 'Query Error ' . mysqli_error($conn);
			}
		}
	}
 ?>

 <!DOCTYPE html>
 <html>

 	<?php include('templates/header.php') ?>

 		<?php if(isset($_SESSION['username'])):?>
 			<?php include('templates/user_add_section.php') ?>
 		<?php else: ?>
			<h1 class="center">Please Login</h1>
		<?php endif ?>

 	<?php include('templates/footer.php') ?>

 </html>