<?php
	
	include ('config/db_connect.php');

	if(isset($_POST['delete'])){
		$id_to_delete=mysqli_real_escape_string($conn, $_POST['id_to_delete']);
		$sql="DELETE FROM user_info WHERE id=$id_to_delete";
		if (mysqli_query($conn,$sql)) {
			header('Location: index.php');
		}else{
			echo "Delete can't occur";
		}
	}

	if(isset($_GET['id'])){
		$id=mysqli_real_escape_string($conn,$_GET['id']);

		$sql="SELECT * FROM user_info WHERE id=$id";
		$result=mysqli_query($conn,$sql);
		$pizza=mysqli_fetch_assoc($result);
		mysqli_free_result($result);
		mysqli_close($conn);
	}

?>

<!DOCTYPE html>
<html>
	<?php include('templates/header.php') ?>
		<div class="container">
			<?php if($pizza): ?>
		  <div class="avatar-flip">
		    <img src="<?php echo htmlspecialchars('images/'.$pizza['image']); ?>" height="200px" width="200px">
		  </div>
		  <h2>Name: <?php echo htmlspecialchars($pizza['name']); ?></h2>
		  <h4>Title: <?php echo htmlspecialchars($pizza['title']); ?></h4>
		  <h4>Email: <?php echo htmlspecialchars($pizza['email']); ?></h4>
		  <h4>Gender: <?php echo htmlspecialchars($pizza['gender']); ?></h4>
		  <h4>Address: <?php echo htmlspecialchars($pizza['Address']); ?></h4>
		  <h4>Marital Status: <?php echo htmlspecialchars($pizza['marital_status']); ?></h4>
		  <h4>Mobile No: <?php echo htmlspecialchars($pizza['mobile_no']); ?></h4>
			<form action="details.php" method="POST">
				<input type="hidden" name="id_to_delete" value="<?php echo $pizza['id']?>">
				<input type="submit" name="delete" value="Delete" class="btn btn-primary">
			</form>
			<?php else: ?>
				<h1 class="center">No Such User</h1>
			<?php endif ?>
		</div>
	<?php include('templates/footer.php') ?>
</html>