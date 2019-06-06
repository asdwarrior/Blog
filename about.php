<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<?php 
		include 'db.php';
	?>
</head>
<body>
	<h3>
		<?php 
			echo $database[$_GET['index']
]['header']
		?>
		</h3>
		<p>
		<?php 
			echo $database[$_GET['index']
]['main_text']
		?>
		</p>
		<?php 
			echo '<img src="' . $database[$_GET['index']
]['image'] . '">'
		?>
</body>
</html>