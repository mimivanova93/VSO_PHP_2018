<?php

$str=$_GET['string'];

$string_array=explode(',', $str);
$count=count($string_array);

$f_el = $string_array[0];
$len = strlen($f_el);
$elem = [$f_el[$len-1]];

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

$el_count = count($elem);
$elem[$el_count-1] = $elem[$el_count-1].$string_array[$count-1][0];

$num= implode('', array_unique(str_split(implode('', $elem))));
$split_str=str_split($num, 2);
$number=count($split_str);

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



