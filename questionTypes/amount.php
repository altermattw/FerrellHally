<?php
	function amount($varName) {
		require_once('makeButtons.php');
		$options = array(
			"not at all",
			"a little",
			"an average amount",
			"a lot",
			"an exceptional amount",
			);
		$item = makeButtons($options,$varName);
		return $item;
	}

?>
