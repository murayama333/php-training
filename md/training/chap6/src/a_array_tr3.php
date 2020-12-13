<?php
$cities = [
            "Japan" => ["Tokyo", "Osaka", "Nagoya"],
            "England" => ["London", "Birmingham", "Glasgow"],
            "France" => ["Paris", "Marseille", "Lyon"],
          ];

foreach ($cities as $key => $value) {
  if ($key === "England") {
    for ($i = 0; $i < count($value); $i++) {
      echo $value[$i] . PHP_EOL;
    }
  }
}