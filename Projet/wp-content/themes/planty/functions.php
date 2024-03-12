<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}


if ( is_user_logged_in() ) {
    // Afficher l'onglet admin
    if ( current_user_can( 'manage_options' ) ) {
        echo '<a href="' . admin_url() . '">Admin</a>';
    }
}


?>
