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
<section><div class="logoContacto"></div></section>
<section class="sectionForm">
	<div class="textoFormulario">
		<p>Utiliza este formulario para comunicarte<br/>
		con nosotros y en breve te responderemos</p>
	</div>
	<div class="formulario">
		<div class="alinearFormulario">
		<label for="first_name">Nombre</label></INPUT> 
		</div>
		<div class="alinearFormulario">
			<INPUT type="text" size=45 name="first_name">
		</div>

		<div class="alinearFormulario">
		<label for="email">E-mail</label></INPUT> 
		</div>
		<div class="alinearFormulario">
			<INPUT type="email" size=45 name="email">
		</div>

		<div class="alinearFormulario">
		<label for="telephone">Teléfono</label></INPUT> 
		</div>
		<div class="alinearFormulario">
			<INPUT type="tel" size=45 name="telephone">
		</div>

		<div class="alinearFormulario">		
		<label for="message">Mensaje</label> 
		</div>
		<div class="alinearFormulario">
			<TEXTAREA rows=6 cols=48 name="message"></TEXTAREA>
		</div>
		<div class="">
			<button type="" class="botonFomulario">ENVIAR</button>
		</div>

	</div>
	<div class="divInfoEmpresa">
		<div class="infoEmpresa">
			<div><p>Email de SportClub</p></div>
			<div class="infoDetalles"><p>sportclub@gmail.com</p></div>
			<div><p>Número de la Empresa</p></div>
			<div class="infoDetalles"><p>24470600</p></div>
			<div><p>Ubicación:</p></div>
		</div>
		<a href="https://www.google.com/maps/@10.0887592,-84.4695613,19.5z"><div class="ubicacion">
			
		</div></a>
	</div>

</section>
<?php
	get_footer();
?>