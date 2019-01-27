<?php

// $string_array=['abc','def','e', 'e', 'g', 'e', 'ghi'];
$string_array=['abc','def','ghi'];
// $string_array=['abc','def','ssfv','segtbs','ss','ghi'];
$count=count($string_array);

$f_el = $string_array[0];
var_dump($f_el);
$len = strlen($f_el);
var_dump($len);
$elem = [$f_el[$len-1]];
var_dump($elem);

for($i=1;$i<$count-1;$i++){
	$el_count = count($elem);
	var_dump($el_count);
	$s_len = strlen($string_array[$i]);
	var_dump($s_len);
	if ($s_len == 1) {
		$elem[$el_count-1] = $elem[$el_count-1].$string_array[$i][0];
		var_dump($elem);
	} else {
		$elem[$el_count-1] = $elem[$el_count-1].$string_array[$i][0];
		$elem[$el_count] = $string_array[$i][$s_len-1];
		var_dump($elem);
	}
}

$el_count = count($elem);
$elem[$el_count-1] = $elem[$el_count-1].$string_array[$count-1][0];
var_dump($elem);

$num= implode('', array_unique(str_split(implode('', $elem))));
$split_str=str_split($num, 2);
$number=count($split_str);
// echo $number;

// var_dump($split_str);


// foreach ($elem as $key => $value) {
// 	// echo preg_replace('{(.)\1+}','$1',$value);
// 	$num= implode('', array_unique(str_split(implode('', $elem))));
// 	var_dump($num);
// }

// foreach ($elem as $string){
//     $chars = preg_split('//u', $string, -1, PREG_SPLIT_NO_EMPTY);
//     foreach ($chars as $index => $char){
//         if (isset($buffer[$char])){
//             unset($chars[$index]);
//         }
//         $buffer[$char] = true;
//     }
//     $implo=implode('', $chars);
//     var_dump($implo);
//     // echo strlen($implo);
// }

