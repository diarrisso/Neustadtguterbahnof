<?php

/**
 * Grundeinstellungen für WordPress
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als „wp-config.php“ mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * Diese Datei beinhaltet diese Einstellungen:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL-Einstellungen - Diese Zugangsdaten bekommst du von deinem Webhoster. ** //
/**
 * Ersetze datenbankname_hier_einfuegen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define('DB_NAME', 'Spurwerk');

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem MySQL-Datenbank-Benutzernamen.
 */
define('DB_USER', 'root');

/**
 * Ersetze passwort_hier_einfuegen mit deinem MySQL-Passwort.
 */
define('DB_PASSWORD', 'grow-net');

/**
 * Ersetze localhost mit der MySQL-Serveradresse.
 */
define('DB_HOST', '127.0.0.1');

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define('DB_CHARSET', 'utf8mb4');

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 *
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'B79rRq72eh^0!i#V.t(nwR.9$Pb}&;(3n|#lil?&)(h.3Mub!dk?>x e2Ju[NIvZ');
define('SECURE_AUTH_KEY',  'C+^(R80agT~A>-vo7u8_4}L!5E*j)dq3($MOUDosYJ5DC@E~YCX>7ZmWfc`Xt-3~');
define('LOGGED_IN_KEY',    'ehW:NHV.()-<J)r)w k1Z$=}A%KL5WgS2JR:m%uM>u[;OAJ}EVPqMtj+N!6EKmky');
define('NONCE_KEY',        '!rORTY(R .?n@WY9v+9b<~#x&~`F>2T^x;VUP>va;q7N&8L5w2ZHT[_e>fL~|K^c');
define('AUTH_SALT',        '-=0w9nx_fmY_7;g!I (1iuY<k7HJ,2~e/$_Ct>*^e0z0tb2C3a[at&D45v,]0Z9V');
define('SECURE_AUTH_SALT', 'RqWqb|!noQMnCwIWdyX*&$Oc+%BaMKx<RI]tV:$C3?vI>v}K?Uf.adap+T(x?K;r');
define('LOGGED_IN_SALT',   'vwy7.X{Snz2xi1%g-5g#ZO#X{=`)SS;>)u fN}{iqcaAy,e@O_Y:yBn<8iCpS n2');
define('NONCE_SALT',       'mn!q<&XgEWCR!^;W+SuKmqHv] 6nr[>H6=?i`&A{sI?4#E p?g$Ri7bOy_YpAJ; ');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix = 'wp_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* Füge individuelle Werte zwischen dieser Zeile und der „Schluss mit dem Bearbeiten“ Zeile ein. */



/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß. */
/* That's all, stop editing! Happy publishing. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once ABSPATH . 'wp-settings.php';
