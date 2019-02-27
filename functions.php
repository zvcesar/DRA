<?php 
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

	 

	function load_assets(){		

		//load BS
		wp_enqueue_style( 'bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css' );

		wp_enqueue_style( 'style', get_stylesheet_uri());		

		wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.min.js'); 

		wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js'); 

		wp_enqueue_script( 'app_js', get_template_directory_uri() . '/assets/js/funciones.js');


	}

	add_action('wp_enqueue_scripts', 'load_assets');

	register_nav_menus( array( 'primary' =>__( 'Primary Menu', 'THEMENAME' ), ) );

	
 ?> 