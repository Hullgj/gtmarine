<?php

echo getHead('en',['_main.min.css']);
?>
<div class="wrapper">
	<?php 

echo $nav->getNav('bootstrap','GT Marine Offshore',false);
	?>
	<div class="landing">
		<section class="container">
			<h1>Career</h1>
			<article>
                <figure><img src="app/src/img/on-site-inspections.jpg" alt="Image two engineers inspecting a document on site of a gas and oil field" /></figure>
			</article>
			<article>
                <h2>When you will progress</h2>
				<h3>Are you looking for a career in the Oil &amp; Gas industry?</h3>
                <h3>Would you like to work on an oil rig?</h3>
                <p>Well, look no further, get the training, basic qualifications in the UK, Europe, USA and Asia and Earn and you could end up earning from <strong>$250 to $1500 per/day</strong>.</p>
                <p>We have a bank of courses ranging from one week to six-month programmes.</p>
                <p>Whatever your need we will work with you using our wealth of experience to structure an effective training programme/ course to facilitate your employment in the Oil &amp; Gas industry.</p>
                <p>To get started, give us a call; speak to one of our experienced consultants and we will do the rest.<br />Tel: xxxxxxxxxxxxxx, xxxxxxxxxxxxx</p>
			</article>
		</section>
	</div>

</div>
<?php
echo getFooter(['main.min.js']);
?>