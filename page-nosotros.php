<?php
	get_header();
?>

<?php
	if(have_posts()) :
		while(have_posts()) : the_post(); ?>
			<p><?php the_content(); ?></p>
		<?php endwhile;
	else : 
		echo "<p>no hay contenido.</p>";
	endif;
?>
<?php
	get_footer();
?>