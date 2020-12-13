<?php
$subject = $_POST["subject"];
$name = $_POST["name"];
$score = $_POST["score"];

$line = "$subject,$name,$score" . PHP_EOL;
file_put_contents("scores.csv", $line, FILE_APPEND | LOCK_EX);
header("Location: web_tr3.php");
