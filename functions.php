<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'twentytwentyone_child_register_required_plugins' );
function twentytwentyone_child_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

	
		array(
			'name'      => 'Options for Twenty Twenty-One',
			'slug'      => 'options-for-twenty-twenty-one',
		),
		array(
			'name'      => 'Layout Grid Block',
			'slug'      => 'layout-grid',
		),
		array(
			'name'        => 'One Click Demo Import',
			'slug'        => 'one-click-demo-import',
		),
		array(
			'name'        => 'Getwid – Gutenberg Blocks',
			'slug'        => 'getwid',
		),
		array(
			'name'        => 'Gutenberg Blocks – Ultimate Addons for Gutenberg',
			'slug'        => 'ultimate-addons-for-gutenberg',
		),
		array(
			'name'        => 'Post/Page specific custom CSS',
			'slug'        => 'postpage-specific-custom-css',
		),
		array(
			'name'        => 'Recent Posts Widget With Thumbnails',
			'slug'        => 'recent-posts-widget-with-thumbnails',
		),
		array(
			'name'        => 'Blocks Animation: CSS Animations for Gutenberg Blocks',
			'slug'        => 'blocks-animation',
		),
		array(
			'name'        => 'Fullwidth Templates for Any Theme & Page Builder',
			'slug'        => 'fullwidth-templates',
		),

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'danskesite',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'plugins.php',            // Parent menu slug.
		'capability'   => 'manage_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}

function twenty_twenty_one_right_sidebar() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Right', 'twentytwentyone' ),
			'id'            => 'right-sidebar',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'twentytwentyone' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'twenty_twenty_one_right_sidebar' );



?>