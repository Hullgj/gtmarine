<?php

class Nav {
	public $navItems;
	public $navActive;

	function __construct($navItems) {
		$this->navItems = $navItems;
	}

	function setNavActive($navActive) {
		$this->navActive = $navActive;
	}

	function getNavActive() {
		return $navActive;
	}

	public function getNav($navType, $brand = 'brand', $anchor = false, $classes = array()) {

		if ($navType == 'bootstrap')
		{
			$printNav = '<nav class="navbar navbar-default';

			if(isset($classes)) {
				foreach ($classes as $class) {
					$printNav .= ' ' . $class;
				}
			}

			$printNav .= '">'."\n";
			$printNav .= '<div class="container-fluid">'."\n";
			$printNav .= '<div class="navbar-header">'."\n";
			$printNav .= '<button type="button" id="navbar-button" class="navbar-toggle dropdown-toggle collapsed">'."\n";
			$printNav .= '<span class="sr-only">Toggle navigation</span>'."\n";
			$printNav .= '<span class="icon-bar"></span>'."\n";
			$printNav .= '<span class="icon-bar"></span>'."\n";
			$printNav .= '<span class="icon-bar"></span>'."\n";
			$printNav .= '</button>'."\n";
			$printNav .= '<a class="navbar-brand" href="' . $_SERVER['DOCUMENT_ROOT'] .'">' . $brand . '</a>'."\n";
			$printNav .= '</div>'."\n";
			$printNav .= '<div class="scroll-bar collapse navbar-collapse navbar-menu" id="navbar">'."\n";
			$printNav .= '<ul class="nav navbar-nav navbar-right">'."\n";

			foreach($this->navItems as $menu => $parent) {
				$active = ($menu == $this->navActive ? ' class="nav-active"':'');
				$sharp = ($anchor == true ? '#':'');
				if(!is_array($parent)) {
					$printNav .= '<li><a href="'. $sharp . strtolower(str_replace(' ','-',$menu)).'"'.$active.'>' . str_replace('-',' ',$menu) . '</a></li>'."\n";
				} elseif (is_array($parent)) {
					$printNav .= '<li class="dropdown">'."\n".'
          <a href="#" id="'.$menu.'" class="dropdown-toggle">'. str_replace('-',' ',$menu) .' <span class="caret"></span></a>'."\n".'
          <ul class="dropdown-menu">'."\n";

					foreach ($parent as $child) {
						$printNav .= '<li><a href="'.$child.'">'.str_replace('-',' ',$child).'</a></li>'."\n";
					}
					$printNav .= "</ul>\n</li>\n";
				}
			}

			$printNav .= '</ul>'."\n";
			$printNav .= '</div><!-- /.navbar-collapse -->'."\n";
			$printNav .= '</div><!-- /.container-fluid -->'."\n";
			$printNav .= '</nav>'."\n";

			return $printNav;

		} 
		elseif ($navType == 'custom') 
		{

			//Get Menu output as li, with active/current page feature.

			foreach ($this->navItems as $item) {
				$active = ($item == $this->navActive ? ' class="nav-active"':'');
				$sharp = ($anchor == true ? '#':'');
				$printNav .= '<li><a href="'. $sharp . strtolower(str_replace(' ','-',$item)) .'"'.$active.'>' . str_replace('-',' ',$item) . '</a></li>'."\n";
			}
		}
	}
}