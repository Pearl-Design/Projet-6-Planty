<footer>
<?php
wp_nav_menu(array(
    'menu' => 'footer', // Remplacez 'menu-planty' par le nom de votre menu personnalisé
    'menu_id' => 'menu-footer',
    'container' => 'div',
));
?>


</footer>
<script type="text/javascript">
jQuery(document).ready(function($) {
    $('.burger-menu-toggle').click(function() {
        $(this).toggleClass('active');
        $('#menu-header').slideToggle();
    });
});
</script>