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
                <li><a href="../home">home</a></li>
                <li class="dropdown">
                    <a href="../#" id="about-us" class="dropdown-toggle">about us <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../about-us">about us</a></li>
                        <li><a href="../services">services</a></li>
                        <li><a href="../courses">courses</a></li>
                    </ul>
                </li>
                <li><a href="../career">career</a></li>
                <li><a href="../testimonials">testimonials</a></li>
                <li><a href="#" class="nav-active">news</a></li>
                <li><a href="../contacts">contacts</a></li>
                <li><a href="../client">client</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>
	<div class="landing">
		<section class="container news">
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
            <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
				<div class="news-head">
                    <?php print $messages; ?>
                    <?php print render($tabs); ?>
                    <?php print render($page['help']); ?>
                    <?php if ($action_links): ?>
                        <ul class="action-links"><?php print render($action_links); ?></ul>
                    <?php endif; ?>
				</div>
				<div class="news-body">
					<p class="news-txt">
                     <a id="main-content"></a>
                     <?php print render($page['content']); ?>
                     <?php print $feed_icons; ?>
					</p>
				</div>
		</section>
	</div>

</div>
