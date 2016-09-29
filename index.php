<!doctype html>
<html>
<head>
<title>Connect Four</title>
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
</head>

<body>

<?php

require_once 'src/start.php';


$game = new Game\Classes\ConnectFourGame();
$game->start();

?>
</body>
</html>
