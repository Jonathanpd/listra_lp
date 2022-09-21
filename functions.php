<?php 

// Função para registrar os Scripts e o CSS
function listra_scripts() {
	// Desregistra o jQuery do Wordpress
	wp_deregister_script('jquery');

	// Registra o jQuery Novo
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/libs/jquery-1.11.2.min.js', array(), "1.11.2", true );

	// Registrar Plugins
	wp_register_script( 'plugins-script', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ), false, true );

	// Registrar Main
	wp_register_script( 'main-script', get_template_directory_uri() . '/js/main.js', array( 'jquery', 'plugins-script' ), false, true );

	// Registrar Modernizr
	wp_register_script( 'modernizr', get_template_directory_uri() . '/js/libs/modernizr.custom.45655.js', array(), "45655", false );

	// Carrega o Script
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'main-script' );	
}
add_action( 'wp_enqueue_scripts', 'listra_scripts' );

function listra_css() {
	wp_register_style( 'listra-style', get_template_directory_uri() . '/style.css', array(), false, false );
	wp_enqueue_style( 'listra-style' );
}
add_action( 'wp_enqueue_scripts', 'listra_css' );

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus');

// Registrar Menu
function register_my_menu() {
  register_nav_menu('menu-principal',__( 'Menu Principal' ));
}
add_action( 'init', 'register_my_menu' );

// Custom Images Sizes
function my_custom_sizes() {
	add_image_size('large', 1400, 380, true);
	add_image_size('medium', 768, 380, true);
}
add_action('after_setup_theme', 'my_custom_sizes');

// Custom Post Type

function custom_post_type_testimonials() {
	register_post_type('testimonials', array(
		'label' => 'Testemunhos',
		'description' => 'Testemunhos',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'testemunhos', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Testemunhos',
			'singular_name' => 'Testemunho',
			'menu_name' => 'Testemunhos',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Testemunho',
			'edit' => 'Editar',
			'edit_item' => 'Editar Testemunho',
			'new_item' => 'Novo Testemunho',
			'view' => 'Ver Testemunho',
			'view_item' => 'Ver Testemunho',
			'search_items' => 'Procurar Testemunhos',
			'not_found' => 'Nenhum Testemunho Encontrado',
			'not_found_in_trash' => 'Nenhum Testemunho Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_testimonials');

// ACF | Listra | Opções do Tema
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Opções gerais do tema'),
            'menu_title'    => __('Listra | Opções'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
		
		// Add sub page logo.
        $logo = acf_add_options_page(array(
            'page_title'  => __('Logo | Para todo o site'),
            'menu_title'  => __('Logo Geral'),
            'parent_slug' => $option_page['menu_slug'],
        ));

		// Add sub page header.
        $header = acf_add_options_page(array(
            'page_title'  => __('Header Settings'),
            'menu_title'  => __('Cabeçalho'),
            'parent_slug' => $option_page['menu_slug'],
        ));

		// Add sub page footer.
        $footer = acf_add_options_page(array(
            'page_title'  => __('Footer Settings'),
            'menu_title'  => __('Rodapé | exemplo'),
            'parent_slug' => $option_page['menu_slug'],
        ));

		// Add sub page sociais.
        $sociais = acf_add_options_page(array(
            'page_title'  => __('Social Settings'),
            'menu_title'  => __('Social | exemplo'),
            'parent_slug' => $option_page['menu_slug'],
        ));

		// Add sub page MODAL MOBILE.
        $logo = acf_add_options_page(array(
            'page_title'  => __('MOBILE MODAL | Solicitar Orçamento'),
            'menu_title'  => __('MODAL | MOBILE'),
            'parent_slug' => $option_page['menu_slug'],
        ));
    }
}

// Removendo Gutenberg | Voltando ao Editor Clássico.
add_filter('use_block_editor_for_post', '__return_false');

// Setup | support tittle tag
function setup_theme() 
{
 add_theme_support('title-tag');
}
add_action( 'after_setup_theme', 'setup_theme' );

// ? >