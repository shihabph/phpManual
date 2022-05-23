<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Newsletter</title>
</head>

<body>
	<Section class="xprint" style="width: 750px; margin: 0 auto; background-color:thistle; padding: 25px">
		<?php
			// define variables and set to empty values
			$nameErr = $emailErr =  "";
			$name = $email = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (empty($_POST["name"])) {
					$nameErr = "Name is required";
				} else {
					$name = test_input($_POST["name"]);
				}
				if (empty($_POST["email"])) {
					$emailErr = "Email is required";
				} else {
					$email = test_input($_POST["email"]);
				}
			}
		function test_input($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
			?>
		<h4>Thank you <?php echo $name;?> for your subscription to our Newsletter</h4>
		<h5>Your Email Address is <?php  echo $email;?></h5>
	</Section>
</body>

</html>