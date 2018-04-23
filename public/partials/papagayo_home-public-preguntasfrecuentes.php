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


$args     = new WP_Query( array(
	'posts_per_page' => 50,
	'order'          => 'ASC',
	'post_type'      => 'preguntasfrecuentes',
	'post_status'    => 'publish'
) );

if ( $args->have_posts() ) :
	$contar = 0;
	$data = 'data';
?>

<div class="cuerpopreguntasf col-md-12 col-sm-12 col-xs-12"> 
<?php

$locations = get_nav_menu_locations();
$menu      = wp_get_nav_menu_object( $locations[ $menu1 ] );
$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
$i=0;
$contar2 =0;

if ( $args->have_posts() ) :
	while ( $args->have_posts() ) : $args->the_post();
        $contar2 ++;
        $meta_print_boton1 = get_post_meta( get_the_ID(), 'botn_texto', true );
        $meta_print_boton3 = get_post_meta( get_the_ID(), 'botn_texto2', true );
		$meta_print_url1   = get_post_meta( get_the_ID(), 'botn_url', true );
        $imggal3 = rwmb_meta( 'video-text_1', get_the_ID() );
        $imggal4 = rwmb_meta( 'video-text_2', get_the_ID() );
        ?>
		<div class="borde">
            <h2><?php the_title(); ?>
                <span class="fa fa-chevron-down"></span>

            </h2>
        <?php if ( $contar2 % 2 == 0 ) { ?>
		<div class="plegable-1" id="data<?php echo $contar2 ?>">
		<?php } else { ?>
		<div class="plegable" id="data<?php echo $contar2 ?>">
		<?php } ?>
			   <?php echo wpautop( the_content() ); ?>
        </div>
        </div>
		<?php $i++;
		 endwhile;?>
	</div>
	</div>
     <?php
endif;
endif;
