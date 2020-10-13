<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>
			<?php echo htmlentities($title); ?>
		</title>
	</head>
	<body>
		<h3>Add store information</h3>
		<?php
			if ($errors) {
				echo '<ul class="errors">';
				foreach ($errors as $field => $error) {
					echo '<li>' . htmlentities($error) . '</li>';
				}
				echo '</ul>';
			}
		?>



		<form method="post" action="">
				<label for="name"> Store Name: </label><br>
					<input type="text" name="name" required>
				<br>
				<label for="phone"> Phone : </label><br>
					<input type="text" name="phone" required>
				<br>
				<label for="street"> Street: </label><br>
					<input type="text" name="street" required>
				<br>
				<label for="city"> City: </label><br>
					<input type="text" name="city" required>
				<br>
				<label for="state"> State: </label><br>
					<input type="text" name="state" required>
				<br>
				<label for="pin"> Pin Code: </label><br>
					<input type="text" name="pin" required>
				<br>
				<label for="open_time"> Open Time: </label><br>
					<input type="time" name="open_time" required>
				<br>
				<label for="close_time"> Close Time: </label><br>
					<input type="time" name="close_time" required>
				<br>
				<label for="created_at"> Created At </label><br>
					<input type="date" name="created_at" required>
				<br>
				<label for="latitude"> Latitude </label><br>
					<input type="text" name="latitude" required>
				<br>
				<label for="longitude"> Longitude </label><br>
					<input type="text" name="longitude" required>
				<br>

			<input type="hidden" name="form-submitted" value="1">
			<input type="submit" value="submit">
			<button type="button" onclick="location.href='index.php'">Cancel</button>

		</form>
	
	</body>
</html>
