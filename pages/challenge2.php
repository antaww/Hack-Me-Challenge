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
    <div class="pageTitle">Challenge 2</div>
    <?php
    $expectedCode = 'CHALLENGE48H'; //cookie -> message -> image -> flag js -> morse -> binary -> code

    if (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] == 'SELECT+*+FROM+dolphin') {
        $host_name = 'db5011839211.hosting-data.io';
        $database = 'dbs9971177';
        $user_name = 'dbu5519438';
        $password = '26032000Alexis/';
        $link = new mysqli($host_name, $user_name, $password, $database); // Working on FTP only
        $sql = str_replace('+', ' ', $_SERVER['QUERY_STRING']);
        $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo sprintf("$sql = id: %s genre: %s weight: %s<br>", $row['id_animal'], $row['gender'], $row['weight']);
            }
        }
        ?>
        <div class="qr-code">
            <img class="amhg" src="amhg.png" alt="amhg">
            <img class="zsnd" src="zsnd.png" alt="zsnd">
            <img class="iefj" src="iefj.png" alt="iefj">
            <img class="dsqih" src="dsqih.png" alt="dsqih">
        </div>
        <a href="challenge3.php">Everything is right ?</a>
        <?php
    } else {
        if (!isset($_POST['codeC2'])) {
            echo '<form autocomplete="off" class="password-form" method="post">';
            echo '<label for="code">Enter code</label>';
            echo '<input class="code" autocomplete="off" type="password" name="codeC2" id="code">';
            echo '<button type="submit" value="Submit">Submit</button>';
            echo '</form>';
        } else {
            $enteredCode = $_POST['codeC2'];
            if ($enteredCode == $expectedCode) {
                echo 'I don' . "t" . 'remember my dolphin' . "'s" . 'weight?';
                echo '<img class="dolphin" src="dolphin.png" alt="dolphin">';
            } else {
                echo '<a href="challenge2.php"><button>Try again.</button></a>';
            }
        }
    }
    ?>
</div>
</body>
</html>


