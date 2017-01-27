<?php

if ( !defined( 'ABSPATH' ) ) :
	exit; // Exit if accessed directly
endif; 



require get_template_directory() . '/inc/helpers.php';

require get_template_directory() . '/inc/reset.php';

function tier_one_two_styles_scripts(){
    wp_register_style('indo-lp-concept-style', get_stylesheet_directory_uri() . '/css/style.min.css');
    wp_enqueue_style('indo-lp-concept-style');
    wp_register_script('indo-lp-concept-script', get_stylesheet_directory_uri() . '/js/scripts.min.js');
    wp_enqueue_script('indo-lp-concept-script');
    
    wp_enqueue_style('google-noto', 'https://fonts.googleapis.com/css?family=Noto+Serif');
    wp_enqueue_style('material-icon', 'http://fonts.googleapis.com/icon?family=Material+Icons');
}
add_action('wp_enqueue_scripts', 'tier_one_two_styles_scripts');

require get_template_directory() . '/inc/breadcrumbs.php';

require get_template_directory() . '/inc/features-init.php';

// Include better comments file
require get_template_directory() .'/inc/better-comments.php';

require get_template_directory() . '/inc/wp_bootstrap_comments.php';

require get_template_directory() . '/inc/view-system.php';
    
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

require get_template_directory() .'/inc/custom_post_format.php';

function _social_media(){
?>
    <div class="sm-action hide-on-med-and-down">
        <?php 
        $url = get_the_permalink(); 
        $url = urlencode(esc_url($url));?>
        
        <ul class="list-inline">
            <li>
                <button class="facebook btn social-share" data-share="facebook" >
                    <i class="fa fa-facebook fa-fw" aria-hidden="true"></i>
                </button>
            </li>
            <li>
                <button class="twitter btn social-share" data-share="twitter">
                    <i class="fa fa-twitter fa-fw" aria-hidden="true"></i>
                </button>
            </li>
            <li>
                <button class="linkedin btn social-share" data-share="linkedin">
                    <i class="fa fa-linkedin fa-fw" aria-hidden="true"></i>
                </button>
            </li>
            <li>
                <button class="reddit btn social-share" data-share="reddit" target='_blank' href=''>
                    <i class="fa fa-reddit-alien fa-fw " aria-hidden="true"></i>
                </button>
            </li>
            <li>
                <button class="google-plus btn social-share" data-share="google-plus">
                    <i class="fa fa-google-plus fa-fw social-share" aria-hidden="true"></i> 
                </button>
            </li>
            <li>
                <?php $image = ( has_post_thumbnail() ) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' )[0] : get_first_image() ; ?>
                <button class="pinterest btn social-share" data-share="pinterest" data-title="<?php urlencode(the_title()) ;?>" data-image="<?php echo esc_url( $image ); ?>">
                    <i class="fa fa-pinterest fa-fw " aria-hidden="true"></i>
                </button>
            </li>
        </ul>
        <div class="fb-save" data-uri="<?php the_permalink(); ?>" data-size="large"></div>
        <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
        
    </div>
<?php
}

function themeslug_remove_hentry( $classes ) {
    if ( is_page() ) {
        $classes = array_diff( $classes, array( 'hentry' ) );
    }
    return $classes;
}
add_filter( 'post_class','themeslug_remove_hentry' );

function wpse17478_init()
{
    remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );
}
add_action( 'init', 'wpse17478_init' );