<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset='UTF-8'>
		<title>Hack Me Challenge</title>
		<link rel='stylesheet' href='../styles/index.css'>
		<script src='../scripts/wtfisthis.js'></script>
	</head>
	<body>
		<div class="container">
			<?php
			$expectedCode = 'secret_code'; //code challenge 1

			if (!isset($_POST['code'])) {
				echo '<form autocomplete="off" class="password-form" method="post">';
				echo '<label for="code">Enter code</label>';
				echo '<input autocomplete="off" type="password" name="code" id="code">';
				echo '<button type="submit" value="Submit">Submit</button>';
				echo '</form>';
			} else {
				$enteredCode = $_POST['code'];
				if ($enteredCode == $expectedCode) {
					echo '<p>Correct code !</p>';
				} else {
					echo '<a href="challenge2.php"><button>Try again.</button></a>';
				}
			}
			?>
		</div>
	</body>
</html>


