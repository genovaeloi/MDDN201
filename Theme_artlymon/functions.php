<?php
/**
 * Enqueue scripts and styles.
 */
function artlymon_scripts() {


    // wp_enqueue_style( 'style', get_stylesheet_uri() );
    // wp_enqueue_style('artlymon-fonts', 'https://fonts.googleapis.com/css?family=Caveat|Droid+Sans|Permanent+Marker', array(), '3', true);

    // wp_enqueue_style( 'artlymon-blog-style', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), '20151215', true );

    // wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.2.1.js', array(), '3', true);
    // wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3', true);
    //wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.min.js',  null, null, true );

    // wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/bootstrap.min.css',false,'1.1','all');

    // wp_enqueue_script( 'script', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);




    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'artlymon_scripts' );
?>
