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
    $host_name = 'db5011839211.hosting-data.io';
    $database = 'dbs9971177';
    $user_name = 'dbu5519438';
    $password = '26032000Alexis/';

    $link = new mysqli($host_name, $user_name, $password, $database);

    $expectedCode = 'CHALLENGE48H'; //cookie -> message -> image -> flag js -> morse -> binary -> code

    if (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] == 'SELECT+*+FROM+dolphin') {
        $sql = str_replace("+", " ", $_SERVER['QUERY_STRING']);
        $result = $link->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "id: " . $row["id_animal"] . " genre: " . $row["gender"] . " " . $row["weight"] . "<br>";
            }
        }
    } else {
				echo 'What is my dolphin doing here ?';
			}

			echo '<img class="dolphin" src="dolphin.png" alt="dolphin">'
			?>
</div>
</body>
</html>


