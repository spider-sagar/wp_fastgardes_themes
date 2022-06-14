<?php

// style and scripts
add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
function bootscore_child_enqueue_styles() 
{
  // style.css
  
  wp_enqueue_style('child-style', get_stylesheet_uri());
  wp_enqueue_style('prettyPhoto',get_stylesheet_directory_uri().'/assets/css/prettyPhoto.css');
  wp_enqueue_style('default',get_stylesheet_directory_uri().'/assets/css/animation.css');
  wp_enqueue_style('carousel',get_stylesheet_directory_uri().'/assets/css/owl.theme.default.min.css');
  wp_enqueue_style('carousel',get_stylesheet_directory_uri().'/assets/css/owl.carousel.min.css');
  wp_enqueue_style('font-awesome',get_stylesheet_directory_uri().'/assets/css/font-awesome.min.css');
  wp_enqueue_style('bootstrap',get_stylesheet_directory_uri().'/assets/css/bootstrap.min.css');

  // Compiled main.css
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', array('parent-style'), $modified_bootscoreChildCss);

  // custom.js
  wp_enqueue_script('jquery-js', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js', false, '', true);
  wp_enqueue_script('popper-js', get_stylesheet_directory_uri() . '/assets/js/popper.min.js', false, '', true);
  wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', false, '', true);
  wp_enqueue_script('jquery-migrate-js', get_stylesheet_directory_uri() . '/assets/js/jquery-migrate-1.3.0.js', false, '', true);
  wp_enqueue_script('bootstrap-bundle-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.js', false, '', true);
  wp_enqueue_script('owl-carousel-js', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', false, '', true);
  wp_enqueue_script('prettyPhoto-js', get_stylesheet_directory_uri() . '/assets/js/jquery.prettyPhoto.js', false, '', true);
  wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', false, '', true);

}

// bids post type

function cptui_register_my_cpts_fastgrade_bidding()
{
/**
 * Post Type: Bids.
 */

$labels = [
    "name" => __( "Bids", "hello-elementor" ),
    "singular_name" => __( "Bid", "hello-elementor" ),
];

$args = [
    "label" => __( "Bids", "hello-elementor" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => false,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "rest_namespace" => "wp/v2",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => true,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "can_export" => true,
    "rewrite" => [ "slug" => "fastgrade_bidding", "with_front" => true ],
    "query_var" => true,
    "supports" => [ "title", "editor", "thumbnail" ],
    "show_in_graphql" => false,
];

register_post_type( "fastgrade_bidding", $args );
}

add_action( 'init', 'cptui_register_my_cpts_fastgrade_bidding' );


// Countries

function cptui_register_my_taxes_cp_country() 
{
	
/**
 * Taxonomy: Countries.
 */

$labels = [
    "name" => __( "Countries", "hello-elementor" ),
    "singular_name" => __( "Country", "hello-elementor" ),
];

function cptui_register_my_taxes_field_of_study() {

	
/**
 * Taxonomy: Field of studies.
 */

$labels = [
    "name" => __( "Field of studies", "hello-elementor" ),
    "singular_name" => __( "Field of study", "hello-elementor" ),
];


$args = [
    "label" => __( "Field of studies", "hello-elementor" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'field_of_study', 'with_front' => true,  'hierarchical' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "show_tagcloud" => false,
    "rest_base" => "field_of_study",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "rest_namespace" => "wp/v2",
    "show_in_quick_edit" => false,
    "sort" => false,
    "show_in_graphql" => false,
];
register_taxonomy( "field_of_study", [ "tutoringrequest", "student_profile", "tutor_profiles" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_field_of_study' );

$args = [
    "label" => __( "Countries", "hello-elementor" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => false,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'cp_country', 'with_front' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "show_tagcloud" => false,
    "rest_base" => "cp_country",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "rest_namespace" => "wp/v2",
    "show_in_quick_edit" => false,
    "sort" => false,
    "show_in_graphql" => false,
];
register_taxonomy( "cp_country", [ "tutoringrequest", "student_profile", "tutor_profiles" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_cp_country' );



function cptui_register_my_taxes_grade() 
{

/**
 * Taxonomy: Grades.
 */

$labels = [
    "name" => __( "Grades", "hello-elementor" ),
    "singular_name" => __( "Grade", "hello-elementor" ),
];


$args = [
    "label" => __( "Grades", "hello-elementor" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'grade', 'with_front' => true,  'hierarchical' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "show_tagcloud" => false,
    "rest_base" => "grade",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "rest_namespace" => "wp/v2",
    "show_in_quick_edit" => true,
    "sort" => false,
    "show_in_graphql" => false,
];
register_taxonomy( "grade", [ "tutoringrequest", "student_profile", "tutor_profiles" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_grade' );

// language texonamy

function cptui_register_my_taxes_fg_language() 
{

/**
 * Taxonomy: Languages.
 */

$labels = [
    "name" => __( "Languages", "hello-elementor" ),
    "singular_name" => __( "Language", "hello-elementor" ),
];


$args = [
    "label" => __( "Languages", "hello-elementor" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => false,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'fg_language', 'with_front' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "show_tagcloud" => false,
    "rest_base" => "fg_language",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "rest_namespace" => "wp/v2",
    "show_in_quick_edit" => false,
    "sort" => false,
    "show_in_graphql" => false,
];
register_taxonomy( "fg_language", [ "tutoringrequest", "tutor_profiles" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_fg_language' );


function cptui_register_my_cpts_student_profile() {

/**
 * Post Type: STUDENT PROFILES.
 */

$labels = [
    "name" => __( "STUDENT PROFILES", "hello-elementor" ),
    "singular_name" => __( "STUDENT PROFILE", "hello-elementor" ),
];

$args = [
    "label" => __( "STUDENT PROFILES", "hello-elementor" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "rest_namespace" => "wp/v2",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => true,
    "can_export" => true,
    "rewrite" => [ "slug" => "student_profile", "with_front" => true ],
    "query_var" => true,
    "supports" => [ "title", "editor", "thumbnail", "excerpt", "author" ],
    "show_in_graphql" => false,
];

register_post_type( "student_profile", $args );
}

add_action( 'init', 'cptui_register_my_cpts_student_profile' );


function cptui_register_my_taxes_subject() {

/**
 * Taxonomy: subjects.
 */

$labels = [
    "name" => __( "subjects", "hello-elementor" ),
    "singular_name" => __( "subject", "hello-elementor" ),
];


$args = [
    "label" => __( "subjects", "hello-elementor" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'subject', 'with_front' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "show_tagcloud" => false,
    "rest_base" => "subject",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "rest_namespace" => "wp/v2",
    "show_in_quick_edit" => true,
    "sort" => false,
    "show_in_graphql" => false,
];
register_taxonomy( "subject", [ "tutoringrequest", "student_profile", "tutor_profiles" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_subject' );




function cptui_register_my_cpts_tutoringrequest() 
{

/**
 * Post Type: Tutoring Request.
 */

$labels = [
    "name" => __( "Tutoring Request", "hello-elementor" ),
    "singular_name" => __( "Tutoring Request", "hello-elementor" ),
];

$args = [
    "label" => __( "Tutoring Request", "hello-elementor" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "rest_namespace" => "wp/v2",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "can_export" => false,
    "rewrite" => [ "slug" => "tutoringrequest", "with_front" => true ],
    "query_var" => true,
    "menu_icon" => "dashicons-admin-users",
    "supports" => [ "title", "editor", "thumbnail", "excerpt", "author" ],
    "taxonomies" => [ "category" ],
    "show_in_graphql" => false,
];

register_post_type( "tutoringrequest", $args );
}

add_action( 'init', 'cptui_register_my_cpts_tutoringrequest' );



function cptui_register_my_cpts_tutor_profiles() {

/**
 * Post Type: TUTOR PROFILES.
 */

$labels = [
    "name" => __( "TUTOR PROFILES", "hello-elementor" ),
    "singular_name" => __( "TUTOR PROFILE", "hello-elementor" ),
];

$args = [
    "label" => __( "TUTOR PROFILES", "hello-elementor" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "rest_namespace" => "wp/v2",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "can_export" => true,
    "rewrite" => [ "slug" => "tutor_profiles", "with_front" => true ],
    "query_var" => true,
    "supports" => [ "title", "editor", "thumbnail", "excerpt", "author" ],
    "taxonomies" => [ "grade", "subject", "field_of_study" ],
    "show_in_graphql" => false,
];

register_post_type( "tutor_profiles", $args );
}

add_action( 'init', 'cptui_register_my_cpts_tutor_profiles' );

