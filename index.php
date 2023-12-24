<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Warzone Digital Manual">
		<title>Warzone Manual</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<meta name="viewport" content="width=device-width, initial-scale=0.46">
		<link rel="icon" href="favicon.png">
	</head>

	<body class="document" style="visibility: hidden;">

		<?php

			require_once "aliases.php";

			$pages = [];
			$lines = explode("\n", trim(file_get_contents("pages.txt"), "\n"));
			$total = 0;
			$index = 0;

			foreach ($lines as $line) {
				
				$mode = substr($line, 0, 1);
				$path = substr($line, 2);

				if ($mode != 'P') $total += 1;

				$pages[] = [$mode, $path, $total];

			}

			foreach ($pages as $page) {

				list($mode, $path, $index) = $page;

				$name = pathinfo($path)["filename"];
				$class = "page";
				
				if ($mode == 'P') {
					 $class = "$class print-only";
				}

				echo "<div class=\"$class\" id=\"$name\">";
				echo replace_aliases(file_get_contents($path));

				if ($mode != 'P') {
					echo "<div class=\"footer left\">Warzone Open Rules Manual © magistermaks " . date("Y") . "</div>";
					echo "<div class=\"footer right\">Page $index/$total</div>";
				}

				echo "</div>";

			}

		?>

		<div id="source">
			<span>View source on</span> <a class="content-link" href="https://github.com/magistermaks/manual">Github</a>
		</div>

	</body>
</html>
