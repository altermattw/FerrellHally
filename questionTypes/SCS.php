<?php
	function SCS($varName) {
		require_once('makeButtons.php');
		$options = array(
			"Not at all like me",
			"A little like me",
			"Somewhat like me",
			"Mostly like me",
			"Very much like me"
			);
		$item = makeButtons($options,$varName);
		return $item;
	}

?>
