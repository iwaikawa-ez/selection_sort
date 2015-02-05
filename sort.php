<?php
  $a = 10;
  $b = 20;

  function swap($a,$b){
    return array($b,$a);
  }

  list($a,$b) = swap($a, $b);
  echo "{$a},{$b}\n";

/*
  function swap($data[$a],$data[$i]){
      $data2[$a] = $data[$i];
      $data2[$i] = $data[$a];

      return $data2();
    }



  function swap($a,$i){
	  $x = $data[$a];
		$data[$a] = $data[$i];
		$data[$i] = $x;
  }

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

  print_r(selection_sort(array(7,5,10,1,3,2,6,8),true));
  print_r(selection_sort(array(7,5,10,1,3,2,6,8),false));
*/

?>
