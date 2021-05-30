<?php

$MyArray = array(1, 10, 23, 50, 4, 9, -4);
$n = sizeof($MyArray); 
echo "aray yang asli \n";
PrintArray($MyArray, $n);

function insertionsort(&$Array, 
$n) {
  for($i=0; $i<$n; $i++) {
    $curr = $Array[$i];
    $j = $i - 1;
    while($j >= 0 && $curr < $Array[$j]) {
      $Array[$j + 1] = $Array[$j];
      $Array[$j] = $curr;
      $j = $j - 1;
    }
  }
}

function PrintArray($Array, $n) { 
  for ($i = 0; $i < $n; $i++) 
    echo $Array[$i]." "; 
  echo "\n";
} 

insertionsort($MyArray, $n);
echo "\n yang sudah di Sorted  Array\n";
PrintArray($MyArray, $n);
?>
