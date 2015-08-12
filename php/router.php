<?php
$requestURI = explode('/', $_SERVER['REQUEST_URI']);
$scriptName = explode('/',$_SERVER['SCRIPT_NAME']);

require('nav.php');
//Main NAV, name your nav $nav, and indicate in the first value 'home' or the name of the landing page of your website

$nav = new Nav([
	'home' => 'home', 
	'about-us' => ['about-us','services','courses'],  
	'career' => 'career',
	'testimonial' => 'testimonial',
	'news' => 'news',
	'contacts' => 'contacts', 
	'client' => 'client']);
	
//Faster to do it this way:
$scriptNameSize = sizeof($scriptName);
for($i= 0;$i < $scriptNameSize;$i++)
{
	if ($requestURI[$i] == $scriptName[$i])
	{
		unset($requestURI[$i]);
	}
}

$pageRequest = array_values($requestURI);


//LIMITING USERS TO ONE SLASH

if (array_key_exists(1, $pageRequest)) {
	header('Location: ../404');
}

//SECURING PAGES
$safe = $nav->navItems;
function array_flatten($safe) { 
	if (!is_array($safe)) { 
		return FALSE; 
	} 
	$result = array(); 
	foreach ($safe as $key => $value) { 
		if (is_array($value)) { 
			$result = array_merge($result, array_flatten($value)); 
		} 
		else { 
			$result[$key] = $value; 
		} 
	} 
	return $result; 
}

if (!in_array($pageRequest[0], array_flatten($safe)) and $pageRequest[0] !== '') {
	include('404.php');
} 

//Loading scripts according to page name
if (!empty($pageRequest[0])) {
	foreach ($nav->navItems as $navItem => $item) {
		if (is_array($item)) {
			foreach ($item as $i){
				switch($pageRequest[0]) {
					case $i;
						$nav->navActive = $i;
						$title = ucfirst(str_replace('-',' ',$i));
						require_once('_base/getHead.php');
						include('app/en/'.$i.'.php');
						break;
				}
			}
		} else {
			switch($pageRequest[0]) {
				case $navItem;
					$nav->navActive = $navItem;
					$title = ucfirst(str_replace('-',' ',$navItem));
					require_once('_base/getHead.php');
					include('app/en/'.$navItem.'.php');
					break;
			}
		}
	}
} else {
	//Landing page
	$nav->navActive = $nav->navItems['home'];
	$title = ucfirst(str_replace('-',' ',$nav->navActive));
	require_once('_base/getHead.php');
	include('app/en/'.$nav->navActive.'.php');
}

?>