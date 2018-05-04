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

<form id="formcontacto" class="form col-sm-12"  > 
	<input id="formID" hidden="" name="formID" type="text" value="ivv4kdfr1510770178699" />
	<h4> Contáctanos</h4>
		<div class="col-sm-6">
			<div class="form1">
				<label class="controllabel "> Nombre Completo </label>
					<div>
						<input id="nombre" class="control" type="text" name="nombre"  required="" placeholder="">
					</div>
					
			</div>

			
			<div class="form1">

				<label class="controllabel"> Correo Electrónico </label>
					<div>
					<input id="correo" class="control" type="email" name="correo" 
					pattern="[A-Za-z0-9]{1,100}(@gmail.com|@GMAIL.COM)" required="" placeholder="ejemplo@gmail.com">
					</div>
			</div>

			<div class="form1">
				<label class="controllabel"> Teléfono </label>
					<div>
						<input id="tlf" class="control" type="text" name="tlf"  pattern="[0-9]{7,11}" required=""  type=" text" placeholder="04121111111" maxlength="11">
					</div>
			</div>

			<div class="form1">
				<label class="controllabel"> Ingrese Codigo  </label>
					<div>
						<input id="codigo" class="control" type="text" name="codigo" required="" placeholder="">
					</div>
					
			</div>
	</div>
	<div class="col-sm-6">
			<div class="form1" id="preg">
					<label class="controllabel"> Comentario/Pregunta   </label>
						<div>
							<textarea id="comentario" class="control" type="text" name="comentario" required="" placeholder=""> 
							</textarea> 
						</div>
						
			</div>
	</div>

<p><button class="btn btn-primary pull-right" type="submit">Enviar</button></p>


<script type="text/javascript">

	function limpiaForm() {
    // // recorremos todos los campos que tiene el formulario
    $("#formcontacto").find(':input').each(function() {
        var type = this.type;
        var tag = this.tagName.toLowerCase();
        // //limpiamos los valores de los campos…
        if (type == 'text' || type == 'password' || tag == 'textarea')
            this.value = "";
        // // excepto de los checkboxes y radios, le quitamos el checked
        // // pero su valor no debe ser cambiado
        else if (type == 'checkbox' || type == 'radio')
            this.checked = false;
        // // los selects le ponesmos el indice a -
        else if (tag == 'select')
            this.selectedIndex = -1;
	});
	location.reload();
}

</script>


<script type="text/javascript">

	
</script>

<p><script>
$(".form").on( "submit", function( event ) {
	alert("Su registro fué exitoso, próximamente le contactaremos.");
	limpiaForm();
 		event.preventDefault();
 		var $form = $(this);
		var url = 'http://d1v6jkagsempnr.cloudfront.net/bbva-components/form?project=ivv4kdfr';
		var options = {
						
                        'Nombre': $("#nombre").val(),
                        'correo': $("#correo").val(),
                        'telefono': $("#tlf").val(),
                        'codigo': $("#codigo").val(),
                        'ComentarioPregunta': $("#comentario").val(),
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

input:valid, textarea:valid {color: green;}
input:invalid, textarea:invalid {color: red;}
.form{
	margin-bottom: 75px;
	border-top: solid 2px #006ec1; 
}
h4{
	text-align: center;
	color: #006ec1; 
	
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

