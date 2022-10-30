<?php

$alises = array(
	"\\TODO\\" => "<span style=\"color: red;\">TODO:</span>",
    "\\CAPITAL\\" => "<img loading=\"lazy\" src=\"images/icons/infa_capital.png\" alt=\"Capital of Infa\" title=\"Capital of Infa\" class=\"icon\">",
    "\\UNIT\\" => "<img loading=\"lazy\" src=\"images/icons/infa_unit.png\" alt=\"Unit of Infa\" title=\"Unit of Infa\" class=\"icon\">",
	"\\N\\" => "<img loading=\"lazy\" src=\"images/icons/launcher.png\" alt=\"Rocket Launcher\" title=\"Rocket Launcher\" class=\"icon\">",
	"\\B\\" => "<img loading=\"lazy\" src=\"images/icons/bomb_factory.png\" alt=\"Bomb Factory\" title=\"Bomb Factory\" class=\"icon\">",
	"\\S\\" => "<img loading=\"lazy\" src=\"images/icons/shield.png\" alt=\"Shield\" title=\"Shield\" class=\"icon\">",
	"\\P\\" => "<img loading=\"lazy\" src=\"images/icons/parliament.png\" alt=\"Parliament\" title=\"Parliament\" class=\"icon\">",
	"\\F\\" => "<img loading=\"lazy\" src=\"images/icons/factory.png\" alt=\"Factory\" title=\"Factory\" class=\"icon\">",
	"\\H\\" => "<img loading=\"lazy\" src=\"images/icons/harbor.png\" alt=\"Harbor\" title=\"Harbor\" class=\"icon\">",
	"\\FENCE\\" => "<img loading=\"lazy\" src=\"images/icons/fence.gif\" alt=\"Fence\" title=\"Fence\" class=\"icon\">",
	"\\WALL\\" => "<img loading=\"lazy\" src=\"images/icons/wall.gif\" alt=\"Wall\" title=\"Wall\" class=\"icon\">",
	"\\COASTAL\\" => "<img loading=\"lazy\" src=\"images/icons/coastal.gif\" alt=\"Coastal Defenses\" title=\"Coastal Defenses\" class=\"icon\">",
	"\\SURFACE_DEPOSIT\\" => "<img loading=\"lazy\" src=\"images/icons/surface_deposit.png\" alt=\"Surface Deposit\" title=\"Surface Deposit\" class=\"icon\">",
	"\\2\\" => "<img loading=\"lazy\" src=\"images/icons/dice_2.png\" alt=\"A die with a number '2' on it\" title=\"A die with a number '2' on it\" class=\"icon\">",

	// symbols
	"\\UNIT_CROSS\\" => "<img loading=\"lazy\" src=\"images/icons/cross_unit.png\" alt=\"Unit of The Cross\" title=\"Unit of The Cross\" class=\"icon\">",
);

function replace_aliases($content) {
	global $alises;

	foreach ($alises as $key => $value) {
		$content = str_replace($key, $value, $content);
	}

	return $content;
}

?>
