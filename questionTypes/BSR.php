<?php
	function BSR($varName) {
		require_once('makeButtons.php');
		$options = array(
			"never",
			"once per week",
			"2-3 times per week",
			"daily",
			"more than once per day"
			);
		$item = makeButtons($options,$varName);
		return $item;
	}

?>
