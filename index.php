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
<div>

	<?php
			for($i = 0; $i<count($database); $i++) {
		?>
		<hr>
		<h3>
			<?php
				echo $database[$i]['header'];
			?>
		</h3>
		<p>
			<?php
				echo $database[$i]['short_text'];
			?>
		</p>
	 <form action="about.php" method="GET">
		<?php echo '<a href="about.php?index=' . $i .'"'?> class="btn">Далее</a>
	</form>
	 <hr>
	 <?php
		} 
	?>
</div>
</body>
</html>