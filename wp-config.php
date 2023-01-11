<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
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

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'R3x?d`vwqeqRH+JIr|&N;.}AX)Pk]FL6H_9`?oF{pkQk+sCvke(zXTQpKhPIlbSY' );
define( 'SECURE_AUTH_KEY',  '!/oQ^$:7h*3qQ)#|q RE.1PU#5$1`yfruB,08]91X&2OSzJV6G).Fn5h,HL!k5;b' );
define( 'LOGGED_IN_KEY',    '1kb`?F;`T[<@NGS_exJ;=of5>3tsT|c9k$H}dudT2]y?2[0?Bx=EARDS/mIN8 /+' );
define( 'NONCE_KEY',        'R|P%&/<3HiulG;Q l~(}P~:~.7S};C!7e9JfM/:9x/!~QczDKM7# ${KeYJ23*uF' );
define( 'AUTH_SALT',        'SvHYLKexg6s&j~ykzsU&9H:IYu[fI^uU.H^qaG!Y}`*wihkM]&_i)~R(DiQ|cvis' );
define( 'SECURE_AUTH_SALT', '#YGO*x >8n9`cen8j`8p,-QeclB(6Qu-fsnt.M)|lp}y,t+%5gQ|B<o1KlY>v>v}' );
define( 'LOGGED_IN_SALT',   'ZVHQV8xb:I,bfL1#F/gHMb=lLr`)AB9Ynf{8uO(<sC8%O#&/p2}FpJT`vScRaz<M' );
define( 'NONCE_SALT',       'zuqf<BV{-Sx 7G,8Gld,D}sh(.6f0AWaOVz2aY0Y_wQ5o6:4_WcEJGw+9f6p4v+w' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
