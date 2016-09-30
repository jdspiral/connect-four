<!doctype html>
<html>
<head>
<title>Connect Four</title>
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="resources/js/scripts.js"></script>
</head>

<body>

<?php

require_once 'src/start.php';


$game = new Game\Classes\ConnectFourGame();
$game->start();

?>
</body>
</html>
