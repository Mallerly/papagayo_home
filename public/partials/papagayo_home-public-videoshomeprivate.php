
<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       content_post_diferent
 * @since      1.0.0
 *
 * @package    Content_post_diferent
 * @subpackage Content_post_diferent/public/partials
 */
?>

    <!-- This file should primarily consist of HTML with a little bit of PHP. -->
<?php 
$url = get_option( 'urlvideo' );
$titulo = get_option( 'titulovideo' );
$descripcion = get_option( 'descripcionvideo' );

if ( $q->have_posts() ) :
	while ( $q->have_posts() ) : 
			$q->the_post();

?>

   <div class="homePrivate1 col-md-12 col-sm-12 col-xs-12">
				<div class="homePrivate1-1 col-md-8 col-sm-8 col-xs-8">
				<video width="800" height="500" background_color('black') controls="controls" type="video/mp4">
                      <source src="<?php echo $url ?>">
                </video>
				</div>
				<div class="homePrivate1-2 col-md-4 col-sm-4 col-xs-4">
					<h2><?php echo $titulo ?></h2>
					<p> <?php echo $descripcion ?></p>
					
				</div>
			</div>

<?php
		endwhile;
		wp_reset_query();
		

 endif;
 