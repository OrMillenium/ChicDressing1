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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'ChicDressing1' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'V50YsJ1&qi%R[N;knEbE3`s49DWOLe|OHyayZ/pm2$H[vMu*$uF?cpm}G9A4.IC#' );
define( 'SECURE_AUTH_KEY',  '*UKFs=u#mgv`]hag{t3|S>J$`,W=,YR/n:Xv[g@;s{h?Z1aM`J?wQs>c)1v_L dm' );
define( 'LOGGED_IN_KEY',    'rEgv%: %yfN+XKbeG(4ub9DB~k2{/4!IzOd7hs27eN{)2Y|-%FDjy,c{q[r.D1M&' );
define( 'NONCE_KEY',        'D>Zg]@BWq[%P!~dSIR<+8aC>gK}(%_={6Q;hGnjYRPMe|~u;=8J,ss5}VoWZAP4e' );
define( 'AUTH_SALT',        'akmMWK*y)@EFPp-[&7j/u:^@tJjD5Un{u[pgGB]Wki@[+f_=s(8Ux,F6a`[_xvo7' );
define( 'SECURE_AUTH_SALT', 'hXQ]%^c59T;;!5BG57{qTaW&mmJ|?EC5wwhnApTQzE)t1]<^5wt_IFxh5DWXWP}V' );
define( 'LOGGED_IN_SALT',   '?^~(9f5$&c_Fn0y6kM?dX?wo/l($(Y(>tn.IeAZC`Nd8>qq.^[.G-iP|iDVP&O65' );
define( 'NONCE_SALT',       '4GmVQ3^,L/*8{p+HjL5Z))+x6Zy[[[(:1eTidn*G[!a2NQl?5T|iZVqAoHKaU1cY' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
