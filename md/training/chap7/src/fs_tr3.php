<?php
$file = "score.csv";

$lines = file($file, FILE_IGNORE_NEW_LINES);
$scores = [];
foreach ($lines as $line) {
  $score = explode(",", $line);
  $scores[] = $score;
}

# print_r($scores);

$total = 0;
for ($i = 0; $i < count($scores); $i++) {
  $score = $scores[$i];
  for ($j = 0; $j < count($score); $j ++) {
    $total = $total + $score[$i];
  }
}

echo $total . PHP_EOL;
