
<?php 

$contenido = get_option('contenido');
$descripcion = get_option('descripcion');
$titulo2 = get_option('titulo2');
$descripcion2 = get_option('descripcion2');

 ?>

<div class="col-md-12" style="padding: 0px;">
	
	<img src="<?php echo $imgDestacada[0]; ?>" style="position: relative;">
	
	
		<p style= "position: absolute; top: 60px; left: 175px; color: #094fa4; text-align: center; width: 30%; height: 60%; background: white; font-size: 1.3em; font-weight: bold; padding-top: 30px; "> <?php  echo $contenido  ?> <br> <?php  echo $descripcion ?> <br>  <?php  echo $titulo2 ?> <br> <?php  echo $descripcion2 ?> </p>
	
</div>