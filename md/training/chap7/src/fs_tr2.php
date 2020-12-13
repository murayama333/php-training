<?php
$scores = [[90, 88, 80], [64, 72, 72], [90, 92, 94]];
$file = "score.csv";
//
// for ($i = 0; $i < count($scores); $i++) {
//   $score = $scores[$i];
//   $line = implode(",", $score);
//   file_put_contents($file, $line . PHP_EOL, FILE_APPEND);
// }


$handle = fopen($file, "w");
if ($handle === false) {
  die("File is not opened.");
}
for ($i = 0; $i < count($scores); $i++) {
  $score = $scores[$i];
  // $line = implode(",", $score);
  // fwrite($handle, $line . PHP_EOL);
  fputcsv($handle, $score);
}
fclose($handle);
