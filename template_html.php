<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php
		$year = date("Y");
		$tagH1 = "<h1>Тут должен находится заголок сайта</h1>";
		$tagTitle = "<title>Lesson_1</title>";
		echo $tagTitle;
	?>
</head>
<body>
	<?php
		echo $tagH1.$year;
	?>
</body>
</html>