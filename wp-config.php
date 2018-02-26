<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'igtalks');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'password');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '|:F@J5fu]TP2;Eepi<Fk?[t`S{r2{A+K}4$2xoly+;sgZW+<l7/J6qXI~fq7Eg8v');
define('SECURE_AUTH_KEY',  '~O6+>r([2Vf2/RcNVE:sbEgcChm?+OJ8UKkNL%gj+73qC]O&c*PpM?9ffJrKZotT');
define('LOGGED_IN_KEY',    '3NA|2PEZUc7S94F}#bO,9y-ZvFVp0v|R`@pqn8r,ax8t []k6P7*8,})1U Q:#Xx');
define('NONCE_KEY',        'kLe8KFeUcp3pemynehYiY]+1=)9.7IvPMOCjwKH* nz[%8au+Kdr*t4aBaujQE6L');
define('AUTH_SALT',        'hwip/J=.]s>Y.RN _pi=76s^[]z1>wXQUsj&=98(,Xw^3-w{G7D`RYI40HIrd{ c');
define('SECURE_AUTH_SALT', 'Rm48e|/&.7XuN,Hk3$&@oCQ8YEU#1js.YmG>Q&miBy@eUuF7`,u]qIH. T^tndQl');
define('LOGGED_IN_SALT',   '+UGcwE%[chcN3E%hx|K3t<>(oLOk`)X$[>N4,>vdLVVHjBo3d_KWA&*KEtiD%3FE');
define('NONCE_SALT',       ']y@6Ww5Th6bd.K5k,_>]-D#U_YRXcZx3DFsAEf*bG/BJ/M?r>nr-lzI@Doo$}+7;');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
