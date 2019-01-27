<?php

$str=$_GET['string'];

$string_array=explode(',', $str);
$count=count($string_array);
//we get the string with a form and then explode() it in an array so we can count() it

$f_el = $string_array[0];
$len = strlen($f_el);
$elem = [$f_el[$len-1]];
//after the count() we make a new variable so we can save the first string of the array in it, after that we strlen() the string and in $elem we save the last letter

for($i=1;$i<$count-1;$i++){
	$el_count = count($elem);
	$s_len = strlen($string_array[$i]);
	if ($s_len == 1) {
		$elem[$el_count-1] = $elem[$el_count-1].$string_array[$i][0];
	} else {
		$elem[$el_count-1] = $elem[$el_count-1].$string_array[$i][0];
		$elem[$el_count] = $string_array[$i][$s_len-1];
	}
}
//with the for() cycle we go trough the array again and save the other first and last letters, so we can change them later

$el_count = count($elem);
$elem[$el_count-1] = $elem[$el_count-1].$string_array[$count-1][0];
//here we count() again the $elem and save the final changes

$num= implode('', array_unique(str_split(implode('', $elem))));
$split_str=str_split($num, 2);
$number=count($split_str);
//$num variable makes the string into an array so with the array_unique() we can "delete" the repeating letters and leave the "unique". After that we split them into parts with two letters and with count() give the final answer 

?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<title>Project</title>
</head>

<body>
	<div class="time">
		<p>Current date and time: <?php $date = date('Y/m/d H:i'); echo $date; ?></p>
	</div>
	<div class="h1">
		<h1>Project: StringChainReplacements</h1>
	</div>
	<div>
		<p class="text">Answer:</p>
	</div>
	<div>
		<p class="answer"><?php echo $number; ?></p>
	</div>
</body>
</html>



