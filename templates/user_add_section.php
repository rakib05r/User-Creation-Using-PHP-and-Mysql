<div class="container">
	<div class="login-box">
		<div class="row">
			<div class="col-md-12">
		 	<h4 class="center">Add Your Info</h4>
			 	<form action="add.php" method="POST" enctype="multipart/form-data">
			 		<div class="form-group">
			 			<label>Your Name:</label>
			 			<input type="text" name="u_name" class="form-control" required>
			 			<div class="red-text"><?php echo $errors['name']; ?></div>
			 		</div>
			 		<div class="form-group">
			 			<label>Your Title:</label>
			 			<input type="text" name="u_title" class="form-control" required>
			 			<div class="red-text"><?php echo $errors['title']; ?></div>
			 		</div>
			 		<div class="form-group">
			 			<label>Your Email:</label>
			 			<input type="text" name="u_email" class="form-control" required>
			 			<div class="red-text"><?php echo $errors['email']; ?></div>
			 		</div>
			 		<div class="form-group">
			 			<label>Your Address:</label>
			 			<input type="text" name="u_address" class="form-control" required>
			 			<div class="red-text"><?php echo $errors['address']; ?></div>
			 		</div>
			 		<div class="form-group">
			 			<label>Your Mobile:</label>
			 			<input type="text" name="u_mob" class="form-control" required>
			 			<div class="red-text"><?php echo $errors['mobile']; ?></div>
			 		</div>
			 		<div class="form-group">
			 			<label>Your Gender:</label><br/>
			 			<input type="checkbox" name="u_gender" value="Male"> Male<br>
  						<input type="checkbox" name="u_gender" value="Female"> Female<br>
  						<div class="red-text"><?php echo $errors['gender']; ?></div>
			 		</div>
			 		<div class="form-group">
			 			<label>Your Marital Status:</label><br/>
			 			<select name="u_marital_status">
							<option  value="Unmaried" selected>Unmaried</option>
							<option  value="Married">Married</option>
						</select>
						<div class="red-text"><?php echo $errors['marital_status']; ?></div>
			 		</div>
			 		<div class="form-group">
			 			<input type="hidden" name="size" value="1000000">
			 			<label>Your Image:</label>
			 			<input type="file" name="image">
			 			<div class="red-text"><?php echo $errors['image']; ?></div>
			 		</div>
			 		<div class="center">
			 			<input type="submit" name="submit" value="Submit" class="btn btn-primary">
			 		</div>
			 	</form>
			</div>
		</div>
	</div>
</div>