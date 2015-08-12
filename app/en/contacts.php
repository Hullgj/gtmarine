<?php

echo getHead('en',['_main.min.css']);
?>
<div class="wrapper">
	<?php 

echo $nav->getNav('bootstrap','GT Marine Offshore',false);
	?>
	<div class="landing">
		<section class="container">
			<h1>Contacts</h1>
			<article>
				<h2>Find us.</h2>
				<p>
					Insert Google Map stuff here.

				</p>
				<iframe width="100%" height="450" frameborder="0" style="border:0"
						  src="https://www.google.com/maps/embed/v1/place?q=61+Rimsdale+Drive,+Manchester+M400GN,+United+Kingdom&key=AIzaSyCbZ8ZIiV0odrf2ihYsfMeGBCbsl6wnRE8" allowfullscreen></iframe>
			</article>
			<article>
				<h2>article.title</h2>
				<p>
				<ul>
					<li>61 Rimsdale drive</li>
					<li>Manchester</li>
					<li>M400GN</li>
				</ul>
				</p>
			</article>
		</section>
</div>

</div>
<?php
echo getFooter(['main.min.js']);
?>