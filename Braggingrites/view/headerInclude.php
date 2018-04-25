<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>
		<?php echo $title; ?>
	</title>
    <link rel="stylesheet" href="../css/menu.css" />
    <link rel="stylesheet" href="../css/main.css" />
	<script src="../js/jquery-2.1.3.js"></script>
	<script src="../js/main.js"></script>
</head>
<body class="horizontalMenu">
	<div id="wrapper">
		<header>
			
			<?php
				$current_dir = '../images';
				$dir = opendir($current_dir);
				while(false !== ($file = readdir($dir))){
					//strip out the two entries of . and ..
					if($file != "." && $file != ".."){
						$logoArray[] = $file;
					}
				}
				closedir($dir);
				$logo1 = "url('../images/" . $logoArray[array_rand($logoArray)] . "')";
				$logo2 = "url('../images/" . $logoArray[array_rand($logoArray)] . "')";
			?>				
			<section id="headleft" style="background-image: <?php echo $logo1 ?>">
			</section>
			<section id="headmiddle" class="clickable">
				Treasure Coast Breweries
			</section>
			<section id="headright" style="background-image: <?php echo $logo2 ?>">
			</section>
			<div class="clearable"></div>
		</header>
		<nav>
			<?php
				include '../view/navInclude.html';
			?>
		</nav>
		<section id="main">