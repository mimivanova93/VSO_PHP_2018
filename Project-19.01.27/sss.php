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
	<div class="h3">
		<h3>Получавате масив от стрингове и вашата задача е да намерите най-малкия брой промени в знаците, необходими за всеки първи знак на стринг да бъде еднакъв с последния знак от предхождащия го стринг. Нямате право да променяте последователността на стринговете!</h3>
	</div>
	<div>
		<p class="para">Колко промени ще трябват:</p>
		<form method="get" action="project.php" class="form">
			<input type="text" name="string" placeholder="Enter string..."/>
			<input type="submit" name="submit" value="Check?"/>
		</form>
	</div>
</body>
</html>