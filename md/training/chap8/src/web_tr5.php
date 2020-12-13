<?php
$name = $_POST["name"];
$subject = $_POST["subject"];
$score = $_POST["score"];

$line = "$subject,$name,$score";
file_put_contents("scores.csv", $line, FILE_APPEND | LOCK_EX);
header("Location: web_tr3.php");