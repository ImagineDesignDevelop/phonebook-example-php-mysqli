<!DOCTYPE html>
<html>
<head>
	<?php include"includes/head.inc"; ?>
	<script>tinymce.init({selector:'textarea'});</script>
</head>
<body>
	<div class="wrapper">

		<!-- header section -->
		<div class="header">
			<div class="headerContent"><h1>CONTACT LIST</h1></div>
		</div>

		<!-- content section -->
		<div class="content">
		<div><h1>Update Contact</h1></div>
			<hr>
			<div class="contact">
				<div class="contact_insert">
					<form>
						<table style="float:left" width="50%">
							<input type="hidden" name="id" value="">
							<tr>
								<td>First Name:</td>
								<td><input type="text" name="fname" value=""  size="40%"></td>
							</tr>
							<tr>
								<td>Last Name:</td>
								<td><input type="text" name="lname" value="" size="40%"></td>
							</tr>
							<tr>
								<td>Nickname:</td>
								<td><input type="text" name="nickname" value="" size="40%"></td>
							</tr>
							<tr>
								<td>Profile Image:</td>
								<td><input type="file" name="profile"></td>
							</tr>
							<tr>
								<td>Cell Phone:</td>
								<td><input type="text" name="cphone" value="" size="40%"></td>
							</tr>
							<tr>
								<td>Home Phone:</td>
								<td><input type="text" name="hphone" value="" size="40%"></td>
							</tr>
							<tr>
								<td>Work Phone:</td>
								<td><input type="text" name="wphone" value="" size="40%"></td>
							</tr>
							<tr>
								<td>Address:</td>
								<td><input type="text" name="address" value="" size="40%"></td>
							</tr>
							<tr>
								<td>City:</td>
								<td><input type="text" name="city" value="" size="40%"></td>
							</tr>
							<tr>
								<td>State:</td>
								<td><input type="text" name="state" value="" size="40%"></td>
							</tr>
							<tr>
								<td>Zipcode:</td>
								<td><input type="text" name="zipcode" value="" size="40%"></td>
							</tr>
						</table>
						<table style="float:right" width="45%">
							<tr>
								<td>Bio:</td>
								<td><textarea name="bio" id="bio" cols="30" rows="10"></textarea></td>
							</tr>
						</table>
						<div class="clear"></div>
						<input class="insert_contact_button" type="submit" name="submit" value="Update Contact">
						<a href="index.php"><input class="cancel_contact_button" type="button" value="Cancel"></a>
					</form>
				</div>
				<div class="clear"></div>
			</div>
		</div>	
</body>
</html>		
