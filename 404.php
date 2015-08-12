<?php
require_once('php/config.php');
require_once('php/_base/getHead.php');

echo getHead('en',['_main.min.css']);
?>
<div class="wrapper">
<?php 

echo $nav->getNav('bootstrap','GT Marine Offshore',false);
?>
<div class="landing">
	<section class="container">
		<h1>ERROR 404</h1>
		<p>The page you were looking for was not found :(</p>
	</section>
</div>

</div>
<?php
echo getFooter(['app.js']);
?>