<?php
function unite_child_theme_enqueue_styles() {

    $parent_style = 'unite-style'; // This is 'unite-style' for the Unite theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'unite_child_theme_enqueue_styles' );

// Custom Favicon to Include
function my_favicon_link() {
  echo '<link rel="shortcut icon" type="image/png" href="'. get_template_directory_uri() . '/favicon.png" />' . "\n";
}
add_action( 'wp_head', 'my_favicon_link' );

function films_post_type() {
 
  // Set UI labels for films Post Type
      $labels = array(
          'name'                => _x( 'Films', 'Post Type General Name', 'unite' ),
          'singular_name'       => _x( 'Film', 'Post Type Singular Name', 'unite' ),
          'menu_name'           => __( 'Films', 'unite' ),
          'parent_item_colon'   => __( 'Parent Film', 'unite' ),
          'all_items'           => __( 'All Films', 'unite' ),
          'view_item'           => __( 'View Film', 'unite' ),
          'add_new_item'        => __( 'Add New Film', 'unite' ),
          'add_new'             => __( 'Add New', 'unite' ),
          'edit_item'           => __( 'Edit Film', 'unite' ),
          'update_item'         => __( 'Update Film', 'unite' ),
          'search_items'        => __( 'Search Film', 'unite' ),
          'not_found'           => __( 'Not Found', 'unite' ),
          'not_found_in_trash'  => __( 'Not found in Trash', 'unite' ),
      );
       
  // Set other options for films Post Type
       
      $args = array(
          'label'               => __( 'films', 'unite' ),
          'description'         => __( 'Film news and reviews', 'unite' ),
          'labels'              => $labels,
          // Features this CPT supports in Post Editor
          'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'films-fields', ),
          // You can associate this CPT with a taxonomy or'films taxonomy. 
          'taxonomies'          => array( 'Genre', 'Country', 'Year', 'Actors' ),
          /* A hierarchical CPT is like Pages and can have
          * Parent and child items. A non-hierarchical CPT
          * is like Posts.
          */ 
          'hierarchical'        => false,
          'public'              => true,
          'show_ui'             => true,
          'show_in_menu'        => true,
          'show_in_nav_menus'   => true,
          'show_in_admin_bar'   => true,
          'menu_position'       => 5,
          'can_export'          => true,
          'has_archive'         => true,
          'exclude_from_search' => false,
          'publicly_queryable'  => true,
          'capability_type'     => 'page',
      );
       
      // Registering your films Post Type
      register_post_type( 'films', $args );
   
  }
   
  /* Hook into the 'init' action so that the function
  * Containing our post type registration is not 
  * unnecessarily executed. 
  */
   
  add_action( 'init', 'films_post_type', 0 );


function films_loop_shortcode() {
    $args = array(
        'post_type' => 'films',
        'post_status' => 'publish',
    );

    $my_query = null;
    $my_query = new WP_query($args);
    if($my_query->have_posts()):
        echo "<h3 class='widget-title'>Films</h3>";
        while($my_query->have_posts()) : $my_query->the_post();
            $custom = get_post_custom( get_the_ID() );
            echo "<ul>";
            echo "<li><a href='".get_the_permalink()."'>".get_the_title()."</a></li>";
            echo "</ul>";
        endwhile;
        wp_reset_postdata();
    else :
    _e( 'Sorry, no posts matched your criteria.' );
    endif;
}

add_shortcode( 'films_loop', 'films_loop_shortcode' );

?>