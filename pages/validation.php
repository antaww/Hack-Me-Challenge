<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset='UTF-8'>
		<title>Hack Me Challenge</title>
		<link rel='stylesheet' href='../styles/index.css'>
		<link rel='stylesheet' href='../styles/challenge-2.css'>
		<script src='../scripts/wtfisthis.js'></script>
	</head>
	<body>
		<div class='container'>
			<div class='pageTitle'>Validation</div>
			<?php
			$expectedCode = 'CHALLENGE48H300%34TTfd';

			if (!isset($_POST['codeV'])) {
				echo '<div class="message">' . 'What if you' . "didn't" . 'remember ?' . '</div>';
                echo '<form autocomplete="off" class="password-form" method="post">';
				echo '<input class="code" autocomplete="off" type="password" name="codeV" id="code">';
				echo '<button type="submit" value="Submit">Submit</button>';
				echo '</form>';
			} else {
				$enteredCode = $_POST['codeV'];
				if ($enteredCode == $expectedCode) {
					echo '<div class="message">You have successfully completed the challenge. Well done.</div>';
				} else {
					echo '<a href="validation.php"><button>Try again.</button></a>';
				}
			}
			?>
		</div>
	</body>
</html>