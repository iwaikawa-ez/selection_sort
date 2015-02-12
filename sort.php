<?php
function selection_sort($data, $is_order_by_ascending) {
  $max = count($data) - 1;
  for ($a = 0; $a < $max; $a++) {
    for ($i = $a + 1; $i <= $max; $i++) {
      if (($is_order_by_ascending == true && $data[$a] > $data[$i]) || ($is_order_by_ascending == false && $data[$a] < $data[$i])) swap($data[$a], $data[$i]);
    }
  }
 return $data;
}

/*
function selection_sort($data, $is_order_by_ascending) {
  $max = count($data) - 1;
  if ($is_order_by_ascending == true) {
    for ($a = 0; $a < $max; $a++) {
      for ($i = $a + 1; $i <= $max; $i++) {
        if ($data[$a] > $data[$i]) {
          swap($data[$a], $data[$i]);
        }
      }
    }
  } else {
    for ($a = 0; $a < $max; $a++) {
      for ($i = $a + 1; $i <= $max; $i++) {
        if ($data[$a] < $data[$i]) {
          swap($data[$a], $data[$i]);
        }
      }
    }
  }
  return $data;
}
*/

function swap(&$x, &$y)
{
  list($x, $y) = array($y, $x);
}
