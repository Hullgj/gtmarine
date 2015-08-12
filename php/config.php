<?php

/* 
File to set stuff up like html <head> and <footer>
*/

$localhost = 'http://localhost/optimizr';
$dev_host = 'http://gtmarineoffshore.com/new';
$pro_host = 'http://gtmarineoffshore.com';

/* --- Production delete where_am_i.php and the conditional --- */
require_once('where_am_i.php');
$site_url = youAreHere();

// This conditional needs dev_host before pro_host, as pro_host
// contains part of dev_host
if (strpos($site_url, $dev_host) !== FALSE)
	$site_root = $dev_host;
elseif (strpos($site_url, $localhost) !== FALSE)
	$site_root = $localhost;
else $site_root = $pro_host;
/* --- Production set $site_root to $pro_host              --- */
//$site_root = $pro_host;

$_SERVER['DOCUMENT_ROOT'] = $site_root;
define('CSS', './app/src/css/');
define('JS', './app/src/js/');
define('IMG', './app/src/img/');
define('FAV', './app/src/favicons/');
define('FONTS', './app/src/fonts/');

define('PHP', './php/');
define('CTRL', './php/control');
define('MD', './php/model');
define('VU', './php/view');
define('CONSTRUCT', '/_construct/');

define('EN', './app/en/');
define('FR', './app/fr/');
define('DE', './app/de/');

include __DIR__.'/router.php';
require_once __DIR__.'/_base/getHead.php';

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