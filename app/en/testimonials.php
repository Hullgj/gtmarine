<?php
$file = 'testimonial';
require_once('php/config.php');

echo getHead('en',['_main.min.css']);
?>
<div class="wrapper">
<?php 

echo $nav->getNav('bootstrap','GT Marine Offshore',false);
?>
<div class="landing">
	<section class="container">
		<h1>Testimonials</h1>
	</section>
</div>

</div>
<?php
echo getFooter(['main.min.js']);
?>