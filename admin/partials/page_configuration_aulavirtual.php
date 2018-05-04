<?php
/**
 * Created by PhpStorm.
 * User: ve07985
 * Date: 28/08/2017
 * Time: 03:52 PM
 */
?>

	
    <h2> Home Privado </h2>


<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
<div class="wrap">
    <form method="post" action="options.php">
		<?php
		settings_fields( 'page_configuracion_aulavirtual' );
		do_settings_sections( 'page_configuracion_aulavirtual' );
		?>
        <table class="form-table">
            <tbody class="form-table">
            <tr>
                <th scope="row">
                    <label for="contenido"> URL Del Video </label>
                </th>

                <td>
                    <input type="textarea"
                           value="<?php echo get_option( 'urlvideo' ); ?>"
                           name="urlvideo"
                           placeholder=""
                           class="regular-text">
                    <p class="description" id="tagline-description">
                        Coloca la URL del Video 
                    </p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="contenido"> Título del Video  </label>
                </th>

                <td>
                    <input type="textarea"
                           value="<?php echo get_option( 'titulovideo' ); ?>"
                           name="titulovideo"
                           placeholder=""
                           class="regular-text">
                    <p class="description" id="tagline-description">
                        Ingresa Título del Video  
                    </p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="contenido"> Descripción  del Video  </label>
                </th>

                <td>
                    <input type="textarea"
                           value="<?php echo get_option( 'descripcionvideo' ); ?>"
                           name="descripcionvideo"
                           placeholder=""
                           class="regular-text">
                    <p class="description" id="tagline-description">
                        Ingresa Título del Video  
                    </p>
                </td>
            </tr>
            </tbody>
            </table>
		<?php submit_button( 'Save Settings' ); ?>
    </form>

</div>

<?php  



