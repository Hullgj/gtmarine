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
			<article></article>
			<article>
				<h2>article</h2>
				<p>
					Marine and the Offshore companies are actively recruiting for various positions, at all levels of experience. The 
					entry level position requires the most upfront training and investment, on behalf of both the potential employee as 
					well as the offshore employer, Government regulations and industry guideline require a basic level of safety and 
					environmental training for all employees before they go into an offshore or onshore work environment. <br><br>

					We have several different courses ranging from One week to Six weeks program.
				</p>
				<a href="#">Click here to download our course catalogue.</a>
			</article>
		</section>
	</div>

</div>
<?php
echo getFooter(['main.min.js']);
?>