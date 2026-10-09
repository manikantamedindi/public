<?php
	
// Check for Timber
if (!class_exists('Timber')){
	echo 'Timber not activated. Make sure you activate the plugin in <a href="/wp-admin/plugins.php#timber">/wp-admin/plugins.php</a>';
	return;
}

// Add ACF options settings
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

// MailChimp
if (function_exists('acf_mailchimp_signup__register_fields')) {
	require_once('acf/acf.php');
	acf_mailchimp_signup__register_fields();
}

class GridBase extends TimberSite {

	public function __construct() {
		add_theme_support('post-formats');
		add_theme_support('post-thumbnails');
		add_theme_support('menus');
		add_filter('timber_context', array($this, 'add_to_context'));
		add_filter('get_twig', array($this, 'add_to_twig'));
		add_action('widgets_init', array($this, 'register_blog_sidebar'));
		add_action('wp_enqueue_scripts', array($this, 'register_scripts'));
		add_action('init', array($this, 'register_post_types'));
		add_action('init', array($this, 'register_taxonomies'));
		add_action('init', array($this, 'add_image_sizes'));										// Add custom images

		// add_filter('wp_generate_attachment_metadata','bw_filter');
		add_filter('show_admin_bar', '__return_false');													// Hide admin bar
		remove_action( 'wp_head', 'rsd_link');																	// Hide RSD
		remove_action( 'wp_head', 'wlwmanifest_link');
		remove_action( 'wp_head', 'index_rel_link');
		remove_action( 'wp_head', 'parent_post_rel_link');
		remove_action( 'wp_head', 'start_post_rel_link');
		remove_action( 'wp_head', 'adjacent_posts_rel_link');
		remove_action( 'wp_head', 'wp_generator');
		remove_action( 'wp_head', 'feed_links', 2 );
		remove_action( 'wp_head', 'feed_links_extra', 3);
		remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );

		parent::__construct();
	}

	public function add_image_sizes() {
		// add_image_size( 'article_index', 1100, 1100, true );
	}

	public function register_scripts() {
		wp_register_style( 'imse-journal', get_template_directory_uri() . '/style.css','','', 'screen' );
		wp_enqueue_style( 'imse-journal' );
	}

	public function register_post_types(){
		//this is where you can register custom post types	
	}

	public function register_taxonomies(){
		// this is where you can register custom taxonomies
	}

	public function add_to_context($context){
		// $context['all_categories'] = Timber::get_terms('category');
		// $context['edit_link'] = get_edit_post_link($post->ID,'Edit');
		$context['is_admin'] = current_user_can( 'manage_options' );
		$context['menu_main'] = new TimberMenu('Main Menu');
		$context['menu_footer'] = new TimberMenu('Footer');
		$context['options'] = get_fields('options');
		$context['site'] = $this;
		if(function_exists('acf_mailchimp_signup__url')) {
			$context['mailchimp_url'] = acf_mailchimp_signup__url();
		}
		return $context;
	}

	public function add_to_twig($twig){

		// -------------------------
		// SEO / Metadata filters
		// -------------------------

		// Checks for shortened title, returns if it exists 
		// and defaults to normal title if not
		$title_check = new Twig_SimpleFilter('title_check', function($pid) {

			if(get_field('short_title', $pid)):
				$post_title = get_field('short_title', $pid);
			else:
				$post_title = get_the_title($pid);
			endif;

			return $post_title;
		});

		// Checks for title value based on field and ID, if nothing, page title is used
		$meta_title_check = new Twig_SimpleFilter('meta_title_check', function($post_id, $field_name) {
			$title = get_field($field_name, $post_id);
			if($title):
				return $title;
			else:
				return get_the_title($post_id);
			endif;
		});

		// Checks for title value based on field and ID, if nothing, page description is used
		$desc_check = new Twig_SimpleFilter('desc_check', function($post_id, $field_name) {
			$desc = get_field($field_name, $post_id);
			$meta_desc = get_field('meta_description', $post_id);
			if($desc):
				return $desc;
			elseif(!$desc && $meta_desc):
				return $meta_desc;
			else:
				return bloginfo('description');
			endif;
		});

		// Checks for title value based on field and ID, if nothing, site description is used
		$meta_desc_check = new Twig_SimpleFilter('meta_desc_check', function($post_id, $field_name) {
			$meta_desc = get_field($field_name, $post_id);
			if($meta_desc):
				return $meta_desc;
			else:
				return bloginfo('description');
			endif;
		});

		// Checks for title value based on field and ID, if nothing, page touch icon is used
		$img_check = new Twig_SimpleFilter('img_check', function($post_id, $field_name) {
			$img = get_field($field_name, $post_id);
			if($img):
				return $img['url'];
			else:
				$touch_icon = get_field('touch_icons', 'options');
				return $touch_icon['url'];
			endif;
		});

		// Create the admin button
		$admin_button = new Twig_SimpleFilter('admin_button', function($post_id) {
			return get_edit_post_link($post_id, 'Edit');
		});

		$smooth_url = new Twig_SimpleFilter('smooth_url', function($url) {
			return str_replace('http://', '', $url);
		});

		$secure_ig = new Twig_SimpleFilter('secure_ig', function($url) {
			return str_replace('http://', 'https://', $url);
		});

		$twig->addFilter($secure_ig);
		$twig->addFilter($smooth_url);
		$twig->addFilter($admin_button);
		$twig->addFilter($title_check);
		$twig->addFilter($meta_title_check);
		$twig->addFilter($desc_check);
		$twig->addFilter($meta_desc_check);
		$twig->addFilter($img_check);
		return $twig;
	}
}
new GridBase();
