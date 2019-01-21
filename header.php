<html>
<head>
	<title><?php bloginfo('name');?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>?v=0.0.1">
	<?php wp_head();?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1, user-scalable=no">
</head>
<body <?php body_class();?>>
    <div class="contenedor">
    <section class="section">
    	<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
    	</button>
    	<a class="navbar-brand" href="#"><div class="logo"><img src=""></div></a>
            <?php
            wp_nav_menu( array(
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker()
    		) );
            ?>
        </div>
    </section>
    <div>
    <FORM method=GET  target="_blank">
    <div class="">
    <INPUT TYPE=text id="s" name="q" value="" size="25" class="buscador" />
    <button type="" class="buttonBuscador"><img src=""></button>
    </div>
    </div>
</nav>