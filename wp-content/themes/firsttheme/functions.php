<?php
/**
 * firstTheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package firstTheme
 */

if ( ! function_exists( 'firsttheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function firsttheme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on firstTheme, use a find and replace
		 * to change 'firsttheme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'firsttheme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'firsttheme' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'firsttheme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'firsttheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function firsttheme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'firsttheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'firsttheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function firsttheme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'firsttheme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'firsttheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'firsttheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function firsttheme_scripts() {
	wp_enqueue_style( 'firsttheme-style', get_stylesheet_uri() );
    wp_enqueue_style( 'firsttheme-styleMainLib', get_template_directory_uri() . "/assets/css/lib.css" );
	wp_enqueue_style( 'firsttheme-styleMain', get_template_directory_uri() . "/assets/css/main.css" );
    wp_enqueue_style( 'firsttheme-styleMainMedia', get_template_directory_uri() . "/assets/css/media.css" );

	wp_enqueue_script( 'firsttheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'firsttheme-styleLib', get_template_directory_uri() . '/assets/js/lib.js', array(), '20151215', true );
    wp_enqueue_script( 'firsttheme-styleCommon', get_template_directory_uri() . '/assets/js/common.js', array(), '20151215', true );


	wp_enqueue_script( 'firsttheme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'firsttheme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



//Створення типу запису, (продукт магазину)

add_action( 'init', 'register_post_types' );
function register_post_types(){
    register_post_type('products', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Продукти', // основное название для типа записи
            'singular_name'      => 'Продукт', // название для одной записи этого типа
            'add_new'            => 'Добавить ____', // для добавления новой записи
            'add_new_item'       => 'Добавление ____', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование ____', // для редактирования типа записи
            'new_item'           => 'Новое ____', // текст новой записи
            'view_item'          => 'Смотреть ____', // для просмотра записи этого типа.
            'search_items'       => 'Искать ____', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Продукти', // название меню
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null, // зависит от public
        'exclude_from_search' => null, // зависит от public
        'show_ui'             => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
        'show_in_nav_menus'   => null, // зависит от public
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 5,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => array('title','editor','thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => array(),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ) );
}

$args = array(

    /* (string) The title displayed on the options page. Required. */
    'page_title' => 'Контакти',

    /* (string) The title displayed in the wp-admin sidebar. Defaults to page_title */
    'menu_title' => 'Контакти',

    /* (string) The URL slug used to uniquely identify this options page.
    Defaults to a url friendly version of menu_title */
    'menu_slug' => '',

    /* (string) The capability required for this menu to be displayed to the user. Defaults to edit_posts.
    Read more about capability here: http://codex.wordpress.org/Roles_and_Capabilities */
    'capability' => 'edit_posts',

    /* (int|string) The position in the menu order this menu should appear.
    WARNING: if two menu items use the same position attribute, one of the items may be overwritten so that only one item displays!
    Risk of conflict can be reduced by using decimal instead of integer values, e.g. '63.3' instead of 63 (must use quotes).
    Defaults to bottom of utility menu items */
    'position' => false,

    /* (string) The slug of another WP admin page. if set, this will become a child page. */
    'parent_slug' => '',

    /* (string) The icon class for this menu. Defaults to default WordPress gear.
    Read more about dashicons here: https://developer.wordpress.org/resource/dashicons/ */
    'icon_url' => false,

    /* (boolean) If set to true, this options page will redirect to the first child page (if a child page exists).
    If set to false, this parent page will appear alongside any child pages. Defaults to true */
    'redirect' => true,

    /* (int|string) The '$post_id' to save/load data to/from. Can be set to a numeric post ID (123), or a string ('user_2').
    Defaults to 'options'. Added in v5.2.7 */
    'post_id' => 'options',

    /* (boolean)  Whether to load the option (values saved from this options page) when WordPress starts up.
    Defaults to false. Added in v5.2.8. */
    'autoload' => false,

    /* (string) The update button text. Added in v5.3.7. */
    'update_button'		=> __('Update', 'acf'),

    /* (string) The message shown above the form on submit. Added in v5.6.0. */
    'updated_message'	=> __("Options Updated", 'acf'),

);

acf_add_options_page( $args );

