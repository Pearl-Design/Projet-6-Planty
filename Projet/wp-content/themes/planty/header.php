<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
	

</head>
<body <?php body_class(); ?>>

    <header>
        <!-- Logo cliquable redirigeant vers la page d'accueil -->
        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <?php
            // Chemin du dossier d'uploads
            $upload_dir = wp_upload_dir();
            // Chemin complet de l'image du logo
            $logo_path = $upload_dir['baseurl'] . '/2024/03/Logo.png';
            ?>
            <img src="<?php echo esc_url($logo_path); ?>" alt="Logo planty">
        </a>

<?php
wp_nav_menu(array(
    'menu' => 'menu', // Remplacez 'menu-planty' par le nom de votre menu personnalisé
    'menu_id' => 'menu-header',
    'container' => 'nav',
    'container_class' => 'menu-header-container',
    'menu_class' => 'menu-header-list',
));
?>
		
		
		


    </header>
