<?php
// Register Custom Taxonomy
function tag_synchro() {
/*
    $labels = array(
        'name'                       => _x( 'QA Tags', 'Taxonomy General Name', ET_DOMAIN ),
        'singular_name'              => _x( 'QA Tag', 'Taxonomy Singular Name', ET_DOMAIN ),
        'menu_name'                  => __( 'QA Tags', ET_DOMAIN ),
        'all_items'                  => __( 'All Tags', ET_DOMAIN ),
        'parent_item'                => __( 'Parent Item', ET_DOMAIN ),
        'parent_item_colon'          => __( 'Parent Item:', ET_DOMAIN ),
        'new_item_name'              => __( 'New Tags Name', ET_DOMAIN ),
        'add_new_item'               => __( 'Add New tag', ET_DOMAIN ),
        'edit_item'                  => __( 'Edit tag', ET_DOMAIN ),
        'update_item'                => __( 'Update tag', ET_DOMAIN ),
        'separate_items_with_commas' => __( 'Separate tags with commas', ET_DOMAIN ),
        'search_items'               => __( 'Search Items', ET_DOMAIN ),
        'add_or_remove_items'        => __( 'Add or remove items', ET_DOMAIN ),
        'choose_from_most_used'      => __( 'Choose from the most used tagd', ET_DOMAIN ),
        'not_found'                  => __( 'Not Found', ET_DOMAIN ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'update_count_callback'      => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => get_option('tag_slug', 'qa-tag') ),
        );
    register_taxonomy( 'qa_tag', array( 'post' ), $args );
*/
    // Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Formats', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Format', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Formats', 'textdomain' ),
		'all_items'         => __( 'All Formats', 'textdomain' ),
		'parent_item'       => __( 'Parent Format', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Format:', 'textdomain' ),
		'edit_item'         => __( 'Edit Format', 'textdomain' ),
		'update_item'       => __( 'Update Format', 'textdomain' ),
		'add_new_item'      => __( 'Add New Format', 'textdomain' ),
		'new_item_name'     => __( 'New Format Name', 'textdomain' ),
		'menu_name'         => __( 'Format', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'format' ),
		'capabilities' => array(
			'manage_terms' => '',
			'edit_terms' => '',
			'delete_terms' => '',
			'assign_terms' => 'edit_posts'
		),
		'public' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => false,
	);
	register_taxonomy( 'format', array( 'post' ), $args ); // our new 'format' taxonomy
}

// Hook into the 'init' action
add_action( 'init', 'tag_synchro', 0 );