<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
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
define('DB_NAME', 'global_archi');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'tn#G?FGb#Tgq0Z`*DysbP(?!#Pd$ QzWHb2#2ne7|azi+wC@vg1}kAi$1+VHzAs3');
define('SECURE_AUTH_KEY',  '0_l1nnw/|N&%rAyIfE0sIc9~!~=&Cmy=I{oI#~q||PB `B5+-/{/wz!La#9M!UmA');
define('LOGGED_IN_KEY',    ' =>NUDF]sJk53dp2{R]-y=4ga)F=776|G0d+y~UxxjpQI<q!6!~p)0.qbcOpn|i1');
define('NONCE_KEY',        '94arQ,#)Q21@-Wi{(.7l8OMM#{L_>[J)u1~?|5-z_ !M/(FjYY92yYNzhXf)A_+F');
define('AUTH_SALT',        '1jKq,Y&v|@`%G<p.%/MjGj?-9]xfV,_3+W`]llF+(l6llnwNXkvBKW({Y+A0RAbb');
define('SECURE_AUTH_SALT', '-X2D=;FarGGUZ2zH87(SzN)MJu[dxvJ_dMh37=g5LC14L5X)a?fW5A^:5Is*DvDq');
define('LOGGED_IN_SALT',   '}2mR)&;,THA7*ZjJZE@$/H;o S<`&*udbZ%{ndEmIX:fc*KCmsj!5]@bjG0k=- T');
define('NONCE_SALT',       ';U? am7O^Fc8G`zgWY|ogHSY0d}m>,QaA]Scb`;~YT(F2om*6*>O-3Dw37?FxS+C');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'ga_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
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