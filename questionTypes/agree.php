<?php
	function agree($varName) {
		require_once('makeButtons.php');
		$options = array(
			"Strongly Disagree",
			"Disagree",
			"Neutral",
			"Agree",
			"Strongly Agree"
			);
		$item = makeButtons($options,$varName);
		return $item;
	}

?>
