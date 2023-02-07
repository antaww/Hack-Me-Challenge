<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset='UTF-8'>
		<title>Hack Me Challenge</title>
		<link rel='stylesheet' href='../styles/index.css'>
		<script src='../scripts/wtfisthis.js'></script>
		<script src='../scripts/HOWCANWESOLVETHIS.js'></script>
	</head>
	<body>
		<div class='container'>
			<div class='pageTitle'>Enigma</div>
			<form class="enigma-form" action='enigma.php' method='post'>
				<label class="form-label"><p>1 - I am between 403 and 405.</p>
					<input class='code' type='text' name='answer1' placeholder='Answer 1'>
				</label>
				<label class="form-label"><p>2 - I am the 27th in a group of 26, without me IKEA would be IKE.</p>
					<input class='code' type='text' name='answer2' placeholder='Answer 2'>
				</label>
				<label class="form-label"><p>3 - I am the beginning of enigma, but also of <b class="amgine">economics</b>.</p>
					<input class='code' type='text' name='answer3' placeholder='Answer 3'>
				</label>
				<button type='submit' value='Submit'>Submit</button>
				<?php
				if (isset($_POST['answer1']) && isset($_POST['answer2']) && isset($_POST['answer3'])) {
					$answer1 = $_POST['answer1'];
					$answer2 = $_POST['answer2'];
					$answer3 = $_POST['answer3'];
					if ($answer1 == 'and' && $answer2 == 'A' && $answer3 == 'e') {
						echo '<a href="validation.php">What does this mean?</a>';
					} else {
						echo 'An enigma ?';
					}
				}
				?>
		</div>
	</body>
</html>