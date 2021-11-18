<?php
	$content=file_get_contents('test.yaml');
	$array=yaml_parse($content);
	$menu=$array['menu'];

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Site Axel</title>
		<link rel="stylesheet" href="">
	</head>
<body>
<h1><?=$array['moi']['prenom']?></h1>
<?php
	echo "<ul>";
	foreach($menu as $item){
		echo "<li>$item</li>";
	}
	echo "<ul>";
?>
</body>
</html>