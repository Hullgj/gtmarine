<?php

$pathCss = '../css/';
$pathJs = '../js/';

function getCss($css = array()) {
	$printCss = "<!-- CSS -->\n";
	foreach($css as $style) {
		$printCss .= "<link rel=\"stylesheet\" href=\"$pathCss $style\">\n";
	}
	echo $printCss;
}

function getJs($js = array()) {
	$printJs = '<!-- JS -->'."\n";
	foreach($js as $script) {
		$printJs .= '<script src="'.$pathJs.$script.'" type="text/javascript"></script>'."\n";
	}
}

?>