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
define('DB_NAME', 'db754591750');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'dbo754591750');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '21104157t!');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'db754591750.db.1and1.com');

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
define('AUTH_KEY',         ',^Sc<XHbofofgeJyT>pZFvwEZ?S!s>n;fg)E92Vkm?x_p!!=nfz!CQkht)/|T5DP');
define('SECURE_AUTH_KEY',  'MmhC?6wH?5()$wXD)Kce;b%t>WQFYLG[^2a-.%+)isi:9}o_DppZy[Hf/0;!nl^H');
define('LOGGED_IN_KEY',    'BlDU=;e_%Nh*eBu y]6_ejeU)O lq%LaglV~^z?W9<T^v_u3O:=)GfF*IuY0lG1B');
define('NONCE_KEY',        'n9.ko49_/LZVD|m:$GpCY@e %-kw+p)3)Lm#NBuXS0),U^KcxZ$UIlqY4(0pf:j&');
define('AUTH_SALT',        'BJBC7]aH|%wJ2xgLyozntYmqz&|<~4V1EPdIVpdUQ>dB94d9_zej(T1DbuE[cO@j');
define('SECURE_AUTH_SALT', 'dQN.@D^(A#1sKD>8q2Y;`[hQc>!>9Dxg!!fb}k<i6^QdCtNsL,)}[pIQ+ser)WgJ');
define('LOGGED_IN_SALT',   'nk=.nwJ>3,[#7x|Ot`RmO>-+}dM#IMaUI%ib^3RC`_z@V@WVr0D~a;j,$Th/vRc+');
define('NONCE_SALT',       'u_)3y|uoz?|L0n :x]S4Q&{vP>ZZJ0ZU!ZdD4cUVj{m]{00a/n[7%_K`5Bfmmj7T');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'bc1_';

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