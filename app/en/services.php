<?php

echo getHead('en',['_main.min.css']);
?>
<div class="wrapper">
	<?php 

echo $nav->getNav('bootstrap','GT Marine Offshore',false);
	?>
	<div class="landing">
		<section class="container">
			<h1>Services</h1>
			<article>
                <h2>Covering best practice for optimal experience</h2>
                <figure><img src="app/src/img/services-vessels.jpg" alt="Image high speed vessel cruising through the blue sea" /></figure>

			</article>
			<article>
				<h2>What we do</h2>
				<p>We offer a comprehensive range of solution and consultancy services through our team of experienced consultants; both local and foreign expertise.</p>
                <p>Our services include:</p>
                <h3>Training</h3>
                <p>Focusing on people</p>
                <h3>Recruitment/ Job Placement</h3>
                <p>Getting the right people for the right job.</p>
                <h3>Vessel Chartering</h3>
                <p>Taking crews for voyages from load to discharge port.</p>
                <h3>Technical Consultancy &amp; Project Management Services</h3>
                <p>Minimizing the technical gaps and business risks at every stage of a project.</p>
                <h3>Marine and Offshore Management Services</h3>
                <p>Improving your operation excellence through strong commitment to safety and environmental aspects</p>
                <h3>Drilling Optimization</h3>
                <p>Management of hydraulics, maintaining drilling equipment, providing effective hole cleaning according to best practice.</p>
                <h3>Surveys</h3>
                <p>An experts' look on the matter.</p>
                <h3>Incident Investigations</h3>
                <p>Understanding the root causes of operational excellence.</p>
			</article>
		</section>
	</div>

</div>
<?php
echo getFooter(['main.min.js']);
?>