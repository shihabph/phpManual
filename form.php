	<?php
	pre_r($_POST); //To Get the Array value using this
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$stid = $_POST['StID'];
		$gender = $_POST['gender'];

		echo "<h4>Thank you! <em>\"" . $name . "\"</em>, For your Subscription to our Newsletter <br></h4>";
		echo "<h5>Your Email Address is: <em><u>" . $email . "</u></em></h5><br>";
		echo "<p>It's good to have your phone number: " . $phone . ". Alongside your student ID is: " . $stid . " Thanks for you support being " . $gender . " member of this institute";
	}
	// This function helps to get print the value as array
	function pre_r($array)
	{
		echo '<pre>';
		print_r($array);
		echo '</pre>';
	}
	$a = 5;
	$b = 25;
	?>
