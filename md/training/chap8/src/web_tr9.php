<?php
$file = "../data/scores.csv";
$fp = fopen($file, "r");
$scores = [];
while (($line = fgetcsv($fp)) !== false) {
  $scores[] = $line;
}
fclose($fp);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP Sample</title>
</head>
<body>
  <h3>Scores</h3>
  <hr>
  <table border="1">
    <tr>
      <th>Subject</th>
      <th>Name</th>
      <th>Score</th>
    </tr>
    <?php for ($i = 0; $i < count($scores); $i++) { ?>
    <tr>
      <td><?php echo htmlspecialchars($scores[$i][0]); ?></td>
      <td><?php echo htmlspecialchars($scores[$i][1]); ?></td>
      <td><?php echo htmlspecialchars($scores[$i][2]); ?></td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>
