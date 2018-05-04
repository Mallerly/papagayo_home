<?php

/**
* Provide a public-facing view for the plugin
*
* This file is used to markup the public-facing aspects of the plugin.
*
* @link       Juan Santiago
* @since      1.0.0
*
* @package    Papagayo_home
* @subpackage Papagayo_home/public/partials
*/

//$idcat = get_option( 'cont' );

if ( $q->have_posts() ) :

	?>

	<!-- This file should primarily consist of HTML with a little bit of PHP. -->
	<div class="cuerpoHomePrivate col-md-12 col-sm-12 col-xs-12">

		<?php echo do_shortcode('[videoarticulo_home_private ]'); ?>

		<div class="homePrivate2 col-md-12 col-sm-12 col-xs-12">
			<h2>Unidades del aula virtual</h2>
			<?php echo do_shortcode('[modulos_home post_type="aulavirtual"]'); ?>
			<div class="enlaceModuloAula">
				<a href="#"> Ver más Unidades </a>
			</div>
		</div>


		<div class="homePrivate3 col-md-12 col-sm-12 col-xs-12">
			<?php echo do_shortcode('[home_1 post_type="certificado"]'); ?>
		</div>

		<div class="homePrivate4 col-md-12 col-sm-12 col-xs-12">
			<?php echo do_shortcode('[pagagayo_home_2]'); ?>

		</div>

	</div>

<?php endif; ?>
