<?
ob_start(); // ensures anything dumped out will be caught

/* Redirect to drupal | Author: Gavin Hull Date: 24082015
 * we use redirects to avoid php errors from main site and drupal
 * this page news.php is a menu item on the main site
 */
$url = 'news/'; // location of drupal main folder

// clear out the output buffer
while (ob_get_status()) 
{
    ob_end_clean();
}

// no redirect
header( "Location: $url" );
?>

