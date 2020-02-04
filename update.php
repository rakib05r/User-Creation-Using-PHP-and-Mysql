<?php
	
	include ('config/db_connect.php');

	if(isset($_POST['update'])){
		$id_to_update=$_POST['id_to_update'];
		$designation_to_update=$_POST['designation_to_update'];
		$sql="UPDATE user_info SET ingredients='$designation_to_update' WHERE id=$id_to_update";
		if (mysqli_query($conn,$sql)) {
			header('Location: index.php');
		}else{
			echo "Update can't occur <br/>" . mysqli_error($conn);
		}
		// echo 'Id: '.$id_to_update.' '.'Name: '.$designation_to_update;
	}

?>

<!DOCTYPE html>
<html>
	<?php include('templates/header.php') ?>
		<div class="container">
			<form action="update.php" method="POST">
				<label>ID:</label>
				<input type="text" name="id_to_update" required>
				<label>Designation:</label>
				<input type="text" name="designation_to_update" required>
				<input type="submit" name="update" value="Update" class="btn btn-primary">
			</form>
		</div>
	<?php include('templates/footer.php') ?>
</html>