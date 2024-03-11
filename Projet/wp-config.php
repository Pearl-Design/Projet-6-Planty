<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'QW-CR:=5prhLfF{Se&a:KbfN|iojRR6ULPjX]lk+|*mJ-L5@x}6m#0m$*+q=l`%:' );
define( 'SECURE_AUTH_KEY',  '{7l1=_O.UHv<wnnjQsn1E)`[Q8o1H)[D d yBubQ{ZKQ,./`mPl+J.2zaR4ugkR:' );
define( 'LOGGED_IN_KEY',    '8vcskznjOO(AuH|%UGB{`J:Ub C|W>,3J~{kV[G#mf,8W($oEydV{9GBjLz9H<mz' );
define( 'NONCE_KEY',        ' zX/FA}jPfSl-k7,Ng:;i_O}O{&26]D,?C@ ip^?n#Z@;|+.20{%oE5aU=or)^$f' );
define( 'AUTH_SALT',        'R[Jb-r42w:ir6p4x<g!]P)_KQvO4#oTw42,h[Gz>q(G!--CePZT8Uni25c&ki1|<' );
define( 'SECURE_AUTH_SALT', '[w!07v4bF=Oot(avYE03lJa}t*f<<(Li3>GG2XtpVB$bCBH7v2J^zh -[1qS/8}e' );
define( 'LOGGED_IN_SALT',   'K1]W^8vMArL+>D%/8rBcPc PVr{6A.te? V1dL4JmumArerk[4dRQX=T7sEmT5|?' );
define( 'NONCE_SALT',       '~_!^&*x|[V|}G-q3L?zHG:dz`u{J!qm@&3]S$>NRm$xVf_aN:[@^*W[m6(u`>G:E' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
