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
			<div class='pageTitle'>Challenge 3</div>
			<?php
			$expectedCode = 'test';
			if(isset($_POST['codeC32']) && $_POST['codeC32'] == '312'){
				//todo: redirect to enigma.php to display the enigma
			}

			if (!isset($_POST['codeC3'])) {
				echo '<form autocomplete="off" class="password-form" method="post">';
				echo '<label for="code">Enter code</label>';
				echo '<input class="code" autocomplete="off" type="password" name="codeC3" id="code">';
				echo '<button type="submit" value="Submit">Submit</button>';
				echo '</form>';
			} else {
				$enteredCode = $_POST['codeC3'];
				if ($enteredCode == $expectedCode) {
					?>
					<p>
						4271cL3 19 <b class='coo4'>70U7</b> 1Nd1v1dU 4 d2017 4 L<b class='coo1'>48.</b>L1 <b class='coo4'>d'0P1N10N</b> 37<b class="coo1">297532624155366</b>
						, c3 qU1 1MPL1qU3 L3 d<b class='coo4'>2017</b> d3 N3 P45 3723<b class="coo1">4.073902712360157</b>P0U2 535 <b class='coo9'>0P1N10N5</b> 37 c3LU1 d3 ch32ch32,
						d3 <b class='coo7'>23c3v012</b> 37 d3 23P4Nd23, 54N5 <b class='coo8'>c0N51d324710N5</b> d3 <b class='coo7'>f20N713235</b>, L35 1Nf02M4710N5 37 L35 1d335 P42 qU3LqU3 M0Y3N d'3XP235510N
						qU3 c3 5017.4271cL3 6 ch4cUN 4 L3 <b class='coo10'>d2017</b> 4 L4 23c0NN41554Nc3 3N 70U5 L13UX d3 54 <b class='coo11'>P3250NN4L173</b> jU21d1qU3. 4271cL3 4
						<b class='coo2'>43.025968061248584</b>35cL4v493 N1 3N <b class='coo7'>532v17Ud3</b>; L'35cL4v493 37 L4 724173 d35 35cL4v35 5<b class="coo2">1.</b>
						N7 <b class='coo8'>1N732d175</b><b class="coo2">7984902163361296</b>50U5 70U735 L3U25 f02M35. 4271cL3 10 70U73 P3250NN3 4 d2017, 3N PL31N3 394L173,
						4 c3 qU3 54 c4U53 5017 <b class='coo8'>3N73NdU3</b> 3qU1748L3M3N7 37 <b class='coo12'>PU8L1qU3M3N7</b> P42 UN <b class='coo9'>7218UN4L</b> 1Nd3P3Nd4N7 37 1MP42714L, qU1 d3c1d324, 5017 d3 535
						d20175 37 <b class='coo10'>08L194710N5</b>, 5017 dU 813N-f0Nd3 d3 70U73 <b class='coo10'>4ccU54710N</b> 3N M471323 P3N4L3 d121933 c0N723 3LL3. 4271cL3 21 1. 70U73 P3250NN3
						4 L3 d2017 d3 <b class='coo11'>P23Nd23</b> P427 4 L4 <b class='coo11'>PU8L1qU35</b> d3 50N P4Y5, 5017 d123c73M3N7, 5017 P42 L'1N732M3d14123 d3 23P2353N74N75
						L1823M3N7 ch01515. 2. 70U73 P3250NN3 4 d2017 4 4cc3d32, d4N5 d35 c0Nd1710N5 d'394L173, 4UX f0Nc710N5 PU8L1qU35 d3 50N P4Y5. 3. L4 v0L0N73
						dU P3UPL3 357<b class="coo3">48.736539142738536</b> <b class='coo9'>d123c710N d35 4ff41235</b> <b class='coo3'>1.3677733411949158</b>d3 L'4U702173 d35 P0Uv0125 PU8L1c5; c3773 v0L0N73 d017 5'3XP21M32
						P42 d35 3L3c710N5 h0NN3735 qU1 d01v3N7 4v012 L13U <b class='coo12'>P3210d1qU3M3N7</b>, 4U 5Uff2493 UN1v3253L 394L 37 4U v073 <b class='coo12'>53c237</b> 0U 5U1v4N7 UN3 P20c3dU23
						3qU1v4L3N73 455U24N7 L4 L183273 dU v073.
						<br><b class="text"> La il faut un input qui marche uniquement si on met la clé "312" et qui permet d'afficher 3 énigmes chaque énigme permet
							de trouver une partie du pastebin qui donne le flag.
							En sachant que la réponse de l'énigme 3 sera la première partie, la réponse de l'énigme 2 sera la troisième partie et la réponse de
							l'énigme 1 sera la deuxième partie. Le code donnera vers un pastebin avec le flag.
						</b>
					</p>
					<form class="password-form" method="post">
						<input class="code" type="text" name="name='codeC32'" placeholder="Key">
						<button type="submit" value="Submit">Submit</button>
					</form>
					<?php
				} else {
					echo '<a href="challenge3.php"><button>Try again.</button></a>';
				}
			}
			?>
		</div>
	</body>
</html>