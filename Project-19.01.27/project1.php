<?php

$string_array=['abc','def','a', 'a', 'g', 'a', 'ghi'];
$count=count($string_array);

$f_el = $string_array[0];
$len = strlen($f_el);
$elem = [$f_el[$len-1]];

for($i=1;$i<$count-1;$i++){
	$el_count = count($elem);
	$s_len = strlen($string_array[$i]);
	if ($s_len == 1) {
		echo $s_len;
		$elem[$el_count-1] = $elem[$el_count-1].$string_array[$i][0];
	} else {
		$elem[$el_count-1] = $elem[$el_count-1].$string_array[$i][0];
		$elem[$el_count] = $string_array[$i][$s_len-1];
	}
}

$el_count = count($elem);
$elem[$el_count-1] = $elem[$el_count-1].$string_array[$count-1][0];


var_dump($elem);

