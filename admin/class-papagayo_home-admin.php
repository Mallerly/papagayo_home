<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       Juan Santiago
 * @since      1.0.0
 *
 * @package    Papagayo_home
 * @subpackage Papagayo_home/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Papagayo_home
 * @subpackage Papagayo_home/admin
 * @author     Juan Santiago <jjsantiago50@gmail.com>
 */
class Papagayo_home_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/papagayo_home-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/papagayo_home-admin.js', array( 'jquery' ), $this->version, false );

	}


	// 	Register Custom Post Type Aula Virtual
	//
	// Post Type Key: aulaVirtual
		function create_aulaVirtual_cpt() {

			$labels = array(
				'name'                  => __('Aula Virtual', 'Post Type General Name', 'bbva-com'),
				'singular_name'         => __('Aula Virtual', 'Post Type Singular Name', 'bbva-com'),
				'menu_name'             => __('Aula Virtual', 'bbva-com'),
				'name_admin_bar'        => __('Aula Virtual', 'bbva-com'),
				'archives'              => __('Aula Virtual Archivos', 'bbva-com'),
				'attributes'            => __('Aula Virtual Attributos', 'bbva-com'),
				'parent_item_colon'     => __('Parent Aula Virtual:', 'bbva-com'),
				'all_items'             => __('Aula Virtual', 'bbva-com'),
				'add_new_item'          => __('Añadir nueva', 'bbva-com'),
				'add_new'               => __('Añadir nueva', 'bbva-com'),
				'new_item'              => __('Nuevo Aula Virtual', 'bbva-com'),
				'edit_item'             => __('Editar Aula Virtual', 'bbva-com'),
				'update_item'           => __('Actualizar Aula Virtual', 'bbva-com'),
				'view_item'             => __('Ver Aula Virtual', 'bbva-com'),
				'view_items'            => __('Ver Aula Virtual', 'bbva-com'),
				'search_items'          => __('Buscar Aula Virtual', 'bbva-com'),
				'not_found'             => __('No se encontraron entradas.', 'bbva-com'),
				'not_found_in_trash'    => __('No se encontraron entradas en la papelera', 'bbva-com'),
				'featured_image'        => __('Imagen principal', 'bbva-com'),
				'set_featured_image'    => __('Establecer imagen destacada', 'bbva-com'),
				'remove_featured_image' => __('Eliminar imagen destacada', 'bbva-com'),
				'use_featured_image'    => __('Utilizar como imagen destacada', 'bbva-com'),
				'insert_into_item'      => __('Insert into programa papagayo', 'bbva-com'),
				'uploaded_to_this_item' => __('Subir esto a Aula Virtual', 'bbva-com'),
				'items_list'            => __('Aula Virtual lista', 'bbva-com'),
				'items_list_navigation' => __('Aula Virtual lista navegación', 'bbva-com'),
				'filter_items_list'     => __('Filtrar la lista del Aula Virtual', 'bbva-com'),
			);
			$args   = array(
				'label'               => __('Aula Virtual', 'bbva-com'),
				'description'         => __('Generación de Textos para la página de programa papagayo', 'bbva-com'),
				'labels'              => $labels,
				'menu_icon'           => 'dashicons-universal-access',
				'supports'            => array('title', 'editor', 'thumbnail', 'revisions', 'author'),
				'taxonomies'          => array('programa papagayo',),
				'public'              => true,
				'show_in_menu'        => 'edit.php?post_type=homepapagayo',
				'menu_position'       => 20,
				'show_in_admin_bar'   => false,
				'show_in_nav_menus'   => false,
				'can_export'          => true,
				'has_archive'         => true,
				'hierarchical'        => false,
				'exclude_from_search' => false,
				'show_in_rest'        => true,
				'publicly_queryable'  => true,
				'capability_type'     => 'post',
			);
			register_post_type('aulavirtual', $args);
		}




		// Register Custom Post Type Home Papagayo
		// Post Type Key: home 
		function create_homepapagayo_cpt() {

			$labels = array(
				'name'                  => __('Home Papagayo', 'Post Type General Name', 'bbva-com'),
				'singular_name'         => __('Home Papagayo', 'Post Type Singular Name', 'bbva-com'),
				'menu_name'             => __('Home Papagayo', 'bbva-com'),
				'name_admin_bar'        => __('Home Papagayo', 'bbva-com'),
				'archives'              => __('Home Papagayo Archivos', 'bbva-com'),
				'attributes'            => __('Home Papagayo Attributos', 'bbva-com'),
				'parent_item_colon'     => __('Parent Home Papagayo:', 'bbva-com'),
				'all_items'             => __('Todas las entradas', 'bbva-com'),
				'add_new_item'          => __('Añadir nueva', 'bbva-com'),
				'add_new'               => __('Añadir nueva', 'bbva-com'),
				'new_item'              => __('Nuevo Home Papagayo', 'bbva-com'),
				'edit_item'             => __('Editar Home Papagayo', 'bbva-com'),
				'update_item'           => __('Actualizar Home Papagayo', 'bbva-com'),
				'view_item'             => __('Ver Home Papagayo', 'bbva-com'),
				'view_items'            => __('Ver Home Papagayo', 'bbva-com'),
				'search_items'          => __('Buscar Home Papagayo', 'bbva-com'),
				'not_found'             => __('No se encontraron entradas.', 'bbva-com'),
				'not_found_in_trash'    => __('No se encontraron entradas en la papelera', 'bbva-com'),
				'featured_image'        => __('Imagen principal', 'bbva-com'),
				'set_featured_image'    => __('Establecer imagen destacada', 'bbva-com'),
				'remove_featured_image' => __('Eliminar imagen destacada', 'bbva-com'),
				'use_featured_image'    => __('Utilizar como imagen destacada', 'bbva-com'),
				'insert_into_item'      => __('Insert into sala prensa', 'bbva-com'),
				'uploaded_to_this_item' => __('Subir esto a Home Papagayo', 'bbva-com'),
				'items_list'            => __('Home Papagayo lista', 'bbva-com'),
				'items_list_navigation' => __('Home Papagayo lista navegación', 'bbva-com'),
				'filter_items_list'     => __('Filtrar la lista del Home Papagayo', 'bbva-com'),
			);
			$args   = array(
				'label'               => __('Home Papagayo', 'bbva-com'),
				'description'         => __('Generación de Textos para la página de Sala De Prensa', 'bbva-com'),
				'labels'              => $labels,
				'menu_icon'           => 'dashicons-camera',
				'supports'            => array('title', 'editor', 'thumbnail', 'revisions', 'author'),
				'taxonomies'          => array('sala prensa',),
				'public'              => true,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'menu_position'       => 20,
				'show_in_admin_bar'   => false,
				'show_in_nav_menus'   => false,
				'can_export'          => true,
				'has_archive'         => true,
				'hierarchical'        => false,
				'exclude_from_search' => false,
				'show_in_rest'        => true,
				'publicly_queryable'  => true,
				'capability_type'     => 'post'
			);
			register_post_type('homepapagayo', $args);
		}

		// Register Custom Post Type Fases Concurso
	// Post Type Key: fasesconcurso
		function create_fasesconcurso_cpt() {

			$labels = array(
				'name'                  => __('Fases Concurso', 'Post Type General Name', 'bbva-com'),
				'singular_name'         => __('Fases Concurso', 'Post Type Singular Name', 'bbva-com'),
				'menu_name'             => __('Fases Concurso', 'bbva-com'),
				'name_admin_bar'        => __('Fases Concurso', 'bbva-com'),
				'archives'              => __('Fases Concurso Archivos', 'bbva-com'),
				'attributes'            => __('Fases Concurso Attributos', 'bbva-com'),
				'parent_item_colon'     => __('Parent Fases Concurso:', 'bbva-com'),
				'all_items'             => __('Fases Concurso', 'bbva-com'),
				'add_new_item'          => __('Añadir nueva', 'bbva-com'),
				'add_new'               => __('Añadir nueva', 'bbva-com'),
				'new_item'              => __('Nuevo Fases Concurso', 'bbva-com'),
				'edit_item'             => __('Editar Fases Concurso', 'bbva-com'),
				'update_item'           => __('Actualizar Fases Concurso', 'bbva-com'),
				'view_item'             => __('Ver Fases Concurso', 'bbva-com'),
				'view_items'            => __('Ver Fases Concurso', 'bbva-com'),
				'search_items'          => __('Buscar Fases Concurso', 'bbva-com'),
				'not_found'             => __('No se encontraron entradas.', 'bbva-com'),
				'not_found_in_trash'    => __('No se encontraron entradas en la papelera', 'bbva-com'),
				'featured_image'        => __('Imagen principal', 'bbva-com'),
				'set_featured_image'    => __('Establecer imagen destacada', 'bbva-com'),
				'remove_featured_image' => __('Eliminar imagen destacada', 'bbva-com'),
				'use_featured_image'    => __('Utilizar como imagen destacada', 'bbva-com'),
				'insert_into_item'      => __('Insert into sala prensa', 'bbva-com'),
				'uploaded_to_this_item' => __('Subir esto a Fases Concurso', 'bbva-com'),
				'items_list'            => __('Fases Concurso lista', 'bbva-com'),
				'items_list_navigation' => __('Fases Concurso lista navegación', 'bbva-com'),
				'filter_items_list'     => __('Filtrar la lista del Fases Concurso', 'bbva-com'),
			);
			$args   = array(
				'label'               => __('Fases Concurso', 'bbva-com'),
				'description'         => __('Generación de Textos para la página de Fases Concurso', 'bbva-com'),
				'labels'              => $labels,
				'menu_icon'           => 'dashicons-camera',
				'supports'            => array('title', 'editor', 'thumbnail', 'revisions', 'author'),
				'taxonomies'          => array('sala prensa',),
				'public'              => true,
				'show_ui'             => true,
				'show_in_menu'        => 'edit.php?post_type=concursopapagayo',
				'menu_position'       => 20,
				'show_in_admin_bar'   => false,
				'show_in_nav_menus'   => false,
				'can_export'          => true,
				'has_archive'         => true,
				'hierarchical'        => false,
				'exclude_from_search' => false,
				'show_in_rest'        => true,
				'publicly_queryable'  => true,
				'capability_type'     => 'post'
			);
			register_post_type('fasesconcurso', $args);
		}


	// Register Custom Post Type  Certificado
	// Post Type Key: certificado
		function create_certificado_cpt() {

			$labels = array(
				'name'                  => __('Certificados', 'Post Type General Name', 'bbva-com'),
				'singular_name'         => __('Certificados', 'Post Type Singular Name', 'bbva-com'),
				'menu_name'             => __('Certificados', 'bbva-com'),
				'name_admin_bar'        => __('Certificados', 'bbva-com'),
				'archives'              => __('Certificados Archivos', 'bbva-com'),
				'attributes'            => __('Certificados Attributos', 'bbva-com'),
				'parent_item_colon'     => __('Parent Certificados:', 'bbva-com'),
				'all_items'             => __('Certificados', 'bbva-com'),
				'add_new_item'          => __('Añadir nueva', 'bbva-com'),
				'add_new'               => __('Añadir nueva', 'bbva-com'),
				'new_item'              => __('Nuevo Certificados', 'bbva-com'),
				'edit_item'             => __('Editar Certificados', 'bbva-com'),
				'update_item'           => __('Actualizar Certificados', 'bbva-com'),
				'view_item'             => __('Ver Certificados', 'bbva-com'),
				'view_items'            => __('Ver Certificados', 'bbva-com'),
				'search_items'          => __('Buscar Certificados', 'bbva-com'),
				'not_found'             => __('No se encontraron entradas.', 'bbva-com'),
				'not_found_in_trash'    => __('No se encontraron entradas en la papelera', 'bbva-com'),
				'featured_image'        => __('Imagen principal', 'bbva-com'),
				'set_featured_image'    => __('Establecer imagen destacada', 'bbva-com'),
				'remove_featured_image' => __('Eliminar imagen destacada', 'bbva-com'),
				'use_featured_image'    => __('Utilizar como imagen destacada', 'bbva-com'),
				'insert_into_item'      => __('Insert into sala prensa', 'bbva-com'),
				'uploaded_to_this_item' => __('Subir esto a Certificados', 'bbva-com'),
				'items_list'            => __('Certificados lista', 'bbva-com'),
				'items_list_navigation' => __('Certificados lista navegación', 'bbva-com'),
				'filter_items_list'     => __('Filtrar la lista del Certificados', 'bbva-com'),
			);
			$args   = array(
				'label'               => __('Certificados', 'bbva-com'),
				'description'         => __('Generación de Textos para la página de Certificados', 'bbva-com'),
				'labels'              => $labels,
				'menu_icon'           => 'dashicons-camera',
				'supports'            => array('title', 'editor', 'thumbnail', 'revisions', 'author'),
				'taxonomies'          => array('sala prensa',),
				'public'              => true,
				'show_ui'             => true,
				'show_in_menu'        => 'edit.php?post_type=concursopapagayo',
				'menu_position'       => 20,
				'show_in_admin_bar'   => false,
				'show_in_nav_menus'   => false,
				'can_export'          => true,
				'has_archive'         => true,
				'hierarchical'        => false,
				'exclude_from_search' => false,
				'show_in_rest'        => true,
				'publicly_queryable'  => true,
				'capability_type'     => 'post'
			);
			register_post_type('certificado', $args);
		}

		// Register Custom Post Type Concurso Papagayo
	// Post Type Key: concursopapagayo
		function create_concursopapagayo_cpt() {

			$labels = array(
				'name'                  => __('Concurso Papagayo', 'Post Type General Name', 'bbva-com'),
				'singular_name'         => __('Concurso Papagayo', 'Post Type Singular Name', 'bbva-com'),
				'menu_name'             => __('Concurso Papagayo', 'bbva-com'),
				'name_admin_bar'        => __('Concurso Papagayo', 'bbva-com'),
				'archives'              => __('Concurso Papagayo Archivos', 'bbva-com'),
				'attributes'            => __('Concurso Papagayo Attributos', 'bbva-com'),
				'parent_item_colon'     => __('Parent Concurso Papagayo:', 'bbva-com'),
				'all_items'             => __('Todas las entradas', 'bbva-com'),
				'add_new_item'          => __('Añadir nueva', 'bbva-com'),
				'add_new'               => __('Añadir nueva', 'bbva-com'),
				'new_item'              => __('Nuevo Concurso Papagayo', 'bbva-com'),
				'edit_item'             => __('Editar Concurso Papagayo', 'bbva-com'),
				'update_item'           => __('Actualizar Concurso Papagayo', 'bbva-com'),
				'view_item'             => __('Ver Concurso Papagayo', 'bbva-com'),
				'view_items'            => __('Ver Concurso Papagayo', 'bbva-com'),
				'search_items'          => __('Buscar Concurso Papagayo', 'bbva-com'),
				'not_found'             => __('No se encontraron entradas.', 'bbva-com'),
				'not_found_in_trash'    => __('No se encontraron entradas en la papelera', 'bbva-com'),
				'featured_image'        => __('Imagen principal', 'bbva-com'),
				'set_featured_image'    => __('Establecer imagen destacada', 'bbva-com'),
				'remove_featured_image' => __('Eliminar imagen destacada', 'bbva-com'),
				'use_featured_image'    => __('Utilizar como imagen destacada', 'bbva-com'),
				'insert_into_item'      => __('Insert into sala prensa', 'bbva-com'),
				'uploaded_to_this_item' => __('Subir esto a Concurso Papagayo', 'bbva-com'),
				'items_list'            => __('Concurso Papagayo lista', 'bbva-com'),
				'items_list_navigation' => __('Concurso Papagayo lista navegación', 'bbva-com'),
				'filter_items_list'     => __('Filtrar la lista del Concurso Papagayo', 'bbva-com'),
			);
			$args   = array(
				'label'               => __('Concurso Papagayo', 'bbva-com'),
				'description'         => __('Generación de Textos para la página de Concurso Papagayo', 'bbva-com'),
				'labels'              => $labels,
				'menu_icon'           => 'dashicons-camera',
				'supports'            => array('title', 'editor', 'thumbnail', 'revisions', 'author'),
				'taxonomies'          => array('sala prensa',),
				'public'              => true,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'menu_position'       => 20,
				'show_in_admin_bar'   => false,
				'show_in_nav_menus'   => false,
				'can_export'          => true,
				'has_archive'         => true,
				'hierarchical'        => false,
				'exclude_from_search' => false,
				'show_in_rest'        => true,
				'publicly_queryable'  => true,
				'capability_type'     => 'post'
			);
			register_post_type('concursopapagayo', $args);
		}

		// 	Register Custom Post Type Bases Concurso
	//
	// Post Type Key: basesconsurso
		function create_basesconsurso_cpt() {

			$labels = array(
				'name'                  => __('Bases Concurso', 'Post Type General Name', 'bbva-com'),
				'singular_name'         => __('Bases Concurso', 'Post Type Singular Name', 'bbva-com'),
				'menu_name'             => __('Bases Concurso', 'bbva-com'),
				'name_admin_bar'        => __('Bases Concurso', 'bbva-com'),
				'archives'              => __('Bases Concurso Archivos', 'bbva-com'),
				'attributes'            => __('Bases Concurso Attributos', 'bbva-com'),
				'parent_item_colon'     => __('Parent Bases Concurso:', 'bbva-com'),
				'all_items'             => __('Todas las entradas', 'bbva-com'),
				'add_new_item'          => __('Añadir nueva', 'bbva-com'),
				'add_new'               => __('Añadir nueva', 'bbva-com'),
				'new_item'              => __('Nuevo Bases Concurso', 'bbva-com'),
				'edit_item'             => __('Editar Bases Concurso', 'bbva-com'),
				'update_item'           => __('Actualizar Bases Concurso', 'bbva-com'),
				'view_item'             => __('Ver Bases Concurso', 'bbva-com'),
				'view_items'            => __('Ver Bases Concurso', 'bbva-com'),
				'search_items'          => __('Buscar Bases Concurso', 'bbva-com'),
				'not_found'             => __('No se encontraron entradas.', 'bbva-com'),
				'not_found_in_trash'    => __('No se encontraron entradas en la papelera', 'bbva-com'),
				'featured_image'        => __('Imagen principal', 'bbva-com'),
				'set_featured_image'    => __('Establecer imagen destacada', 'bbva-com'),
				'remove_featured_image' => __('Eliminar imagen destacada', 'bbva-com'),
				'use_featured_image'    => __('Utilizar como imagen destacada', 'bbva-com'),
				'insert_into_item'      => __('Insert into programa papagayo', 'bbva-com'),
				'uploaded_to_this_item' => __('Subir esto a Bases Concurso', 'bbva-com'),
				'items_list'            => __('Bases Concurso lista', 'bbva-com'),
				'items_list_navigation' => __('Bases Concurso lista navegación', 'bbva-com'),
				'filter_items_list'     => __('Filtrar la lista del Bases Concurso', 'bbva-com'),
			);
			$args   = array(
				'label'               => __('Bases Concurso', 'bbva-com'),
				'description'         => __('Generación de Textos para la página de Bases Concurso', 'bbva-com'),
				'labels'              => $labels,
				'menu_icon'           => 'dashicons-universal-access',
				'supports'            => array('title', 'editor', 'thumbnail', 'revisions', 'author'),
				'taxonomies'          => array('programa papagayo',),
				'public'              => true,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'menu_position'       => 20,
				'show_in_admin_bar'   => false,
				'show_in_nav_menus'   => false,
				'can_export'          => true,
				'has_archive'         => true,
				'hierarchical'        => false,
				'exclude_from_search' => false,
				'show_in_rest'        => true,
				'publicly_queryable'  => true,
				'capability_type'     => 'post',
			);
			register_post_type('basesconsurso', $args);
		}

	// 	Register Custom Post Type Preguntas Frecuentes
	// Post Type Key: basesconsurso
		function create_preguntasfrecuentes_cpt() {

			$labels = array(
				'name'                  => __('Preguntas Frecuentes', 'Post Type General Name', 'bbva-com'),
				'singular_name'         => __('Preguntas Frecuentes', 'Post Type Singular Name', 'bbva-com'),
				'menu_name'             => __('Preguntas Frecuentes', 'bbva-com'),
				'name_admin_bar'        => __('Preguntas Frecuentes', 'bbva-com'),
				'archives'              => __('Preguntas Frecuentes Archivos', 'bbva-com'),
				'attributes'            => __('Preguntas Frecuentes Attributos', 'bbva-com'),
				'parent_item_colon'     => __('Parent Preguntas Frecuentes:', 'bbva-com'),
				'all_items'             => __('Todas las entradas', 'bbva-com'),
				'add_new_item'          => __('Añadir nueva', 'bbva-com'),
				'add_new'               => __('Añadir nueva', 'bbva-com'),
				'new_item'              => __('Nuevo Preguntas Frecuentes', 'bbva-com'),
				'edit_item'             => __('Editar Preguntas Frecuentes', 'bbva-com'),
				'update_item'           => __('Actualizar Preguntas Frecuentes', 'bbva-com'),
				'view_item'             => __('Ver Preguntas Frecuentes', 'bbva-com'),
				'view_items'            => __('Ver Preguntas Frecuentes', 'bbva-com'),
				'search_items'          => __('Buscar Preguntas Frecuentes', 'bbva-com'),
				'not_found'             => __('No se encontraron entradas.', 'bbva-com'),
				'not_found_in_trash'    => __('No se encontraron entradas en la papelera', 'bbva-com'),
				'featured_image'        => __('Imagen principal', 'bbva-com'),
				'set_featured_image'    => __('Establecer imagen destacada', 'bbva-com'),
				'remove_featured_image' => __('Eliminar imagen destacada', 'bbva-com'),
				'use_featured_image'    => __('Utilizar como imagen destacada', 'bbva-com'),
				'insert_into_item'      => __('Insert into programa papagayo', 'bbva-com'),
				'uploaded_to_this_item' => __('Subir esto a Preguntas Frecuentes', 'bbva-com'),
				'items_list'            => __('Preguntas Frecuentes lista', 'bbva-com'),
				'items_list_navigation' => __('Preguntas Frecuentes lista navegación', 'bbva-com'),
				'filter_items_list'     => __('Filtrar la lista del Preguntas Frecuentes', 'bbva-com'),
			);
			$args   = array(
				'label'               => __('Preguntas Frecuentes', 'bbva-com'),
				'description'         => __('Generación de Textos para la página de Preguntas Frecuentes', 'bbva-com'),
				'labels'              => $labels,
				'menu_icon'           => 'dashicons-universal-access',
				'supports'            => array('title', 'editor', 'thumbnail', 'revisions', 'author'),
				'taxonomies'          => array('programa papagayo',),
				'public'              => true,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'menu_position'       => 20,
				'show_in_admin_bar'   => false,
				'show_in_nav_menus'   => false,
				'can_export'          => true,
				'has_archive'         => true,
				'hierarchical'        => false,
				'exclude_from_search' => false,
				'show_in_rest'        => true,
				'publicly_queryable'  => true,
				'capability_type'     => 'post',
			);
			register_post_type('preguntasfrecuentes', $args);
		}


	// 	Register Custom Post Type Quienes Somos Papagayo
	// Post Type Key: quienes somos
		
function create_quienessomos1_cpt() {

			$labels = array(
				'name'                  => __('Quienes Somos', 'Post Type General Name', 'bbva-com'),
				'singular_name'         => __('Quienes Somos', 'Post Type Singular Name', 'bbva-com'),
				'menu_name'             => __('Quienes Somos', 'bbva-com'),
				'name_admin_bar'        => __('Quienes Somos', 'bbva-com'),
				'archives'              => __('Quienes Somos Archivos', 'bbva-com'),
				'attributes'            => __('Quienes Somos Attributos', 'bbva-com'),
				'parent_item_colon'     => __('Parent Quienes Somos:', 'bbva-com'),
				'all_items'             => __('Todas las entradas', 'bbva-com'),
				'add_new_item'          => __('Añadir nueva', 'bbva-com'),
				'add_new'               => __('Añadir nueva', 'bbva-com'),
				'new_item'              => __('Nuevo Quienes Somos', 'bbva-com'),
				'edit_item'             => __('Editar Quienes Somos', 'bbva-com'),
				'update_item'           => __('Actualizar Quienes Somos', 'bbva-com'),
				'view_item'             => __('Ver Quienes Somos', 'bbva-com'),
				'view_items'            => __('Ver Quienes Somos', 'bbva-com'),
				'search_items'          => __('Buscar Quienes Somos', 'bbva-com'),
				'not_found'             => __('No se encontraron entradas.', 'bbva-com'),
				'not_found_in_trash'    => __('No se encontraron entradas en la papelera', 'bbva-com'),
				'featured_image'        => __('Imagen principal', 'bbva-com'),
				'set_featured_image'    => __('Establecer imagen destacada', 'bbva-com'),
				'remove_featured_image' => __('Eliminar imagen destacada', 'bbva-com'),
				'use_featured_image'    => __('Utilizar como imagen destacada', 'bbva-com'),
				'insert_into_item'      => __('Insert into programa papagayo', 'bbva-com'),
				'uploaded_to_this_item' => __('Subir esto a Quienes Somos', 'bbva-com'),
				'items_list'            => __('Quienes Somos lista', 'bbva-com'),
				'items_list_navigation' => __('Quienes Somos lista navegación', 'bbva-com'),
				'filter_items_list'     => __('Filtrar la lista del Quienes Somos', 'bbva-com'),
			);
			$args   = array(
				'label'               => __('Quienes Somos', 'bbva-com'),
				'description'         => __('Generación de Textos para la página de Preguntas Frecuentes', 'bbva-com'),
				'labels'              => $labels,
				'menu_icon'           => 'dashicons-universal-access',
				'supports'            => array('title', 'editor', 'thumbnail', 'revisions', 'author'),
				'taxonomies'          => array('programa papagayo',),
				'public'              => true,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'menu_position'       => 20,
				'show_in_admin_bar'   => false,
				'show_in_nav_menus'   => false,
				'can_export'          => true,
				'has_archive'         => true,
				'hierarchical'        => false,
				'exclude_from_search' => false,
				'show_in_rest'        => true,
				'publicly_queryable'  => true,
				'capability_type'     => 'post',
			);
			register_post_type('quienessomos1', $args);
		}



		//////////	Boton Editor Wordpres Imagen	//////////////////////


		function add_my_media_button() { 
			echo '<a href="#" id="insert-my-media-publicidadpapagayo" class="button">Añadir Banner</a>';
		}


		//////   	Pagina de Configuracion para el contactenos    /////////////////////////////

		public function add_menu_contactos() {

			add_submenu_page(
				'options-general.php',
				'Configuración Banner Contactos',
				'Configuración Banner Contactos',
				'manage_options',
				'options-contactos',
				array($this, 'page_configu_contactos')
			);
		}

		public function page_configu_contactos() {
			include(plugin_dir_path(__FILE__) . 'partials/page_configuration_contactos.php');
		}


		public function add_menu_aulavirtual() {

			add_submenu_page(
				'options-general.php',
				'Configuración Aula Virtual',
				'Configuración Aula Virtual',
				'manage_options',
				'options-aulavirtual',
				array($this, 'page_configu_aulavirtual')
			);
		}

		public function page_configu_aulavirtual() {
			include(plugin_dir_path(__FILE__) . 'partials/page_configuration_aulavirtual.php');
		}
		

		//////////////  METABOX AULA VIRTUAL   ////////////

		function aulavirtual_meta_box( $meta_boxes ) {
			$prefix = 'prefix-aulavirtual';

			$meta_boxes[] = array(
				'id' => 'aulavirtual',
				'title' => esc_html__( 'Informacion Aula Virtual', 'metabox-online-generator' ),
				'post_types' => 'aulavirtual',
				'context' => 'advanced',
				'priority' => 'default',
				'autosave' => true,
				'fields' => array(
					
					array(
						'id' => $prefix . 'file_input_1',
						'type' => 'file_input',
						'name' => esc_html__( 'Archivo a descargar', 'metabox-online-generator' ),
					),
				),
			);

			return $meta_boxes;
		}

			//////////////  METABOX certificados   ////////////

		function certificado_meta_box( $meta_boxes ) {
			$prefix = 'prefix-certificado';

			$meta_boxes[] = array(
				'id' => 'certificado',
				'title' => esc_html__( ' Certificados', 'metabox-online-generator' ),
				'post_types' => 'certificado',
				'context' => 'advanced',
				'priority' => 'default',
				'autosave' => true,
				'fields' => array(
					array(
						'id' => $prefix . 'text_1',
						'type' => 'text',
						'name' => esc_html__( 'Nombre botón', 'metabox-online-generator' ),
					),


					array(
						'id' => $prefix . 'text_2',
						'type' => 'text',
						'name' => esc_html__( 'url boton', 'metabox-online-generator' ),
					),
					array(
						'id' => $prefix . 'text_3',
						'type' => 'text',
						'name' => esc_html__( 'Descripción', 'metabox-online-generator' ),
					),
					array(
						'id' => $prefix . 'text_4',
						'type' => 'text',
						'name' => esc_html__( 'Periodo Escolar ', 'metabox-online-generator' ),
					),
					array(
						'id' => $prefix . 'file_input_1',
						'type' => 'file_input',
						'name' => esc_html__( 'Archivo a descargar', 'metabox-online-generator' ),
					),
				),

			);

			return $meta_boxes;
		}



		///////////////////////////

		public function register_setting_field() {
			register_setting('page_configuracion_contactos', 'contenido', 'strval');
			register_setting('page_configuracion_contactos', 'descripcion', 'strval');
			register_setting('page_configuracion_contactos', 'titulo2', 'strval');
			register_setting('page_configuracion_contactos', 'descripcion2', 'strval');

		}

		public function register_setting_field_aulavirtual() {
			register_setting('page_configuracion_aulavirtual', 'urlvideo', 'strval');
			register_setting('page_configuracion_aulavirtual', 'titulovideo', 'strval');
			register_setting('page_configuracion_aulavirtual', 'descripcionvideo', 'strval');
			


		}



	
}
