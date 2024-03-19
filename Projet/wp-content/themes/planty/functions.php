<?php
// Ajout du style du thème parent
function oceanwp_child_enqueue_parent_style() {
	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );
	// Load the stylesheet
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css?t='.time(), array( 'oceanwp-style' ), $version );

}



add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );


//fonction qui permet d'afficher l'admin dans le menu lorsqu'on est connecté
function afficher_liens_menu($items, $args) {
    // Vérifie si l'utilisateur est connecté et que le menu est celui de la navigation principale
    if (is_user_logged_in() && $args->menu === 'menu') {
        // Ajoute le lien "Admin" à la fin des éléments du menu
        $admin_url = admin_url();
        $admin_link = '<li class="menu-item menu-admin"><a href="' . $admin_url . '">Admin</a></li>';
        // Divise les éléments du menu en tableau
        $menu_items = explode('</li>', $items);
        // Ajoute le nouvel élément de menu à la deuxième position de la liste
        array_splice($menu_items, 1, 0, $admin_link);
        // Rejoindre à nouveau les éléments du menu en une chaîne
        $items = implode('</li>', $menu_items);
    }
    return $items;
}
// Utilisation du hook pour afficher les éléments du menu avec le lien "Admin"
add_filter('wp_nav_menu_items', 'afficher_liens_menu', 10, 2);


?>
