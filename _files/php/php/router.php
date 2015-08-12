<?php
$requestURI = explode('/', $_SERVER['REQUEST_URI']);
$scriptName = explode('/',$_SERVER['SCRIPT_NAME']);

for($i= 0;$i < sizeof($scriptName);$i++)
{
    if ($requestURI[$i] == $scriptName[$i])
    {
	  unset($requestURI[$i]);
    }
}

$pageRequest = array_values($requestURI);
$navItems = ['home','about-us','contacts','clients','testimonials','career'];

if(!in_array($pageRequest[0], $navItems, true)) {
    
    header('Location: 404.php'); 

} else {
    foreach ($navItems as $navItem) {
	  switch($pageRequest[0]) {
		case $navItem;
		    $print = '<p>You selected ' .$navItem.'</p>';
		    $title = ucfirst($navItem);
		    break;

	  }
    }
}

/*
switch($pageRequest[0]) {

	case 'home' :
		echo 'You entered pageRequest: '.$pageRequest[0];
		break;
	case 'about-us' :
		include('about-us.php');
		break;
	case 'clients' :
		echo 'You entered pageRequest: '.$pageRequest[0];
		break;
	case 'career' :
		echo 'You entered pageRequest: '.$pageRequest[0];
		break;
	case 'testimonials' :
		echo 'You entered pageRequest: '.$pageRequest[0];
		break;

	default:
		echo '404.php';
		break;
}

*/
?>