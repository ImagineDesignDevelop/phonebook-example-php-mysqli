<!DOCTYPE html>
<html>
<head>
	<?php include"includes/head.inc"; ?>
</head>
<body>
	<div class="wrapper">

		<!-- header section -->
		<?php include"includes/header.inc"; ?>

		<!-- content section -->
		<div class="content">
			<div class="floatl"><h1>Number of contacts here</h1></div>
			<a class="floatr" href="insert_contact.php"><input class="cancel_contact_button" type="button" value="New Contact"></a>		
			<div class="clear"></div>
			<hr class="pageTitle">
			<table id="contactsTable" class="display">
				<thead>
					<tr align="left">
						<th>Name:</th>
						<th>Nickname:</th>
						<th>Cell Phone:</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><i class="fa fa-pencil"></i> | <i class="fa fa-trash-o"></i></td>
					</tr>
					
				</tbody>
			</table>
		</div>
	</div>	
</body>
</html>		