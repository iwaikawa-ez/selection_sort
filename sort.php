<?php
 function selection_sort($data,$is_order_by_ascending){
  	$max = count($data) - 1;
    if($is_order_by_ascending == true){
      for($a = 0; $a < $max; $a++){
        for($i = $a + 1; $i <= $max; $i++){
  			  if($data[$a] > $data[$i]){
            list($data[$a],$data[$i]) = array($data[$i],$data[$a]);
          }
	  	  }
  	  }
    }else{
	    for($a = 0; $a < $max; $a++){
	  	  for($i = $a + 1; $i <= $max; $i++){
	  		  if($data[$a] < $data[$i]){
            list($data[$a],$data[$i]) = array($data[$i],$data[$a]);
	  	  	}
        }
      }
    }
    return $data;
  }
  print_r(selection_sort(array(7,5,10,1,3,2,6,8),true));
  print_r(selection_sort(array(7,5,10,1,3,2,6,8),false));
?>
