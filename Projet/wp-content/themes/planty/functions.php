<?php
//chemin vers le fichier css
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}


//fonction qui permet d'afficher l'admin dans le menu lorsqu'on est connecté
function afficher_liens_menu($items, $args) {
    // Vérifie si l'utilisateur est connecté et que le menu est celui de la navigation principale
    if (is_user_logged_in()) {
        // Ajoute le lien "Admin" à la fin des éléments du menu
        $admin_url = admin_url();
        $admin_link = '<li class="menu-item"><a href="' . $admin_url . '">Admin</a></li>';
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
