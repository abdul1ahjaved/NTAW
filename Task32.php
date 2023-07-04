<?php
$row = 1;
$maxRows = 8;

while ($row <= $maxRows) {
  $col = 1;
  while ($col <= $row) {
    echo "*";
    $col++;
  }
  echo "<br>";
  $row++;
}
?>
