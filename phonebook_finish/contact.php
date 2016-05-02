<?php 

	if (isset($_GET['id'])) {

		$contact_id = $_GET['id'];

		require_once"connection.php";

		$contacts = array();

		$all_contacts = "select * from contacts where contact_id = '$contact_id'";

		$sql_all_contacts = $conn->query($all_contacts);

		$total_contacts = $sql_all_contacts->num_rows;

		while ($row = mysqli_fetch_assoc($sql_all_contacts)) {
			$contacts[] = $row;
		}

		foreach ($contacts as $contact);
	}
 ?>
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
				<div class="floatl"><h1><?php echo $contact["contact_fname"] . " " . $contact["contact_lname"]; ?></h1></div>
				<a class="floatr" href="index.php"><input class="cancel_contact_button" type="button" value="Home"></a>
				<div class="clear"></div>
				<hr>
				<div class="contact">
					<?php 
						if ($contact["contact_profile"] == "") {?>
							<img src="img/default_profile_pic.jpg" alt="default image"  width="40%" style="float:left;">
						<?php } else{?>
						<img src="profile_images/<?php echo $contact["contact_profile"]?>" alt="" width="40%" style="float:left;">
						<?php } ?>
					<div class="contact_info">
						<p><b>Nickname</b>: <?php echo $contact["contact_nickname"] ?></p>
						<p><b>Cell Phone:</b> <?php echo $contact["contact_cphone"] ?></p>
						<p><b>Home Phone:</b> <?php echo $contact["contact_hphone"] ?></p>
						<p><b>Work Phone:</b> <?php echo $contact["contact_wphone"] ?></p>
						<p><b>Address:</b> <a href="http://maps.google.com/?q=<?php echo $contact["contact_address"] . " " . $contact["contact_city"] . ", " . $contact["contact_state"] . " " . $contact["contact_zipcode"]?>"><?php echo $contact["contact_address"] . " " . $contact["contact_city"] . ", " . $contact["contact_state"] . " " . $contact["contact_zipcode"]?></a></p>
						<p><b>Bio:</b> <?php echo $contact["contact_notes"] ?></p>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>	
</body>
</html>		