<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Warzone Digital Manual">
		<title>Warzone Manual</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="favicon.png">
	</head>

	<body class="document" style="visibility: hidden;">

		<?php

			require_once "aliases.php";

			$pages = explode("\n", trim(file_get_contents("pages.txt"), "\n "));
			$total = count($pages);
			$index = 0;

			foreach ($pages as $page) {

				$index ++;
				$name = pathinfo($page)["filename"];

				echo "<div class=\"page\" id=\"$name\">";
				echo replace_aliases(file_get_contents($page));
				echo "<div class=\"footer left\">Warzone Open Rules Manual © magistermaks " . date("Y") . "</div>";
				echo "<div class=\"footer right\">Page $index/$total</div>";
				echo "</div>";

			}

		?>

		<div id="source">
			<span>View source on</span> <a class="content-link" href="https://github.com/magistermaks">Github</a>
		</div>

	</body>
</html>
