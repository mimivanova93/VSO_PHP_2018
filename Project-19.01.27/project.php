<?php

// $string_array=$_GET['string'];

$string_array=['abc','def','ghi'];


$count=count($string_array);

for($i=0;$i<=$count;$i++){
	$new_elem=str_split($string_array[$i]);
		
}

var_dump($new_elem);

