<!DOCTYPE html>
<html lang="en">
    <head>
	  <meta charset="UTF-8">
	  <title><?php echo $title; ?></title>
    </head>
    <body>
	  <?php 
if(isset($print)) {echo $print."\n";}; 
foreach($navItems as $navItem) {
    echo '<a href="'.$navItem.'">'.$navItem.'</a>'."\n";
} 
	  ?>

    </body>
</html>