		<!DOCTYPE html>
		<html lang="en">

		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="form_style.css">
			<title>Form Handling</title>
		</head>
		<Section class="xprint">

			<form action="" method="POST">
				<table>
					<tr>
						<td>Enter the First Number</td>
						<td><input type="number" name="num1" id=""></td>
					</tr>
					<tr>
						<td>Enter the Secound Number</td>
						<td><input type="number" name="num2" id=""></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="btn" value="Calculate" name="calculation"></td>
					</tr>
				</table>
			</form>

			<?php
			include "calculation.php";


			if (isset($_POST['calculation'])) {
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];
				if (empty($num1) or empty($num2)) {
					echo "<span class='alert' style='    margin: 0 auto; color: #662a06;    display: flex;    justify-content: center;    padding: 5px;    font-size: larger;    border: 1px solid bisque;    width: 500px;    background-color: lavenderblush;'> <b>Caution:</b> This System can't Calculate, If any field is Empty</span>";
				} else {
					$cal = new calculate;
					$cal->addition($num1, $num2);
					$cal->sub($num1, $num2);
					$cal->multi($num1, $num2);
					$cal->div($num1, $num2);
					$cal->mod($num1, $num2);
					$cal->Exp($num1, $num2);
				}
			}


			?>
		</Section>
		</body>

		</html>