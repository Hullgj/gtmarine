<?php

function getHead($lang = 'en', $styles = array(), $scripts = array(), $dataSpy = 0, $openGraph = array()) {

	global $title;
	global $descr;
	global $favicons;

	$spy = ($dataSpy !== 0 ? ' data-spy="scroll" data-target="#main-menu"' : '');


	$printHead = '<!DOCTYPE html>'."\n";
	$printHead .= '<html lang="' . $lang . '">'."\n";
	$printHead .= '<head>'."\n";
	$printHead .= '<meta charset="UTF-8">'."\n";
	$printHead .= '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">'."\n";
	$printHead .= '<title>'.$title.' • GT Marine Offshore</title>'."\n";
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
		foreach ($scripts as $script) {
			$printHead .= '<script src="'.JS.$script.'"></script>'."\n";
		}
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
	$printHead .= '<body'.$spy.'>'."\n";

	return $printHead;
}