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
		<div class="container">
			<div class="pageTitle" style="color:white;">Challenge 2</div>
			<?php
			$expectedCode = 'CHALLENGE48H'; //cookie -> message -> image -> flag js -> morse -> binary -> code

			if (!isset($_POST['codeC2'])) {
				echo '<form autocomplete="off" class="password-form" method="post">';
				echo '<label for="code">Enter code</label>';
				echo '<input autocomplete="off" type="password" name="codeC2" id="code">';
				echo '<button type="submit" value="Submit">Submit</button>';
				echo '</form>';
			} else {
				$enteredCode = $_POST['codeC2'];
				if ($enteredCode == $expectedCode) {
					$host_name = 'db5011839211.hosting-data.io';
					$database = 'dbs9971177';
					$user_name = 'dbu5519438';
					$password = '26032000Alexis/';
					$link = new mysqli($host_name, $user_name, $password, $database); // Working on FTP only

					if (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] == 'SELECT+*+FROM+dolphin') {
						$sql = str_replace('+', ' ', $_SERVER['QUERY_STRING']);
						$result = $link->query($sql);

						if ($result->num_rows > 0) {
							while ($row = $result->fetch_assoc()) {
								echo 'id: ' . $row['id_animal'] . ' genre: ' . $row['gender'] . ' ' . $row['weight'] . '<br>';
							}
						}
						echo '<div class="qr-code"><img class="qr1" src="row-1-column-1.png"><img class="qr2" src="row-1-column-2.png"><img class="qr3" src="row-2-column-1.png"><img class="qr4" src="row-2-column-2.png"></div>';
					} else {
						echo 'What is my dolphin doing here ?';
						echo '<img class="dolphin" src="dolphin.png" alt="dolphin">';
					}
				} else {
					echo '<a href="challenge2.php"><button>Try again.</button></a>';
				}
			}
			?>
		</div>
	</body>
</html>


