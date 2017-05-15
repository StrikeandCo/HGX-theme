<?php 
/*
 * functions
 * semplice.child.theme
 */
require_once get_stylesheet_directory() . '/lib/class-tgm-plugin-activation.php';

 
add_action( 'tgmpa_register', 'theme_register_required_plugins' );
 
//require_once dirname( __FILE__ ) . '/lib/example.php';

function theme_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin bundled with a theme.
		/*array(
			'name'               => 'Advanced Custom Fields PRO', // The plugin name.
			'slug'               => 'advanced-custom-fields-pro', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/lib/plugins/advanced-custom-fields-pro.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),
		*/
   );
	
	
	$config = array(
		'id'           => 'theme',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		/*
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'theme' ),
			'menu_title'                      => __( 'Install Plugins', 'theme' ),
			/* translators: %s: plugin name. * /
			'installing'                      => __( 'Installing Plugin: %s', 'theme' ),
			/* translators: %s: plugin name. * /
			'updating'                        => __( 'Updating Plugin: %s', 'theme' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'theme' ),
			'notice_can_install_required'     => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'theme'
			),
			'notice_can_install_recommended'  => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'theme'
			),
			'notice_ask_to_update'            => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'theme'
			),
			'notice_ask_to_update_maybe'      => _n_noop(
				/* translators: 1: plugin name(s). * /
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'theme'
			),
			'notice_can_activate_required'    => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'theme'
			),
			'notice_can_activate_recommended' => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'theme'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'theme'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'theme'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'theme'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'theme' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'theme' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'theme' ),
			/* translators: 1: plugin name. * /
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'theme' ),
			/* translators: 1: plugin name. * /
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'theme' ),
			/* translators: 1: dashboard link. * /
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'theme' ),
			'dismiss'                         => __( 'Dismiss this notice', 'theme' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'theme' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'theme' ),

			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
		),
		*/
	);
	tgmpa( $plugins, $config );
}

/*
TAKING A MODULAR APPROACH TO CONTENT
Pages can still be built from scratch using the Semplice editor, but a modular approach will be taken in order to maintain the quality of the design in most pages that Semplice cannot accomodate out of the box.

To do this, we will develop custom post types that have no URL/cannot be accessed publicly,  but can be access within Wordpress's basic loop. This will allow us to add quotes, coaches, and other types of content that can be edited easily without breaking layout.

*/

//custom post type for coaches
add_action( 'init', 'create_posttype' );
function create_posttype() {
  register_post_type( 'coaches',
    array(
      'labels' => array(
        'name' => __( 'Coaches' ),
        'singular_name' => __( 'Coach' )
      ),
			'public' => true,
      'publicly_queryable' => false,
			'show_in_nav_menus' => false,
      'has_archive' => true,
      'rewrite' => array('slug' => 'coaches'),
			'supports' => array( 
				'title', 
				'editor', 
				'author', 
				'thumbnail', 
				'excerpt'
			)
    )
  );
	register_post_type( 'quotes',
    array(
      'labels' => array(
        'name' => __( 'Quotes' ),
        'singular_name' => __( 'Quote' )
      ),
			'public' => true,
      'publicly_queryable' => false,
			'show_in_nav_menus' => false,
      'has_archive' => true,
      'rewrite' => array('slug' => 'quotes'),
			'supports' => array( 
				'title' 
			)
    )
  );
	register_post_type( 'plans',
    array(
      'labels' => array(
        'name' => __( 'Plans and Pricing' ),
        'singular_name' => __( 'Plan' )
      ),
			'public' => true,
      'publicly_queryable' => false,
			'show_in_nav_menus' => false,
      'has_archive' => true,
      'rewrite' => array('slug' => 'plans'),
			'supports' => array( 
				'title', 
				'editor', 
				'author', 
				'thumbnail', 
				'excerpt'
			)
    )
  );
}

//extend ACF
if( !class_exists('acf') ) {

	// define acf lite
    define('ACF_LITE' , false );
	
	// include acf core
	require get_template_directory() . '/includes/acf/advanced-custom-fields/acf.php';
	
	// is gallery plugin active?
	if(!function_exists('acfgp_register_fields')) {
		require get_template_directory() . '/includes/acf/add-ons/acf-gallery/acf-gallery.php';
	}

	// is options page plugin active?
	if(!class_exists('acf_options_page_plugin')) {
		require get_template_directory() . '/includes/acf/add-ons/acf-options-page/acf-options-page.php';
	}
	
	// is repeater plugin active?
	if(!class_exists('acf_register_repeater_field')) {
		require get_template_directory() . '/includes/acf/add-ons/acf-repeater/acf-repeater.php';
	}
}

	require get_stylesheet_directory() . '/acf/coaches.php';
	require get_stylesheet_directory() . '/acf/homepage-fields.php';


//extend oembed to allow autplay in vimeo videos
function my_oembed_fetch_url( $provider, $url, $args ) {

	if ( strpos( $provider, 'vimeo.com' ) !== false)  {

		if ( isset( $args['autoplay'] ) ) {
			$provider = add_query_arg( 'autoplay', absint( $args['autoplay'] ), $provider );
		}
		if ( isset( $args['color'] ) && preg_match( '/^[a-f0-9]{6}$/i', $args['color'] ) ) {
			$provider = add_query_arg( 'color', $args['color'], $provider );
		}
		if ( isset( $args['portrait'] ) ) {
			$provider = add_query_arg( 'portrait', absint( $args['portrait'] ), $provider );
		}
		if ( isset( $args['title'] ) ) {
			$provider = add_query_arg( 'title', absint( $args['title'] ), $provider );
		}
		if ( isset( $args['byline'] ) ) {
			$provider = add_query_arg( 'byline', absint( $args['byline'] ), $provider );
		}

	}
	elseif (strpos( $provider, 'youtu.be' ) !== false) {
		if ( isset( $args['autoplay'] ) ) {
			$provider = add_query_arg( 'autoplay', absint( $args['autoplay'] ), $provider );
		}
	}

	return $provider;

}
add_filter( 'oembed_fetch_url', 'my_oembed_fetch_url', 10, 3 );

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<link rel="stylesheet" href="/wp-content/themes/semplice-child/admin.css" type="text/css" />';
}

//register custom menus
function register_menus() {
  register_nav_menus(
    array(
      'footer-menu-1' => __( 'Footer Menu 1' ),
      'footer-menu-2' => __( 'Footer Menu 2' ),
      'mobile-main-menu' => __( 'Mobile Main Menu' )
    )
  );
}
add_action( 'init', 'register_menus' );

//add logo upload to theme customizer
function themeslug_theme_customizer( $wp_customize ) {
    $wp_customize->add_section( 'themeslug_logo_section' , array(
    'title'       => __( 'Logo', 'themeslug' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
) );
	$wp_customize->add_setting( 'themeslug_logo' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
    'label'    => __( 'Logo', 'themeslug' ),
    'section'  => 'themeslug_logo_section',
    'settings' => 'themeslug_logo',
) ) );
}
add_action( 'customize_register', 'themeslug_theme_customizer' );


function prefix_customizer_register( $wp_customize ) {
	//add new section for company info
	$wp_customize->add_section( 'company_info', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Company Information', 'textdomain' ),
	    'description' => '',
	) );
	//add new section for nav cta
	$wp_customize->add_section( 'nav_cta', array(
	    'priority' => 1,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Main Nav CTA', 'textdomain' ),
	    'description' => 'Add a CTA in the main nav',
	) );
	//add cta label setting
	$wp_customize->add_setting( 'nav_cta_label', array(
		'default' => 'Get Started',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'section' => 'nav_cta'
	) );
	//add cta label control
	$wp_customize->add_control( 'nav_cta_label', array(
			'type' => 'text',
			'priority' => 10,
			'section' => 'nav_cta',
			'label' => __( 'Nav CTA Label', 'textdomain' ),
			'description' => 'Add copy for the CTA in the main nav',
	) );
	//add cta url setting
	$wp_customize->add_setting( 'nav_cta_url', array(
		'default' => '/getstarted/',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'section' => 'nav_cta'
	) );
	//add cta label control
	$wp_customize->add_control( 'nav_cta_url', array(
			'type' => 'text',
			'priority' => 10,
			'section' => 'nav_cta',
			'label' => __( 'Nav CTA URL', 'textdomain' ),
			'description' => 'Add a URL for the nav CTA',
	) );
	//add phone number
	$wp_customize->add_setting( 'company_phone_number', array(
		'default' => '650-218-5836',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
	) );
	$wp_customize->add_control( 'company_phone_number', array(
			'type' => 'text',
			'priority' => 10,
			'section' => 'company_info',
			'label' => __( 'Phone Number', 'textdomain' ),
			'description' => 'Add a phone number for your business with this syntax: 555-555-5555',
	) );
	
	//add e-mail
	$wp_customize->add_setting( 'company_email', array(
		'default' => 'hello@hgxfit.com',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
	) );
	$wp_customize->add_control( 'company_email', array(
			'type' => 'text',
			'priority' => 10,
			'section' => 'company_info',
			'label' => __( 'E-mail', 'textdomain' ),
			'description' => 'Add an e-mail address for your business',
	) );
	
	//add address
	$wp_customize->add_setting( 'company_address', array(
		'default' => '551 Taylor Way' . "\n" . 'San Carlos, CA' . "\n" . '94070',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
	) );
	$wp_customize->add_control( 'company_address', array(
			'type' => 'textarea',
			'priority' => 10,
			'section' => 'company_info',
			'label' => __( 'Address', 'textdomain' ),
			'description' => 'Add an address for your business',
	) );
	
	//add instagram username
	$wp_customize->add_setting( 'instagram', array(
		'default' => 'HGXFIT',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
	) );
	$wp_customize->add_control( 'instagram', array(
			'type' => 'text',
			'priority' => 10,
			'section' => 'company_info',
			'label' => __( 'Instagram ID', 'textdomain' ),
			'description' => 'Add an Instagram ID without the @ symbol',
	) );
	
	//add facebook page
	$wp_customize->add_setting( 'facebook', array(
		'default' => 'https://www.facebook.com/SanCarlosCrossFit/',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
	) );
	$wp_customize->add_control( 'facebook', array(
			'type' => 'text',
			'priority' => 10,
			'section' => 'company_info',
			'label' => __( 'Facebook URL', 'textdomain' ),
			'description' => 'Add a Facebook URL. Be sure to include the "https://www." at the beginning of the URL',
	) );
	
	//add twitter
	$wp_customize->add_setting( 'twitter', array(
		'default' => '@HGXFIT',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
	) );
	$wp_customize->add_control( 'twitter', array(
			'type' => 'text',
			'priority' => 10,
			'section' => 'company_info',
			'label' => __( 'Twitter handle', 'textdomain' ),
			'description' => 'Add a twitter handle, example: "@twitterhandle" or "twitterhandle"',
	) );
	
	//footer form shortcode
	$wp_customize->add_setting( 'footer_form', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
	) );
	$wp_customize->add_control( 'footer_form', array(
			'type' => 'text',
			'priority' => 10,
			'section' => 'company_info',
			'label' => __( 'Footer form shortcode', 'textdomain' ),
			'description' => 'This theme ships with "Contact form 7." To add the contact form in the footer, create a form, and add the shortcode here.',
	) );
	
}
add_action( 'customize_register', 'prefix_customizer_register' );


function force_balanced_tags2( $markup ) {
	$dom = new DOMDocument();
	// Note the meta charset is used to prevent UTF-8 data from being interpreted as Latin1, thus corrupting it
	$html = '<html><head><meta http-equiv="content-type" content="text/html; charset=utf-8"></head><body>';
	$html .= $markup;
	$html .= '</body></html>';
	$dom->loadHTML( $html );
	$body = $dom->getElementsByTagName( 'body' )->item( 0 );
	$markup = str_replace( array( '<body>', '</body>' ), '', $dom->saveHTML( $body ) );
	return $markup;
}

//allow code in excerpt
function wpse_allowedtags() {
    // Add custom tags to this string
        return '<script>,<style>,<br>,<em>,<i>,<ul>,<ol>,<li>,<a>,<p>,<img>,<video>,<audio>'; 
    }

if ( ! function_exists( 'wpse_custom_wp_trim_excerpt' ) ) : 

    function wpse_custom_wp_trim_excerpt($wpse_excerpt) {
    $raw_excerpt = $wpse_excerpt;
        if ( '' == $wpse_excerpt ) {

            $wpse_excerpt = get_the_content('');
            $wpse_excerpt = strip_shortcodes( $wpse_excerpt );
            $wpse_excerpt = apply_filters('the_content', $wpse_excerpt);
            $wpse_excerpt = str_replace(']]>', ']]&gt;', $wpse_excerpt);
            //$wpse_excerpt = strip_tags($wpse_excerpt, wpse_allowedtags()); /*IF you need to allow just certain tags. Delete if all tags are allowed */

            //Set the excerpt word count and only break after sentence is complete.
                $excerpt_word_count = 25;
                $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count); 
                $tokens = array();
                $excerptOutput = '';
                $count = 0;

                // Divide the string into tokens; HTML tags, or words, followed by any whitespace
                preg_match_all('/(<[^>]+>|[^<>\s]+)\s*/u', $wpse_excerpt, $tokens);

                foreach ($tokens[0] as $token) { 

                    if ($count >= $excerpt_length && preg_match('/[\:\>\;\?\.\!]\s*$/uS', $token)) { 
                    // Limit reached, continue until , ; ? . or ! occur at the end
                        $excerptOutput .= force_balanced_tags2(trim($token));
                        break;
                    }

                    // Add words to complete sentence
                    $count++;

                    // Append what's left of the token
                    $excerptOutput .= force_balanced_tags2($token);
                }

            $wpse_excerpt = trim(force_balanced_tags2($excerptOutput));

                
                $excerpt_more = apply_filters('excerpt_more', '' . $excerpt_end); 

                //$pos = strrpos($wpse_excerpt, '</');
                //if ($pos !== false)
                // Inside last HTML tag
                //$wpse_excerpt = substr_replace($wpse_excerpt, $excerpt_end, $pos, 0); /* Add read more next to last word */
                //else
                // After the content
                $wpse_excerpt .= $excerpt_more; /*Add read more in new paragraph */

            return rtrim(rtrim($wpse_excerpt, "<br>"), "<br>") . '...';   

        }
        return apply_filters('wpse_custom_wp_trim_excerpt', $wpse_excerpt, $raw_excerpt);
    }

endif; 

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'wpse_custom_wp_trim_excerpt'); 




/*add_filter("get_the_content", "plugin_myContentFilter");

function plugin_myContentFilter($content) {
		
$maxLength = 500; // characters 
		
preg_match('/^.{1,'.$maxLength.'}\b/s', $content, $matches); // \b to break at word boundary 

		//add ellipses and get rid of line break. I'm workin fuckin' magic here, bruh!
		$extract = rtrim($matches[0], "<br>") . '...'; 		
		$shortened = $extract;
    // Take the existing content and return a subset of it
    return force_balanced_tags2($shortened);
  }



*/

//WIDGET
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Name of Widgetized Area',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

//Custom thumbnail sizes

add_image_size('Coach - round thumbnail', 140, 140, true);
add_image_size('Coach - expanded overlay image', 331, 447, true);

//better pagination
function pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages){
         
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a class=\"num\" href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
			 echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
     }
}

?>