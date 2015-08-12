<?php
require('Mobile_Detect.php');
$mobile = new Mobile_Detect;

//PATH Setup
//Enter your domain name, without / at the end
$mediamatique = 'http://www.mediamatique.ch/~tpi2015/jhull';
$localhost = 'http://localhost/optimizr';
$domainName = $localhost;
define('CSS', $domainName . '/app/src/css/');
define('JS', $domainName . '/app/src/js/');
define('IMG', $domainName . '/app/src/img/');
define('FAV', $domainName . '/app/src/favicons/');
define('FONTS', $domainName . '/app/src/fonts/');

define('PHP', $domainName . '/php/');
define('CTRL', $domainName . '/php/control');
define('MD', $domainName . '/php/model');
define('VU', $domainName . '/php/view');

define('EN', $domainName . '/app/en/');
define('FR', $domainName . '/app/fr/');
define('DE', $domainName . '/app/de/');

//ENTER THE PROJECT'S TITLE AND DESCRIPTION (SEO)

//FAVICONS
//go to realfaviconsgenerator.com
//Paste code generated from the website, careful with relative links

$favicons = '';

/*
ARGUMENTS EXPLANATION
$lang: define the language in the html tag
$styles: define the stylesheets used for the project
$scripts: add scripts that need to fit in the head
$dataSpy: for OnePage websites, enable this to 1 so the navigation will follow your scroll
*/

function getHead($lang = 'en', $styles = array(), $scripts = array(), $dataSpy = 0, $openGraph = array()) {

	//$dataspy accepted values: -inf ; -1 | 1 ; + inf

	global $title;
	global $descr;
	global $favicons;

	if ($dataSpy !== 0 ) {
		$spy = ' data-spy="scroll"';
		$scroll = ' data-target="#main-menu"';
	} else {
		$spy = '';
		$scroll = '';
	}

	$printHead = '<!DOCTYPE html>'."\n";
	$printHead .= '<html lang="' . $lang . '">'."\n";
	$printHead .= '<head>'."\n";
	$printHead .= '<meta charset="UTF-8">'."\n";
	$printHead .= '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">'."\n";
	$printHead .= '<title>'.$title.'</title>'."\n";
	$printHead .= '<meta name="description" content="' . $descr . '">'."\n";
	//FAVICONS
	$printHead .= $favicons;
	//CSS
	$printHead .= '<!-- CSS -->'."\n";
	foreach ($styles as $style) {
		$printHead .= '<link rel="stylesheet" href="'.CSS.$style.'">'."\n";
	}

	//JS integration (maps...)
	if (empty($scripts)) {
		$printHead .= "\n";
	} else {
		$printHead .= '<!-- JS -->'."\n";
	}
	foreach ($scripts as $script) {
		$printHead .= '<script src="'.$script.'"></script>'."\n";
	}
	$printHead .= '';
	//OpenGraph
	foreach ($openGraph as $tag => $og) {
		$printHead .= '<meta property="og:'.$tag.'" content="'.$og.'" />'."\n";
	}
	$printHead .= '<!--[if IE]>
<script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
<![endif]-->'."\n";
	$printHead .= '</head>'."\n";
	$printHead .= '<body'.$spy .$scroll.'>'."\n";

	return $printHead;
}

function getNav($navType, $brand = 'brand', $items = array(), $anchor = false, $classes = array(), $path = 'en') {
	global $file;
	/*
	THREE NAV TYPES:
	bootstrap (generates the default bootstrap framework nav)
	offcanvas (generates a bootstrap-compatible menu that goes offcanvas in mobile size)
	custom (generates a simple navigator, with options to add custom classes)

	FUNCTION ARGUMENTS explanation:
	$navType: choose nav type according to descriptions above
	$brand: add the client's name (COMPULSORY)
	$items: add the menu items (always insert "home" or something that links back to index.php -- trying to find a workaround)
	$path: add the constant path relative to the filetype (see constants above)
		: CSS
		: JS
		: IMG
		: FAV
		: EN
		: DE
		: FR
	$classes: add custom css classes to the navbar

	Example: echo getNav('bootstrap','Brand',array('Home','About Us','Projects','Contact'), array('main-menu'))
	*/

	/*
	In case of multiple language support, use this to point to files located in a different folder
	Example:
	$path = 'en'
	<a href="'.$pathFr.'index.php>Switch to french</a>
	*/
	if ($path == 'en') {
		$path = EN;
		$pathFr = FR;
		$pathDe = DE;
	}
	if ($path == 'fr') {
		$path = FR;
		$pathEn = EN;
		$pathDe = DE;
	}
	if ($path == 'de') {
		$path = DE;
		$pathEn = EN;
		$pathFr = FR;
	}


	if ($navType == 'bootstrap') {
		$printNav = '<nav class="navbar navbar-default';

		foreach ($classes as $class) {
			$printNav .= ' ' . $class;
		}

		$printNav .= '">'."\n";
		$printNav .= '<div class="container-fluid">'."\n";
		$printNav .= '<div class="navbar-header">'."\n";
		$printNav .= '<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">'."\n";
		$printNav .= '<span class="sr-only">Toggle navigation</span>'."\n";
		$printNav .= '<span class="icon-bar"></span>'."\n";
		$printNav .= '<span class="icon-bar"></span>'."\n";
		$printNav .= '<span class="icon-bar"></span>'."\n";
		$printNav .= '</button>'."\n";
		$printNav .= '<a class="navbar-brand" href="' . $path .'">' . $brand . '</a>'."\n";
		$printNav .= '</div>'."\n";
		$printNav .= '<div class="scroll-bar collapse navbar-collapse" id="bs-example-navbar-collapse-1">'."\n";
		$printNav .= '<ul class="nav navbar-nav navbar-right">'."\n";

		foreach ($items as $item) {
			$active = ($item == $file ? ' class="nav-active"':'');
			$sharp = ($anchor == true ? '#':'');
			$php = ($anchor == true ? '':'.php');
			$printNav .= '<li><a href="'. $sharp . strtolower(str_replace(' ','-',$item)) . $php .'"'.$active.'>' . $item . '</a></li>'."\n";
		}

		$printNav .= '</ul>'."\n";
		$printNav .= '</div><!-- /.navbar-collapse -->'."\n";
		$printNav .= '</div><!-- /.container-fluid -->'."\n";
		$printNav .= '</nav>'."\n";

		return $printNav;
	} elseif ($navType == 'offcanvas') {

		$printNav = '<a href="#" class="open-panel"><i class="fa fa-list-ul fa-2x"></i></i></a>'."\n";
		$printNav .= '<nav class="nav navbar top-navbar';

		foreach ($classes as $class) {
			$printNav .= ' ' . $class;
		}

		$printNav .= '">'."\n";
		$printNav .= '<a href="#" class="close-panel"><i class="fa fa-times fa-2x"></i></a>'."\n";
		$printNav .= '<div class="navbar-header">'."\n";
		$printNav .= '<ul class="nav nav-justified text-center menu">'."\n";
		$printNav .= '<li><a class="brand" href="'. $path .'">'.$brand.'</a></li>'."\n";

		foreach ($items as &$item) {
			if ($item == $file) {
				$active = ' class="nav-active"';
			} else {
				$active = '';
			}
			$printNav .= '<li><a href="'. $file .'.php#' . strtolower(str_replace(' ','-',$item)) .'">' . $item . '</a></li>'."\n";
		}

		$printNav .= '</ul>'."\n";
		$printNav .= '</nav>'."\n";

		return $printNav;
	} elseif ($navType = 'custom') {
		$printNav = '<nav class="';
		foreach ($classes as $class) {
			$printNav .= ' ' . $class;
		}
		$printNav .= '">'."\n";
		$printNav .= '<ul>'."\n";
		$printNav .= '<li><a class="brand" href="'. $path .'">'.$brand.'</a></li>'."\n";

		foreach ($items as &$item) {
			if ($item == $file) {
				$active = ' class="nav-active"';
			} else {
				$active = '';
			}
			$printNav .= '<li><a href="'. $path . strtolower(str_replace(' ','-',$item)) .'.php">' . $item . '</a></li>'."\n";
		}

		$printNav .= '</ul>'."\n";
		$printNav .= '</nav>'."\n";
	}
}

//CLASS NAV -> output the infos directly in other navs (inside a page for example)
class Nav {
	//get the menu elements:
	public $items = array();


	function __construct($items) {
		$this->items = $items;

	}

	function __destruct() {}


	function setItems($items) {
		$this->items = $items;
	}

	function setUrl($url) {
		$this->url = $url;
	}

	function getItems() {
		return $items;
	}

	function getUrl() {
		return $url;
	}
}

/*
FOOTER

In order to add custom scripts, write as arguments the filenames. The JS constant will directly point out the current folder.
Example: echo getFooter('jquery-2.1.1.min.js','bootstrap.min.js', 'script.js');
*/

function getFooter($scripts = array(), $html = array()) {

	$printFooter = '';
	foreach ($html as $h) {
		$printFooter .= $h."\n";
	}

	foreach ($scripts as $script) {
		$printFooter .= '<script src="'. JS . $script . '"></script>'."\n";

	}
	$printFooter .= '</body>'."\n";
	$printFooter .= '</html>'."\n";

	return $printFooter;
}

//Other functions
//login.php: check if checkbox is checked.
