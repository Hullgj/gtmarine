<?php

echo getHead('en',['gallery.prefixed.min.css','_main.min.css']);
?>
<div class="wrapper">
	<?php 
echo $nav->getNav('bootstrap','GT Marine Offshore',false);
	?>
	<div class="home">
		<div class="gallery autoplay items-3">
			<div id="item-1" class="control-operator"></div>
			<div id="item-2" class="control-operator"></div>
			<div id="item-3" class="control-operator"></div>


			<figure id="slide1" class="item">
                <img src="app/src/img/Caargo-Ship-Enters-Port-Aerial.jpg" alt="Graphic Cargo ship entering port" />
				<h2>Becoming a leading partner in assuring work force competency through safety</h2>
			</figure>

			<figure id="slide2" class="item">
                <img src="app/src/img/Crane-operation-on-offshore.jpg" alt="Graphic Crane operating on offshore rig" />
				<h2>Holding a world leading assurance program, working standards and innovative practical solutions</h2>
			</figure>

			<figure id="slide3" class="item">
                <img src="app/src/img/Large-crane-vessel-installing.jpg" alt="Graphic Large crane vessel loading material for installation" />
				<h2>Creating a safer place in the marine and offshore environment</h2>
			</figure>

			<div class="controls">
				<a href="#item-1" class="control-button">•</a>
				<a href="#item-2" class="control-button">•</a>
				<a href="#item-3" class="control-button">•</a>
			</div>
		</div>
		<div class="container">
			<h1>Welcome.</h1>
			<p>We are a small company that treats MArine business. Enjoy your stay.</p>
		</div>
	</div>

</div>
<?php
echo getFooter(['main.min.js']);
?>