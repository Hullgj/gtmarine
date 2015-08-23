<?php

echo getHead('en',['_main.min.css']);
?>
<div class="wrapper">
	<?php 

echo $nav->getNav('bootstrap','GT Marine Offshore',false);
	?>
	<div class="landing">
		<section class="container">
			<h1>Courses</h1>
			<article>
                <h2>Training above the standard</h2>
                <figure><img src="app/src/img/equations-maths.jpg" alt="Image mathematical equations written on a black sheet" /></figure>
                <figure><img src="app/src/img/ship-night.jpg" alt="Image large ship docked at port at night" /></figure>
            </article>
			<article>
				<h2>What training we provide</h2>
				<p>Marine and offshore companies are actively recruiting for various positions; at all levels of experience. The entry level position requires major upfront training and investment, on behalf of both the potential employee as well as the offshore employer. Government regulations and industry guidelines require a minimum of the basic level of safety and environmental training for all employees before they go into or embark on an offshore or onshore work environment.</p>
                <p>We have several accredited training and development programmes covering many aspects of criteria for jobs. Our classes range from one week to six weeks terms.</p>
				<a href="app/src/docs/GT-Courses.xls">Click here to download our course catalogue.</a>
			</article>
		</section>
	</div>

</div>
<?php
echo getFooter(['main.min.js']);
?>