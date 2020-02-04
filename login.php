<?php 
	
	include('registration.php');
	include('validation.php');

 ?>
<!DOCTYPE html>
 <html>
	<?php include('templates/header.php') ?>
	<div class="container">
		<div class="login-box">
			<div class="row">
				<div class="col-md-6 login-left">
					<h2>Login Here</h2>
					<form action="login.php" method="POST">
						<div class="form-group">
							<label>User Name:</label>
							<input type="text" name="user_name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>User Email:</label>
							<input type="text" name="user_email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>User Password:</label>
							<input type="password" name="user_password" class="form-control" required>
						</div>
						<button type="submit" name="login" class="btn btn-primary">Login</button>
					</form>
				</div>
				<div class="col-md-6 login-right">
					<h2>Register Here</h2>
					<form action="login.php" method="POST">
						<div class="form-group">
							<label>User Name:</label>
							<input type="text" name="user_name" class="form-control" required>
							<p><?php echo $userExist;?></p>
						</div>
						<div class="form-group">
							<label>User Email:</label>
							<input type="text" name="user_email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>User Password:</label>
							<input type="password" name="user_password" class="form-control" required>
						</div>
						<button type="submit" name="register" class="btn btn-primary">Register</button>
					</form>
				</div>
			</div>
		</div>
		<h3 class="text-center"><?php echo $loginFailed; ?></h3>
		<h3 class="text-center"><?php echo $regSuccess; ?></h3>
	</div>
	<?php include('templates/footer.php') ?>
 </html>