<?php 
include("includes/header.php");
include("includes/form_handlers/settings_handler.php");
?>

<div class="main_column column">
<table style="color:antiquewhite">
	<tr><th><h4 style="color:whitesmoke">Account Settings</h4></th></tr>
	<?php
	echo "<img src='" . $user['profile_pic'] ."' class='small_profile_pic'>";
	?>
	<br>
	<tr><td><a href="#" style="text-decoration: none;">Upload new profile picture</a> <br><br><br></td></tr>

	<tr><td>Modify the values and click 'Update Details'</td></tr>

	<?php
	$user_data_query = mysqli_query($con, "SELECT first_name, last_name, email FROM users WHERE username='$userLoggedIn'");
	$row = mysqli_fetch_array($user_data_query);

	$first_name = $row['first_name'];
	$last_name = $row['last_name'];
	$email = $row['email'];
	?>

	<form action="settings.php" method="POST">
		<tr><td>First Name:</td> <td><input type="text" name="first_name" value="<?php echo $first_name; ?>" id="settings_input"><br></td></tr>
		<tr><td>Last Name:</td><td> <input type="text" name="last_name" value="<?php echo $last_name; ?>" id="settings_input"><br></td></tr>
		<tr><td>Email:</td><td> <input type="text" name="email" value="<?php echo $email; ?>" id="settings_input"><br></td></tr>

		<?php echo $message; ?>

		<tr ><td class="heffect"><input type="submit" name="update_details" id="save_details" value="Update Details" class="info settings_submit"><br></td></tr>
	</form>

	<tr><th><h4 style="color:whitesmoke">Change Password</h4></th></tr>
	<form action="settings.php" method="POST">
		<tr><td>Old Password:</td><td> <input type="password" name="old_password" id="settings_input"><br></td></tr>
		<tr><td>New Password:</td><td> <input type="password" name="new_password_1" id="settings_input"><br>
		<tr><td>New Password Again:</td><td> <input type="password" name="new_password_2" id="settings_input"><br></td></tr>

		<?php echo $password_message; ?>

		<tr><td class="heffect"><input type="submit" name="update_password" id="save_details" value="Update Password" class="info settings_submit"><br></td></tr>
	</form>

	<tr><th><h4 style="color:whitesmoke">Close Account</h4></th></tr>
	<form action="settings.php" method="POST">
		<tr><td class="heffect"><input type="submit" name="close_account" id="close_account" value="Close Account" class="danger settings_submit"></td></tr>
	</form>
</table>

</div>