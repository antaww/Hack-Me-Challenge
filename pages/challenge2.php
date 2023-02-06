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
			<?php
			$expectedCode = 'CHALLENGE48H'; //cookie -> message -> image -> flag js -> morse -> binary -> code

			if(isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] == 'SELECT+*+FROM+dolphin'){
				//todo: return data base content
			} else {
				echo 'What is my dolphin doing here ?';
			}

			echo '<img class="dolphin" src="dolphin.png" alt="dolphin">'
			?>
		</div>
	</body>
</html>


