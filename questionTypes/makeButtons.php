<?php

	function makeButtons($options,$varName) {
		// $options is an Array of response options, ordered from HIGHEST to LOWEST
		// $varName is the identifier for this question (e.g., "ATW05")
		$item = '<div class="btn-group-vertical" data-toggle="buttons" role="group">'.PHP_EOL;
		for($i=0;$i<count($options);$i++) {
			$val=count($options)-$i;
			$item.= '<label class="btn btn-primary">'.PHP_EOL;
			$item.= '<input type="radio" name="'.$varName.'" value="'.$val.'" autocomplete="off">';
			$item.= $val.'. '.trim($options[$val-1]).'</label>'.PHP_EOL;
		}
		$item.='</div>';
		return $item;
	}

?>
