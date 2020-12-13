<?php
$str = "Hyper-Text-Markup-Language";
$array = explode("-", $str);
for ($i = 0; $i < count($array); $i++) {
  echo substr($array[$i], 0, 1);
}
