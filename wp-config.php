<?php
/**
 * Grundeinstellungen f�r WordPress
 *
 * Zu diesen Einstellungen geh�ren:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpr�fix,
 * * Sicherheitsschl�ssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten f�r die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber daf�r nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten f�r die Datenbank abspeichern.
 *
 * @package WordPress
 */

// ** MySQL-Einstellungen ** //
/**   Diese Zugangsdaten bekommst du von deinem Webhoster. **/

/**
 * Ersetze datenbankname_hier_einfuegen
 * mit dem Namen der Datenbank, die du verwenden m�chtest.
 */
//define( 'DB_NAME', 'dedivikqza_db1' );
define( 'DB_NAME', 'dedivikqza_db2' );

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem MySQL-Datenbank-Benutzernamen.
 */

// define( 'DB_USER', 'dedivikqza_1' );
define( 'DB_USER', 'dedivikqza_2' );

/**
 * Ersetze passwort_hier_einfuegen mit deinem MySQL-Passwort.
 */


//define( 'DB_PASSWORD', 'xdfd3QTSVCrnttY7' );
define( 'DB_PASSWORD', 'Ndt65CsndYqaH3S7' );

/**
 * Ersetze localhost mit der MySQL-Serveradresse.
 */

//define( 'DB_HOST', 'dedivirt2254.your-server.de' );
define( 'DB_HOST', 'dedivirt2254.your-server.de' );

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Der Collate-Type sollte nicht ge�ndert werden.
 */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschl�ssel
 *
 * �ndere jeden untenstehenden Platzhaltertext in eine beliebige,
 * m�glichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schl�ssel generieren lassen.
 * Du kannst die Schl�ssel jederzeit wieder �ndern, alle angemeldeten
 * Benutzer m�ssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'n~?=jX]h0#H]kf~/~I*CgCO|Sm30Wb%_)As~*2]<EEz~N-dE_Scy2%r<V`z&ZB1j' );
define( 'SECURE_AUTH_KEY',  'Wd/!z-S&vRBP2AXPryC0)`()r0TYDvo&cYR<ZB-O=;*U_c)=qBPcc9ve%CuWTNWm' );
define( 'LOGGED_IN_KEY',    'ZInF+F6+T@3W69,uS5ffy,<cqEm=#a x_YpF3D!p8hymB=+c^)L^6VAGqe,.Gk#6' );
define( 'NONCE_KEY',        '5LD:_XUFKW:N eSlWSpNvHWXn=v5K/N0vHT+|uEum@cZ1m.}&wq-y%UPII`DY^iF' );
define( 'AUTH_SALT',        'q-%;~>uH%B3vT4hXOsAR98p$%ou`T{;v:P$|@Y#Xa!J*)yJa^i+kFUat4h<]4!TM' );
define( 'SECURE_AUTH_SALT', 'L,9^~`oJ zCrs4%DYMVSj+0!mDM|(?<MKX@F${DFg5[yKNb?$A@WOOAakq(|E>!i' );
define( 'LOGGED_IN_SALT',   '!(:=sK2DSsP/CdGm67pjwE! %fqCAeyp>vH3e<wFA`uQxV^ySp(F@yINE-_u7a@S' );
define( 'NONCE_SALT',       'T4LMcKNM!OCB8Xw_DJRL+SzWQh44X`gfavLp7SRCszM]1}^v$JKrNHoH.cJ5Yl3<' );

/**#@-*/

/**
 * WordPress Datenbanktabellen-Pr�fix
 *
 * Wenn du verschiedene Pr�fixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix = 'w30_';

/**
 * F�r Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf ?true?, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdr�cklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen �ber andere Konstanten zu finden,
 * die zum Debuggen genutzt werden k�nnen.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */

define( 'WP_DEBUG',false );

// define( 'WP_DEBUG_LOG', true );
// define( 'WP_DEBUG_DISPLAY', true );
// @ini_set( 'display_errors', 1 );


define( 'ALLOW_UNFILTERED_UPLOADS', true );

/* Das war?s, Schluss mit dem Bearbeiten! Viel Spa�. */
/* That's all, stop editing! Happy publishing. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Definiert WordPress-Variablen und f�gt Dateien ein.  */
require_once( ABSPATH . 'wp-settings.php' );
