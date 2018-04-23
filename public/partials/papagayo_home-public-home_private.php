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

if ( $q->have_posts() ) :

	?>

	<!-- This file should primarily consist of HTML with a little bit of PHP. -->
	<div class="cuerpoHomePrivate col-md-12 col-sm-12 col-xs-12">

		<?php while ( $q->have_posts() ) :
			$q->the_post(); ?>

			<div class="homePrivate1 col-md-12 col-sm-12 col-xs-12">
				<div class="homePrivate1-1 col-md-8 col-sm-8 col-xs-8">
					<iframe title="YouTube video player" width="900" height="600" src="http://www.youtube.com/embed/krqjM5GmqzQ" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="homePrivate1-2 col-md-4 col-sm-4 col-xs-4">
					<h2><?php the_title()?></h2>
					<?php echo wpautop(the_content()) ?>
					
				</div>
			</div>

		<?php endwhile; ?>

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
