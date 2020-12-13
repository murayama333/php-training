<?php
$scores = ["english" => [90, 72, 58],
           "math" => [80, 82, 78],
           "science" => [94, 66, 80]];

foreach ($scores as $key => $value) {
  echo $key . ":" . array_sum($value) . PHP_EOL;
}
