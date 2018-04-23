<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       Juan Santiago
 * @since      1.0.0
 *
 * @package    Papagayo_home
 * @subpackage Papagayo_home/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Papagayo_home
 * @subpackage Papagayo_home/public
 * @author     Juan Santiago <jjsantiago50@gmail.com>
 */
class Papagayo_home_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Papagayo_home_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Papagayo_home_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/papagayo_home-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Papagayo_home_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Papagayo_home_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/papagayo_home-public.js', array( 'jquery' ), $this->version, false );

	}

	public function image_t_size() {
		// add_image_size( 'bbva-home1', 645, 350, array( 'full', 'full' ) );
		add_image_size( 'bbva-home1', 645, 386, array( 'center', 'top' ) );
		add_image_size( 'bbva-home2', 385, 315, array( 'full', 'full' ) );
		add_image_size( 'bbva-home3', 593, 315, array( 'full', 'full' ) );
		add_image_size( 'bbva-publicidadpapagayo', 1420, 375, array( 'full', 'full' ) );
		

	}

	function shortcode_home_1( $atts ) {
		// Attributes
		ob_start();
		$atts = shortcode_atts(
			array(
				'limite'        => '1',
				'cat'           => '',
				'orderby'       => 'date',
				'order'         => 'DESC',
				'longitud_desc' => '120',
				'post_type'      => '',
			),
			$atts,
			'new_shortcode'
		);
		// Attributes in var
		$limite        = $atts['limite'];
		$cat           = $atts['cat'];
		$orderby       = $atts['orderby'];
		$order         = $atts['order'];
		$longitud_desc = $atts['longitud_desc'];
		$post_type = $atts['post_type'];


		$query = array(
			'posts_per_page'      => $limite,
			'cat'                 => $cat,
			'orderby'             => $orderby,
			'order'               => $order,
			'post_status'         => 'publish',
			'post_type'           => $post_type,
			'ignore_sticky_posts' => 1,
		);

		$q     = new WP_Query( $query );

		include plugin_dir_path( __FILE__ ) . '/partials/papagayo_home-public-home_1.php';


		return ob_get_clean();

	}

	public function shortcode_home_2() {
		require_once plugin_dir_path( __FILE__ ) . 'partials/papagayo_home-public-home_2.php';
	}

	public function shortcode_home_form() {
		require_once plugin_dir_path( __FILE__ ) . 'partials/papagayo_home-public-home_form.php';
	}


	public function shortcode_home_private($atts) {
		// Attributes
		ob_start();
		$atts = shortcode_atts(
			array(
				'posts_per_page' => 1,
				'order'          => 'ASC',
				'post_type'      => 'aulavirtual',
			),
			$atts,
			'new_shortcode'
		);
		// Attributes in var
		$limite    = $atts['posts_per_page'];
		$order     = $atts['order'];
		$post_type = $atts['post_type'];

		$query = array(
			'posts_per_page'      => $limite,
			'order'               => $order,
			'post_type'           => $post_type,
			'post_status'         => 'publish',
			'ignore_sticky_posts' => 1,
		);

		$q = new WP_Query($query);

		include plugin_dir_path(__FILE__) . 'partials/papagayo_home-public-home_private.php';
		wp_enqueue_script( 'slickjs', plugin_dir_url( __FILE__ ) . 'js/slick.min.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/Papagayo.js', array( 'jquery' ), $this->version, true );

		return ob_get_clean();
	}

	// Load the plugin frontend page partial.
	public function shortcode_fases_concurso() {
		wp_enqueue_script('fancyboxjsss', plugin_dir_url( __FILE__ ) . 'js/jquery.fancybox.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'fanxcy', plugin_dir_url( __FILE__ ) . 'js/fancybox.js', array(), true );
		require_once plugin_dir_path(__FILE__) . 'partials/papagayo_home-public-fasesconcurso.php';
	}

		// Load the plugin frontend page partial.
	public function shortcode_basesconsurso() {
		
		require_once plugin_dir_path(__FILE__) . 'partials/papagayo_home-public-basesconcurso.php';
	}
public function shortcode_preguntasfrecuentes() {
		
		require_once plugin_dir_path(__FILE__) . 'partials/papagayo_home-public-preguntasfrecuentes.php';
	}

public function shortcode_quienessomos1() {
		
		require_once plugin_dir_path(__FILE__) . 'partials/papagayo_home-public-quienessomos.php';
	}
public function shortcode_formcontactanos() {
		
		require_once plugin_dir_path(__FILE__) . 'partials/papagayo_home-public-formcontactanos.php';
	}
public function shortcode_certificado() {
		
		require_once plugin_dir_path(__FILE__) . 'partials/papagayo_home-public-certificado.php';
	}

	/////		Boton Wordpress Editor Imagen    ///////////////


	
function publicidad_papagayo_prueba($atts, $content = null) {
		ob_start();
		$atts_aprende = shortcode_atts(array(
			'id' => '23'
			//'direccionurl' => 'small',
		), $atts);
		//$thumbID      = get_post_thumbnail_id( $atts_aprende['id'],'bbva-image6' );

		$imgDestacada = wp_get_attachment_image_src($atts_aprende['id'], 'bbva-publicidadpapagayo');
		//$imgDestacada = wp_get_attachment_url($thumbID);
		include plugin_dir_path(__FILE__) . 'partials/papagayo_home-public-papagayopublicidad.php';

		return ob_get_clean();
	}




	public function register_shortcodes() {
		add_shortcode( 'home_1', array( $this, 'shortcode_home_1' ) );
		add_shortcode( 'home_2', array( $this, 'shortcode_home_2' ) );
		add_shortcode( 'home_form', array( $this, 'shortcode_home_form' ) );
		add_shortcode( 'home_private', array( $this, 'shortcode_home_private' ) );
		add_shortcode( 'fases_concurso', array( $this, 'shortcode_fases_concurso' ) );
		add_shortcode( 'bases_concurso', array( $this, 'shortcode_basesconsurso' ) );
		add_shortcode( 'preguntas_frecuentes', array( $this, 'shortcode_preguntasfrecuentes' ) );
		add_shortcode( 'quienes_somos1', array( $this, 'shortcode_quienessomos1' ) );
		add_shortcode( 'papagayo_publicidad', array( $this, 'publicidad_papagayo_prueba' ) );
		add_shortcode( 'form_contactanos', array( $this, 'shortcode_formcontactanos'));
		add_shortcode( 'certificado', array( $this, 'shortcode_certificado'));
	}


}
