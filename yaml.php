<!DOCTYPE html>
<html>
	<head>
		<title>Axel site</title>
		<link rel="stylesheet" href="">
	</head>
<body>
<?php
	$content=file_get_contents('test.yaml');
	$menu=yaml_parse($content)['menu'];
	echo "<ul>";
	foreach($menu as $item){
		echo "<li>$item</li>";
	}
	echo "</ul>";

?>
</body>
</html>