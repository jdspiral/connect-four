<!doctype html>
<html>
<head>
<title>Connect Four</title>

</head>

<body>

<?php

require 'src/classes/ConnectFourGame.php';

$game = new ConnectFourGame();
$game->start();

?>
</body>
</html>
