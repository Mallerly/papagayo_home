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
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<?php if ( $q->have_posts() ) :
  	while ( $q->have_posts() ) :
      	$q->the_post(); 

        $botoncertificado = rwmb_meta( 'prefix-certificadotext_1', get_the_ID() );
        $urlcertificado = rwmb_meta( 'prefix-certificadotext_2', get_the_ID() );
        $archivodescargar = rwmb_meta( 'prefix-certificadofile_input_1', get_the_ID() );
        $descripcion = rwmb_meta( 'prefix-certificadotext_3', get_the_ID() );
        $periodoescolar = rwmb_meta( 'prefix-certificadotext_4', get_the_ID() );

        ?>
  		<div class="cuerpoHomeCaja1 col-md-12 col-sm-12 col-xs-12" style="top:-28em;">
  			<div class="HomeCaja1 col-md-12 col-sm-12 col-xs-12">

          <div class="cuadradohover col-md-12 col-sm-12 col-xs-12" style="padding: 0px;">
            <div class="CajaImg col-md-6 col-sm-6 col-xs-6">
              <?php $foto = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'bbva-home1' ); $src = $foto[0]; ?>
              <img src="<?php echo $src ?>">
            </div>
            <div class="CajaTexto col-md-6 col-sm-6 col-xs-6" >
              <a href="<?php echo get_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
              <p><?php the_content(); ?></p>
              <a <?php if ($post_type=="certificado"){?> data-toggle="modal" data-target="#myModal" <?php  } ?> class="btn btn-primary" <?php if($post_type!="certificado"){ ?> href="<?php echo get_permalink(); ?>" <?php } ?>> <?php  if($post_type=="certificado"){ echo $botoncertificado; } else { echo "Saber más"; } ?></a>

            </div>
          </div>

  			</div>
  		</div>
      <?php endwhile;
endif; ?>

      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <nav>
                      <div class="navbar-header">
                        <a class="navbar-brand"> Certificados </a>
                      </div>

                    </nav>
                </div>
                <div class="modal-body" style="overflow:hidden">
                      <?php $foto = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'bbva-programasmodal' );
                      $src = $foto[0];?>

                      <div class="img-modal-body col-md-5 col-sm-5 col-xs-5">
                        <img src="<?php echo $src?>" alt="" style="margin-top: 4%; height: 18em; position: fixed; width: 37%;">
                      </div>

                      <div class="cuerpo-modal-body col-md-7 col-sm-7 col-xs-7">
                        
                        <p >  <?php echo $descripcion?> </p>
                        <p style="font-weight:bold"><?php echo  $periodoescolar?></p>
                      </div>

                </div>

                <div class="modal-footer">
                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                  <div class="control">
                    <div class="btn-group botonesCompartirInfografia  buttonPrograma" style="top: -10px; right: 15%;">
                      <!--<a class="btn-default dropdown-toggle buttonCompartir" data-toggle="dropdown"><i class="fa fa-share-alt-square" aria-hidden="true"></i>  Compartir</a>
                      <ul class="dropdown-menu1" role="menu" style="float:right !important; margin: 26px -95px 0 0; margin-left: -70px;">
                        <li><a style="padding: 0 10px 0 0;"href="https://www.facebook.com/sharer/sharer.php?u=<?php   the_permalink();?>" class="facebook" target="_blank"> <i style="color:#095798; font-size:22px;" class="fa fa-facebook-square"></i></a></li>
                        <li><a style="padding: 0 10px 0 0;" href="https://twitter.com/intent/tweet?url=<?php the_permalink();?>&text=<?php the_title_attribute(); ?>%20" class="twitter" target="_blank"> <i style="color:#76a9da; font-size:22px;" class="fa fa-twitter-square"></i></a></li>
                        <li><a style="padding: 0 10px 0 0;" href="https://plus.google.com/share?url=<?php the_permalink();?>" class="googleplus" target="_blank"> <i style="color:#dc4a3e; font-size:22px" class="fa fa-google-plus-square"></i></a></li>
                      </ul>-->
                      <a class="buttonDescargar" href="<?php echo $archivodescargar?>"  download="<?php echo the_title();?>"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i>  Descargar</a>
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </div>


     