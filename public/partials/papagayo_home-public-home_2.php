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

 $args     = new WP_Query( array(
   'posts_per_page' => 3,
   'order'          => 'ASC',
   'post_type'      => 'homepapagayo',
   'post_status'    => 'publish'
 ));

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<?php if ( $args->have_posts() ) : ?>

            <?php the_title(); ?>

<?php endif; ?>
