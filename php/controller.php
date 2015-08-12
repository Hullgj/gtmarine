<?php

class Controller {

	public function MakeMenu($items, $level = 0) {
		$ret = "";
		$ret .= sprintf("<li class='dropdown'><ul class='dropdown-menu'>\n");
		foreach ($items as $item => $subitems) {
			if (!is_numeric($item)) {
				$ret .= sprintf("<li><a href=''>%s</a>", $item);
			}
			if (is_array($subitems)) {
				$ret .= "\n";
				$ret .= $this->MakeMenu($subitems, $level + 1);
			} else if (strcmp($item, $subitems)){
				$ret .= sprintf("<li><a href=''>%s</a>", $subitems);
			}
			$ret .= "</li>\n";
		}
		$ret .= "</ul></li>\n";
		return($ret);
	}

	
	//print_r($this->menu);

	//echo MakeMenu($this->menu);

}


