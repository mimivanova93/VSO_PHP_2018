<?php

// $string_array=$_GET['string'];

// $string_array=['abc','def','ghi'];


// $count=count($string_array);

// for($i=0;$i<=$count;$i++){
// 	$new_elem=str_split($string_array[$i]);
// 	$len=count($new_elem);
// 	$last=$new_elem[$len-1];
// 	$first=$new_elem[0];
// 	if()
// }

$string_array=['abc','def','ghi'];
$count=count($string_array);
for($i=0;$i<$count;$i++){
	$new_elem=str_split($string_array[$i]);
	$new_elem2=str_split($string_array[$i-1]);
	$len=count($new_elem);
	$last=$new_elem[$len-1];
	$first=$new_elem2[0];
	if($i>0){
		$last=$first;
		//var_dump($string_array[$i]);
	}
	var_dump($last);
}

