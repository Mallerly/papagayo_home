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
wp_nav_menu(
    array(
        'container'       => 'nav',
        'container_class' => 'cuerpoMenuQuienesSomosPapagayo col-md-12 col-sm-12 col-xs-12',
        'container_id'    => 'mnu',
        'items_wrap'      => '<ul>%3$s</ul>',
        'theme_location'  => 'quienessomospapagayo'
    ) );

$args     = new WP_Query( array(
    'posts_per_page' => 2,
    'order'          => 'ASC',
    'post_type'      => 'quienessomos1',
    'post_status'    => 'publish'
) );

if ( $args->have_posts() ) :
    $contar = 0;
    $data = 'data';
?>

    <div class="cuerpoPapagayo col-md-12 col-sm-12 col-xs-12" id="cuerpopapa">
    <?php
    wp_nav_menu( 
        array(
            'container'       => 'nav',
            'container_class' => 'nav-secondary',
            'container_id'    => 'selector',
            'items_wrap'      => '<ul>%3$s</ul>',
            'theme_location'  => 'quienessomospapagayo',
            'fallback_cb'     => '',
            'walker'          => new Custom_Walker(),
        ) );
while ( $args->have_posts() ) :
    $args->the_post();
    $contar ++;
    $resultado= $data . $contar;
    $thumbID      = get_post_thumbnail_id( get_the_ID() );
    $imgDestacada = wp_get_attachment_url( $thumbID );

if ( $contar % 2 == 0 ) {
    ?>
    <div class="itemi col-md-12 col-sm-12 col-xs-12 menu-h" id="<?php echo $resultado ?>">
    <?php } else { ?>
    <div class="item col-md-12 col-sm-12 col-xs-12 menu-h" id="<?php echo $resultado ?>">
    <?php } ?>
        <img src="<?php echo $imgDestacada ?>" alt="">
    <div>
        <div class="est col-md-12 col-sm-12 col-xs-12">
            <?php echo wpautop( the_content() );
            ?>
           
        </div>
    </div>
    </div>
    <?php endwhile; ?>
  </div>
    <?php endif; ?>


<div class="cuerpoMenuResponsive col-md-12 col-sm-12 col-xs-12">
<?php
$menu1      = 'quienessomospapagayo';
$locations = get_nav_menu_locations();
$menu      = wp_get_nav_menu_object( $locations[ $menu1 ] );
$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
$i=0;
$contar2 =0;
foreach ( $menuitems as $menu_item ) {
    $arrayitem[] = $menu_item->title;
}
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
            <h2><?php echo $arrayitem[$i] ?>
                <span class="fa fa-chevron-down"></span>
            </h2>
        <?php if ( $contar2 % 2 == 0 ) { ?>
        <div class="plegable-1" id="data<?php echo $contar2 ?>">
        <?php } else { ?>
        <div class="plegable" id="data<?php echo $contar2 ?>">
        <?php } ?>
               <?php echo wpautop( the_content() ); ?>
               <?php if (isset($imggal3)) { ?>
                           <?php for ($k=0; $k<count($imggal3); $k++) { ?>
                                <a  data-fancybox="gallery-3" data-type="iframe"
                                    data-src="https://www.youtube.com/embed/<?php echo $imggal3[$k]?>"
                                    href="javascript:;"
                                >
                                <?php echo $imggal4[$k] ?>
                                </a> <br>
                           <?php } ?>
               <?php } ?>
               <?php if ( $meta_print_boton1 ) { ?>
               <div class="bot-plega">
                  <a <?php if ($meta_print_boton3) {?> data-toggle="modal" data-target="#myModal"<?php }?>
                     href=" <?php echo $meta_print_url1 ?>">
                     <?php echo $meta_print_boton1 ?></a>
               </div>
                    <?php } ?>
        </div>
        </div>
        <?php $i++; endwhile;?>
    </div>
     <?php
endif;