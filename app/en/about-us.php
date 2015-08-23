<?php

echo getHead('en',['_main.min.css']);
?>
<div class="wrapper">
	<?php 

echo $nav->getNav('bootstrap','GT Marine Offshore',false);
	?>
	<div class="landing">
		<section class="container">
			<h1>About us</h1>
			<article>
				<h2>Training consultancy for Oil &amp; Gas</h2>
                <figure><img src="app/src/img/marine-consultancy-meeting-learning.jpg" alt="Image Some people learning how to become qualified in marine life" /></figure>
			</article>
			<article>
				<h2>Who we are</h2>
				<p>GT Marine Offshore consultancy is an independent indigenous marine and offshore consultancy,  which specialises in technical marine consultancy and training for the Oil &amp; Gas industry. With solid increases in future demand in the offshore industry, we strive to set the standard in development and assurance of workforce competency through safety in the Oil &amp; Gas industry.</p>
				<p>Oil &amp; Gas is a complex and highly demanding environment, GT Marine Offshore consultancy strive to work to achieve its vision through the development and assurance of competency in the oil and gas industry.</p>
				<p><strong>Why choose us?</strong> Our team of consultants are experts in their various fields, who deliver their best to achieve our client's objectives.</p>
				<p>We offer a comprehensive range of solutions and consultancy services through our team of consultants; both local and foreign expertise which includes:</p>
				<ul>
					<li>Master Mariners</li>
					<li>Marine Engineers</li>
					<li>Naval Architects</li>
					<li>Subsea Engineers</li>
					<li>Drillers</li>
					<li>Mechanical, Civil &amp; Structural Engineers</li>
				</ul>
				<p><strong>Our mission</strong>: to become a leading partner in assuring work force competency through safety.<br><br>
					<strong>Our vision</strong>: to be a national leader in creating a safer place in the marine and offshore environment - through	our world leading assurance program, working standards and innovative practical solutions.<br><br>

					<strong>Our values</strong>: Accountable - Inspirational - Loyal - Proactive - Safe</p>
			</article>
		</section>
	</div>

</div>
<?php
echo getFooter(['main.min.js']);
?>