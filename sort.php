<?php
/*
 function selection_sort($data,$is_order_by_ascending){
  	$max = count($data) - 1;

    if($is_order_by_ascending == true){
      for($a = 0; $a < $max; $a++){
        for($i = $a + 1; $i <= $max; $i++){
  			  if($data[$a] > $data[$i]){
            swap($a,Si);
          }
	  	  }
  	  }
    }else{
	    for($a = 0; $a < $max; $a++){
	  	  for($i = $a + 1; $i <= $max; $i++){
	  		  if($data[$a] < $data[$i]){
	  			  swap($a,$i);
	  	  	}
        }
      }
    }
    return $data;
  }
*/

  $x = 10;
  $y = 20;

  function swap($x,$y){
    return array($y,$x);
  }

  list($x,$y) = swap($x,$y);
  echo "{$x},{$y}\n";

/*
  print_r(selection_sort(array(7,5,10,1,3,2,6,8),true));
  print_r(selection_sort(array(7,5,10,1,3,2,6,8),false));
*/
?>
