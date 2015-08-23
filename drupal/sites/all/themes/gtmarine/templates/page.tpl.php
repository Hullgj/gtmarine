<div class="wrapper">
	<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" id="navbar-button" class="navbar-toggle dropdown-toggle collapsed">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="http://localhost/optimizr">GT Marine Offshore</a>
</div>
<div class="scroll-bar collapse navbar-collapse navbar-menu" id="navbar">
<ul class="nav navbar-nav navbar-right">
<li><a href="home">home</a></li>
<li class="dropdown">

          <a href="#" id="about-us" class="dropdown-toggle">about us <span class="caret"></span></a>

          <ul class="dropdown-menu">
<li><a href="about-us">about us</a></li>
<li><a href="services">services</a></li>
<li><a href="courses">courses</a></li>
</ul>
</li>
<li><a href="career">career</a></li>
<li><a href="testimonials" class="nav-active">testimonials</a></li>
<li><a href="news">news</a></li>
<li><a href="contacts">contacts</a></li>
<li><a href="client">client</a></li>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
	<div class="landing">
		<section class="container news">
			<h1>News from the marine world.</h1>
			<article>
				<div class="news-head">
					<h2>News.Title</h2>
					<h3 class="author">News.Author</h3>
					<h4>News.Date</h4>
					<div class="news-head-img">
						<img src="app/src/img/Two-engineers-going-through.jpg" alt="Two Engineers going through final inspections">
					</div>
				</div>
				<div class="news-body">
					<p class="news-txt">
						<div id="content" class="column" role="main">
                     <?php print render($page['highlighted']); ?>
                     <?php print $breadcrumb; ?>
                     <a id="main-content"></a>
                     <?php print render($title_prefix); ?>
                     <?php if ($title): ?>
                       <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
                     <?php endif; ?>
                     <?php print render($title_suffix); ?>
                     <?php print $messages; ?>
                     <?php print render($tabs); ?>
                     <?php print render($page['help']); ?>
                     <?php if ($action_links): ?>
                       <ul class="action-links"><?php print render($action_links); ?></ul>
                     <?php endif; ?>
                     <?php print render($page['content']); ?>
                     <?php print $feed_icons; ?>
                  </div>
					</p>
					<a href="#" class="news-a">Find out more here!</a>
				</div>
			</article>
			<article>
				<div class="news-head">
					<h2>News.Title</h2>
					<h3 class="author">News.Author</h3>
					<h4>News.Date</h4>
					<div class="news-head-img">
						<img src="app/src/img/Two-engineers-going-through.jpg" alt="Two Engineers going through final inspections">
					</div>
				</div>
				<div class="news-body">
					<p class="news-txt">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur numquam aliquam, cupiditate possimus. Eum unde eveniet commodi dolorem eius et, minima pariatur similique quos recusandae cum fugiat illum ut laudantium a eos deleniti quis qui. Ipsam inventore, sit voluptatum explicabo ea. Natus quidem recusandae odio quaerat totam voluptatum, et neque a consequuntur quisquam qui magnam, hic earum, tempora repellendus quam. Quidem veniam ad maiores, delectus excepturi dicta reiciendis nobis pariatur laudantium, eum reprehenderit fugit quos, molestiae quasi labore. Hic quod fugiat mollitia maxime laborum sapiente soluta numquam ut repudiandae quaerat voluptatum nemo qui ipsum cum fuga ea, error maiores sequi iusto ducimus possimus quo ad. Quaerat molestias tempora ex nihil temporibus voluptate, numquam vitae! Beatae eligendi laudantium officia doloremque incidunt soluta animi voluptatum vel cupiditate. Sunt eaque quisquam sint dolor molestiae quasi neque sit optio impedit culpa iusto tenetur, quo rerum qui in error, nulla eum dolores maiores vero pariatur.
					</p>
				</div>
			</article>
		</section>
	</div>

</div>
-*-


	
	

</div>
<?php
echo getFooter(['main.min.js']);
?>
