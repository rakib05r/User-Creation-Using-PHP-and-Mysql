<?php 
	
	session_start();
	include ('config/db_connect.php');
	$sql='SELECT * FROM user_info';

	$result=mysqli_query($conn,$sql);

	$pizzas=mysqli_fetch_all($result, MYSQLI_ASSOC);

	mysqli_free_result($result);
	mysqli_close($conn);

 ?>

 <!DOCTYPE html>
 <html>
 	<?php include('templates/header.php') ?>
 	<div class="container center">
 		<?php if(isset($_SESSION['username'])):?>
 			<h4>Hello!! <?php echo $_SESSION['username']; ?></h4>
 		<?php else: ?>
			<h5 class="text-center">Please Login</h5>
		<?php endif ?>
 	</div>
 	<div class="container">
 		<div class="row">
 			<?php foreach ($pizzas as $pizza) { ?>
 				<div class="col-md-6">
 					<div class="card">
 						<img class="card-img-top" src="<?php echo htmlspecialchars('images/'.$pizza['image']); ?>" alt="Card image" height="150px" width="150px">
 						<div class="card-body">
 							<h4 class="card-title">Name: <?php echo htmlspecialchars($pizza['name']); ?></h4>
 							<div class="card-text">Title: <?php echo htmlspecialchars($pizza['title']); ?></div>
 						</div>
 						<div class="card-action right-align">
 							<a class="btn btn-primary" href="details.php?id=<?php echo $pizza['id']?>">
 								See Profile
 							</a>
 						</div>
 					</div>
 				</div>
 			<?php } ?>
 		</div>
 	</div>
 	<?php include('templates/footer.php') ?>
 </html>