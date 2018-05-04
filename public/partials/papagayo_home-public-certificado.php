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
	
<form class="form"  >
	<h4> Buscador </h4>
		<div class="formgroup col-sm-12" >
			<p><label class="controllabel col-sm-3"  for="nombrecontacto">Cédula de Identidad :</label></p>
			<div class="col-sm-3"><input id="cedula" class="form-control"  name="cedula"  type="text" placeholder=""  required=""/></div>	
			<div class="col-sm-3"> <p><button class="btn btn-primary pull-center " type="submit">Buscar</button></p> </div>
		</div>
		<div class="formgroup col-md-12" >
			<p ><label class="controllabel col-sm-3"  for="resultado">Total: encontrado 0 resultados </label></p>		
		</div>

</form>


<style>


h4{
	text-align: center;
	color: #006ec1; 
	border-top: solid 2px #006ec1; 
	padding-top: 50px; 
	font-size: 18pt; 
	font-weight: bold;
	padding-bottom: 20px;
}

.formgroup{
	margin-left: 285px;
	margin-bottom: 70px;
}
.controllabel{
	color: #49a8e6;
	font-size: 14pt;
	margin-right: 15px; 
	padding-left: 0px;
	padding-right: 0px;"
}
.form-control{
	margin-left: -140px;
	margin-top: -9px;
}
.btn{
	margin-right: 330px;
	margin-top: -10px;
}
</style>