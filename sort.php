<?php
 function selection_sort($data, $is_order_by_ascending) {
  	$max = count($data) - 1;
    if ($is_order_by_ascending == true) {
      for ($a = 0; $a < $max; $a++) {
        for ($i = $a + 1; $i <= $max; $i++) {
  			  if ($data[$a] > $data[$i]) {
            swap($data, $a, $i);
          }
	  	  }
  	  }
    } else {
	    for ($a = 0; $a < $max; $a++) {
	  	  for ($i = $a + 1; $i <= $max; $i++) {
	  		  if ($data[$a] < $data[$i]) {
            swap($data, $a, $i);
	  	  	}
        }
      }
    }
    return $data;
  }

  function swap(&$data, $a, $i)
  {
    return list($data[$a], $data[$i]) = array($data[$i], $data[$a]);
  }
