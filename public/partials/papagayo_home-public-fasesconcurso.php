<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       LuisCapote
 * @since      1.0.0
 *
 * @package    Noticias_bbva
 * @subpackage Noticias_bbva/public/partials
 */

 $q = array(
 	'posts_per_page' => 6,
 	'order'          => 'ASC',
 	'post_type'      => 'fasesconcurso',
 	'post_status'    => 'publish'
 );
 $fasesconcurso    = get_posts( $q );

 $args     = new WP_Query( array(
 	'posts_per_page' => 1,
 	'order'          => 'DESC',
 	'post_type'      => 'concursopapagayo',
 	'post_status'    => 'publish'
 ) );
?>

<?php
if ( $args->have_posts() ) :
	$imgcontar = 0;?>
	<?php while ( $args->have_posts() ) :
		$args->the_post();
    $foto = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'bbva-home2' );
    $src = $foto[0];?>
			<div class="w3-card-s">
				<a data-toggle="modal" data-target="#myModalFase" href="#"><img src="<?php echo $src ?>" style="width:100%; height: 22.67em;"></a>
				<header class="w3-container-f" style="height: 83px;">
						<a data-toggle="modal" data-target="#myModal" href="#"><h3><?php echo get_the_title(); ?></h3>
            </a>
				</header>
			</div>
		<?php $n ++;
	endwhile;
	
endif; ?>


<!-- Modal -->
    <div class="modal fade" id="myModalFase" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div id="tabs">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <nav>
                        <div class="navbar-header">
                            <a class="navbar-brand">Fases del Concurso</a>
                        </div>
                        <ul class="nav navbar-nav-2">
                        <?php $l=0;
                        foreach ($fasesconcurso as $sign) { ?>
                            <li> <a href="#tabs-<?php echo $l++ ?>"><?php echo $sign->post_title; ?></a></li>
                        <?php } ?>
                        </ul>
                    </nav>
                </div>
                <div class="modal-body">
                 <?php   $a=0;
		                foreach ($fasesconcurso as $mGanadores) {
	              ?>
                    <div id="tabs-<?php echo $a++ ?>">
                        <?php echo wpautop($mGanadores->post_content); ?>
                    </div>
                  <?php } ?>
                </div>
                </div>
                <!--<div class="modal-footer">-->
                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                <!--</div>-->
            </div>
        </div>
    </div>
