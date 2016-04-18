<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'soutine');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'Meridian');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '17042010');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'f x~?+l-SPvGBLX?rs>&6;[;(ef1do%#RI((tY!MBKYnrKxm,3LD>6a)zRROiI/N');
define('SECURE_AUTH_KEY',  '6-!P#Y1|Qm<Z.UQn8?ZmSb_T}]hl:%]<FkUTT7Z1f{3%{?*xX*JlD-iJtrgc7c+v');
define('LOGGED_IN_KEY',    'xr5-v^-.WRWdT1H:t&on4PhNa5TU_J{x:k}#LFX |4:=]a*|H7Z6KXWXJB{| ?7A');
define('NONCE_KEY',        'U2I,b]g4:kYm@FYuRa+mL6+W[_ C?.jtToZ*{j6l^m|b8-bjDxYse~S++.kZDe`)');
define('AUTH_SALT',        'o}HSI=9_RKsg]HIEa}K{v%G)ke13E}KFJS>QBm_A1h<Im1>uX6vBJU`X.vF8a,P0');
define('SECURE_AUTH_SALT', 'lShc{tdKO?^]nhh<t*swW}v0|vA*u5!{`8E{c|L:W:X|rKOVzA1x|r5A;k|F}l^[');
define('LOGGED_IN_SALT',   'd3=-X; .U|C-Vp^BHfNp~0:nlKwj+r9<5$>GGx*kB^Kum1m3x4H[w_LmDJ9_/_p-');
define('NONCE_SALT',       'dW+IC)s7tH:+!SuuFo F/LCl#U$|25|&OH~ jRG3fKRpFFmk^4R!}]hg3*T93cmD');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');