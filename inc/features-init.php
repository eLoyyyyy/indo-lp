<?php

if ( !defined( 'ABSPATH' ) ) :
	exit; // Exit if accessed directly
endif;

/*Sidebar*/
if ( !function_exists( 'indo_lp_main_sidebar' ) ):
    function indo_lp_main_sidebar() {

        register_sidebar( array(
            'name' => __( 'Sidebar', 'indo-lp' ),
            'id' => 'sidebar',
            'before_widget' => '<aside id="%1$s" class="section widget thumbnail %1$s">',
            'after_widget' => '</aside>',
            'before_title'  => '<div class="section-title"><h1 class="h3 widget-title">',
            'after_title' => '</h1></div>',
            'description' => __( 'Main Sidebar', 'indo-lp' ),
        ) );

    }
    add_action( 'after_setup_theme', 'indo_lp_main_sidebar' );
endif;


/* custom background */ 
if ( ! function_exists( 'change_custom_background_cb' ) ) :

    function change_custom_background_cb() {
        $background = get_background_image();
        $color = get_background_color();

        if ( ! $background && ! $color )
            return;

        $style = $color ? "background-color: #$color;" : '';

        if ( $background ) {
            $image = " background-image: url('$background');";

            $repeat = get_theme_mod( 'background_repeat', 'repeat' );

            if ( ! in_array( $repeat, array( 'no-repeat', 'repeat-x', 'repeat-y', 'repeat' ) ) )
                $repeat = 'repeat';

            $repeat = " background-repeat: $repeat;";

            $position = get_theme_mod( 'background_position_x', 'left' );

            if ( ! in_array( $position, array( 'center', 'right', 'left' ) ) )
                $position = 'left';

            $position = " background-position: top $position;";

            $attachment = get_theme_mod( 'background_attachment', 'scroll' );

            if ( ! in_array( $attachment, array( 'fixed', 'scroll' ) ) )
                $attachment = 'scroll';

            $attachment = " background-attachment: $attachment;";

            $style .= $image . $repeat . $position . $attachment;
        }
        ?>
            <style type="text/css" id="custom-background-css">
                .custom-background { <?php echo trim( $style ); ?> }
            </style>
        <?php
    }

endif;

function indo_lp_setup_theme(){
    
    global $wp_version;
    
    add_theme_support( 'nav-menus' );
    add_theme_support( 'post-thumbnails' ); 
    /*add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery', 'format' ) );*/
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'caption') );
    
    if ( version_compare( $wp_version, '3.4', '>=' ) ) {
        add_theme_support( 'custom-background', array( 'wp-head-callback' => 'change_custom_background_cb','default-color' => 'e7e6e4' ) );
    }
    else {
        add_custom_background('change_custom_background_cb');
    }
    
    /*
    add_image_size( 'index', 300, 190, true);
    add_image_size( 'next_prev_post', 100, 112, true);
    add_image_size( 'multi_tab', 111, 64, true);
    add_image_size( 'recent_image', 135, 135, true);
    */
    
  /*  register_nav_menus(
        array(
            'primary'   =>  esc_html__( 'Primary Menu', 'indo-lp' ),
            'secondary'   =>  esc_html__( 'Footer Menu', 'indo-lp' )
            // Register the Primary menu and Drawer menu
            // Theme uses wp_nav_menu() in TWO locations.
            // Copy and paste the line above right here if you want to make another menu,
            // just change the 'primary' to another name
        )
    );*/
    
    register_nav_menus( array(   'primary' => esc_html__( 'Primary Menu', 'indo-lp' ),   'footer' => esc_html__( 'Footer Menu', 'indo-lp' )  ) );
    
}
add_action( 'after_setup_theme', 'indo_lp_setup_theme' );




function tieronetwo_customize_register($wp_customize)
{
	/**
	 * Header Settings Panel
	 */
	$wp_customize->add_panel( 
		'tierone_header_settings', 
		array(
			'title' => __( 'Header Settings', 'indo-lp' ),
			'description' => __( 'Use this panel to set your header settings', 'indo-lp' ),
			'priority' => 25, 
		) 
	);


	// Logo image
    $wp_customize->add_setting(
        'site_logo',
        array(
            'sanitize_callback' => 'tieronetwo_sanitize_image'
        ) 
    ); 
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'site_logo',
            array(
                'label'         => __( 'Site Logo', 'indo-lp' ),
                'section'       => 'title_tagline',
                'settings'      => 'site_logo',
                'description' 	=> __( 'Upload a logo for your website. Recommended height for your logo is 135px.', 'indo-lp' ),
            )
        )
    );

    // Logo, title and description chooser
    $wp_customize->add_setting(
        'site_title_option',
        array (
            'default'           => 'text-only',
            'sanitize_callback' => 'tieronetwo_sanitize_logo_title_select',
            'transport'         => 'refresh'
        )
    );
    $wp_customize->add_control(
        'site_title_option',
        array(
            'label'     	=> __( 'Display site title / logo.', 'indo-lp' ),
            'section'   	=> 'title_tagline',
            'type'      	=> 'radio',
            'description'	=> __( 'Choose your preferred option.', 'indo-lp' ),
            'choices'   => array (
                'text-only' 	=> __( 'Display site title and description only.', 'indo-lp' ),
                'logo-only'     => __( 'Display site logo image only.', 'indo-lp' ),
                'text-logo'		=> __( 'Display both site title and logo image.', 'indo-lp' ),
                'display-none'	=> __( 'Display none', 'indo-lp' )
            )
        )
    );
    
    $wp_customize->add_section( 
        'tieronetwo_locale' , 
        array(
            'title'      => __( 'Locale', 'indo-lp' ),
            'priority'   => 30,
        ) 
    );
    
    $wp_customize->add_setting(
        'force_locale',
        array (
            'default'           => 'en',
        )
    );
    $wp_customize->add_control(
        'force_locale',
        array(
            'label'     	=> __( 'Pick Locale.', 'indo-lp' ),
            'section'   	=> 'tieronetwo_locale',
            'type'      	=> 'select',
            'description'	=> __( 'Choose your language.', 'indo-lp' ),
            'choices'   => array (
                'en'    => __( 'English', 'indo-lp'),
                'id'    => __( 'Indonesian', 'indo-lp' ),
                'vn'    => __( 'Vietnamese', 'indo-lp' ),
                'my'    => __( 'Malaysian', 'indo-lp' ),
            )
        )
    );

   // Site favicon
	$wp_customize->add_setting(
        'site_favicon',
        array(
            'sanitize_callback' => 'tieronetwo_sanitize_image'
        ) 
    ); 
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'site_favicon',
            array(
                'label'         => __( 'Upload a favicon', 'indo-lp' ),
                'section'       => 'title_tagline',
                'settings'      => 'site_favicon',
                'description' 	=> __( 'Upload a favicon for your website.', 'indo-lp' ),
            )
        )
    );

    // Display site favicon?
    $wp_customize->add_setting(
		'display_site_favicon',
		array(
			'default'			=> false,
			'sanitize_callback'	=> 'tieronetwo_sanitize_checkbox'
		)
	);
    $wp_customize->add_control(
		'display_site_favicon',
		array(
			'settings'		=> 'display_site_favicon',
			'section'		=> 'title_tagline',
			'type'			=> 'checkbox',
			'label'			=> __( 'Display site favicon?', 'indo-lp' ),
		)
	);
}
add_action( 'customize_register', 'tieronetwo_customize_register' );

function tieronetwo_sanitize_image( $image, $setting ) {
	/*
	 * Array of valid image file types.
	 *
	 * The array includes image mime types that are included in wp_get_mime_types()
	 */
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );
	// Return an array with file extension and mime_type.
    $file = wp_check_filetype( $image, $mimes );
	// If $image has a valid mime_type, return it; otherwise, return the default.
    return ( $file['ext'] ? $image : $setting->default );
}

function tieronetwo_sanitize_logo_title_select( $logo_option ) {
	if ( ! in_array( $logo_option, array( 'text-only', 'logo-only', 'text-logo', 'display-none' ) ) ) {
        $logo_option = 'text-only';
    } 

    return $logo_option;
}

function tieronetwo_sanitize_checkbox( $checked ) {
	// Boolean check.
	return ( ( isset( $checked ) && true == $checked ) ? true : false );
}

function custom_loginlogo() {
    $logo = get_theme_mod( 'site_logo', '' );
    if( !empty( $logo ) ) :
        list($width, $height, $type, $attr) = getimagesize($logo); 
        ?>
        <style type="text/css">
            .login h1 a {
                width: <?php echo $width; ?>px; 
                height: <?php echo $height; ?>px; 
                background-image: url('<?php echo esc_url( $logo ); ?>') !important; 
                background-size: <?php echo $width; ?>px auto;
            }
        </style>
        <?php
    endif;
}
add_action('login_head', 'custom_loginlogo');

function facebook_javascript_sdk(){
    ?>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <?php
}



