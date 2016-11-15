<?php
	function PSS($varName) {
		require_once('makeButtons.php');
		$options = array(
			"Never",
			"Almost never",
			"Sometimes",
			"Fairly often",
			"Very often"
			);
		$item = makeButtons($options,$varName);
		return $item;
	}

?>
