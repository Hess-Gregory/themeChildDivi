<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

//Masquer la version de WordPress
function cs_remove_version() {
  return '';
  }
  add_filter('the_generator', 'cs_remove_version');

/* Add signature
-------------------------------------------------------------- */
function theme_xyz_header_metadata() { ?>
    <meta name="author" content="HESS Gregory by HERCOS-GROUP">
	<meta name="copyright" content="HERCOS Group." />
  <?php
}
add_action( 'wp_head', 'theme_xyz_header_metadata' );

//Supprimer les liens XML-RPC RSD
  remove_action ('wp_head', 'rsd_link');

// Supprimer Shortlink
  remove_action( 'wp_head', 'wp_shortlink_wp_head');
  remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );

//supprimer les arguments des ressources statiques
  function _remove_script_version( $src ){
  $parts = explode( '?ver', $src );
  return $parts[0];
  }
  add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
  add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

  //Supprimer api.w.org

  remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);

//Désactiver les émoticônes

remove_action ('wp_head', 'print_emoji_detection_script', 7);
remove_action ('admin_print_scripts', 'print_emoji_detection_script');
remove_action ('admin_print_styles', 'print_emoji_styles');
remove_action ('wp_print_styles', 'print_emoji_styles');

//Désactiver Embeds

function disable_embed(){
  wp_dequeue_script( 'wp-embed' );
  }
  add_action( 'wp_footer', 'disable_embed' );
 
 //Désactiver Heartbeat

	function stop_heartbeat() {
		wp_deregister_script('heartbeat');
	}
	 add_action( 'init', 'stop_heartbeat', 1 );

//Désactiver Dashicons en Front-end

	function wpdocs_dequeue_dashicon() {
  		if (current_user_can( 'update_core' )) {
      		return;
  			}
  		wp_deregister_style('dashicons');
  	}
	add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_dashicon' );

//Désactiver Contact Form 7 JS / CSS

  add_filter( 'wpcf7_load_js', '__return_false' );
  add_filter( 'wpcf7_load_css', '__return_false' );
  add_filter ('xmlrpc_enabled', '__return_false');
    remove_filter( 'the_content', 'wpautop' );
    remove_filter( 'the_excerpt', 'wpautop' );
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'feed_links_extra', 3 );
    remove_action('wp_head', 'feed_links', 2 );
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
    remove_action('wp_head', 'index_rel_link' );
    remove_action('wp_head', 'parent_post_rel_link', 10, 0);
    remove_action('wp_head', 'start_post_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

    function any_head_canonical( $output = '' ){
      if( is_home() ){$output = home_url( '/' ); }
      if( is_category() ){ global $cat; $output = get_category_link($cat); }
      if( is_tag() ){ global $tag_id; $output = get_tag_link($tag_id); }
      if( is_page() ){ global $page_id; $output = get_page_link($page_id); }
      if( is_single() ){ $output = get_permalink(); }
      if( $output != '' ){ echo '<link rel="canonical" href="',$output,'">'; }
      }
    add_action('wp_head', 'any_head_canonical');

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
  
function my_custom_dashboard_widgets() {
global $wp_meta_boxes;
 
wp_add_dashboard_widget('custom_help_widget', 'Theme Support', 'custom_dashboard_help');
}
 
function custom_dashboard_help() {
echo '<p>Bienvenue dans le thème Divi de Hercos-Group! Besoin d\'aide? Contactez le développeur <a href="mailto:info@hess-gregory.be">here</a>. </p>';
}

/* Include Extra Options

-------------------------------------------------------------- */

include get_stylesheet_directory() . '/extra-options/modules.php';



/* Include Admin One Click Options

-------------------------------------------------------------- */

include get_stylesheet_directory() . '/extra-options/admin/dct-panel.php';
