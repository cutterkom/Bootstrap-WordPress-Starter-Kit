<!-- HTML5 -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
   	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<!-- enable JavaScript -->
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Fixed navbar -->
	<div class="navbar navbar-fixed-top">
    	<div class="container">
        	<div class="navbar-header">
          		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
          		</button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="http//www.deinedomain.de/">Home</a></li>
            <li><a href="http//www.deinedomain.de/about">About</a></li>
            <li><a href="http//www.deinedomain.de/kontakt">Kontakt</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div><!--/.navbar -->