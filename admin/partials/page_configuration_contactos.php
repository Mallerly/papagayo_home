<?php
/**
 * Created by PhpStorm.
 * User: ve07985
 * Date: 28/08/2017
 * Time: 03:52 PM
 */
?>

	
    <h2>Imagen de cabecera</h2>



<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
<div class="wrap">
    <form method="post" action="options.php">
		<?php
		settings_fields( 'page_configuracion_contactos' );
		do_settings_sections( 'page_configuracion_contactos' );
		?>
        <table class="form-table">
            <tbody class="form-table">
            <tr>
                <th scope="row">
                    <label for="contenido"> Titulo 1 </label>
                </th>

                <td>
                    <input type="textarea"
                           value="<?php echo get_option( 'contenido' ); ?>"
                           name="contenido"
                           placeholder=""
                           class="regular-text">
                    <p class="description" id="tagline-description">
                        Tamaño de la imagen Large, Medium, Thumbnail
                    </p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="contenido"> Descripción </label>
                </th>
                
                <td>
                    <input type="textarea"
                           value="<?php echo get_option( 'descripcion' ); ?>"
                           name="descripcion"
                           placeholder=""
                           class="regular-text">
                    <p class="description" id="tagline-description">
                        Tamaño de la imagen Large, Medium, Thumbnail
                    </p>
                </td>


            </tr>
            <tr>
                <th scope="row">
                    <label for="contenido"> Titulo 2 </label>
                </th>

                <td>
                    <input type="textarea"
                           value="<?php echo get_option( 'titulo2' ); ?>"
                           name="titulo2"
                           placeholder=""
                           class="regular-text">
                    <p class="description" id="tagline-description">
                        Tamaño de la imagen Large, Medium, Thumbnail
                    </p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="contenido"> Descripción </label>
                </th>
                
                <td>
                    <input type="textarea"
                           value="<?php echo get_option( 'descripcion2' ); ?>"
                           name="descripcion2"
                           placeholder=""
                           class="regular-text">
                    <p class="description" id="tagline-description">
                        Tamaño de la imagen Large, Medium, Thumbnail
                    </p>
                </td>

                
            </tr>
            </tbody>
            </table>
		<?php submit_button( 'Save Settings' ); ?>
    </form>
</div>

<?php  



