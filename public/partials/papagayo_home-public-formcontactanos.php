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

<form id="formcontacto" class="form col-sm-12" >
	<h4> Contáctanos</h4>
		<div class="col-sm-6">
			<div class="form1">
				<label class="controllabel "> Nombre Completo </label>
					<div>
						<input id="nombre" class="control" type="text" name="dta" required="" placeholder="">
					</div>
					
			</div>

			
			<div class="form1">

				<label class="controllabel"> Correo Electrónico </label>
					<div>
						<input id="correo" class="control" type="email" name="dta" pattern="[A-Za-z0-9]{1,100}(@gmail.com|@GMAIL.COM)" required="" placeholder="ejemplo@gmail.com">
					</div>
			</div>

			<div class="form1">
				<label class="controllabel"> Teléfono </label>
					<div>
						<input id="tlf" class="control" type="text" name="dta"  pattern="[0-9]{7,11}" required=""  type=" text" placeholder="04121111111">
					</div>
			</div>

			<div class="form1">
				<label class="controllabel"> Ingrese Codigo  </label>
					<div>
						<input id="codigo" class="control" type="text" name="dta" required="" placeholder="">
					</div>
					
			</div>
	</div>
	<div class="col-sm-6">
			<div class="form1" id="preg">
					<label class="controllabel"> Comentario/Pregunta   </label>
						<div>
							<textarea id="comentario" class="control" type="text" name="data" required="" placeholder=""> 
							</textarea> 
						</div>
						
			</div>
	</div>

<p><button class="btn btn-primary pull-right" type="submit">Enviar</button></p>
<p><script>
$(".fomr").on( "submit", function( event ) {
alert("Su registro fué exitoso, próximamente le contactaremos.");
 		event.preventDefault();
 		var $form = $(this);
		var url = 'http://d1v6jkagsempnr.cloudfront.net/bbva-components/form?project=ivv4kdfr';
		var options = {
			'NombreApellido': $("#nombre1").val(),
                        'NombreCompleto': $("#nombre").val(),
                        'CoemntarioPregunta': $("#comentario").val(),
                        'correo': $("#correo").val(),
                         'telefono': $("#tlf").val(),
                          'codigo': $("#codigo").val(),
			'formID': 'ivv4kdfr1510770178699'
		};
		$.post(url, options, function() {
			console.log('Completado');
                        limpiaForm();
		})
	});
</script></p>
</form>

<style >

input:valid, textarea:valid, date:valid {color: green;}
input:invalid, textarea:invalid, date:invalid{color: red;}
.form{
	margin-bottom: 75px;
}
h4{
	text-align: center;
	color: #006ec1; 
	border-top: solid 2px #006ec1; 
	padding-top: 50px; 
	font-size: 18pt; 
	font-weight: bold;
}

.form1{
	padding-left: 200px;
	padding-bottom: 20px;

}
.controllabel{
	color: #49a8e6;
	font-size: 14pt;
}
.control{
	width: 28.5em;
}
#comentario{
height: 15.5em;
}

#preg{
	float: right;
	padding-right: 110px;
	/*margin-top: -65px;*/
}
.btn{
	margin-right: 122px;
}
</style>

