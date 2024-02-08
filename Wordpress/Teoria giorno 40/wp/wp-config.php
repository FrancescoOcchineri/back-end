<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wp_uno' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'NZ8mSKJ<1}&DWGmde,#IAT]iu@V-If;mXwpZmH_c`A~%-!HL%@_W4]H-GlAx<zl!' );
define( 'SECURE_AUTH_KEY',  'K*7.bMti&XCvmEzH$W~Wo(5:KYZE)]xfo=6Hf=gFdF$>]Y(y0]TZlytv*wmj*tqO' );
define( 'LOGGED_IN_KEY',    'NV!*0}p:3w$@N)<BV|^$zSnb=<nq3NmtK4JjYTa9t}y*HS H%nI3j,r{~[6;>Za3' );
define( 'NONCE_KEY',        'H7NxtyzAS}4afD*sx^?H4nRkF8f@>UQE4ieHL5nQQ6BR$/qLa9RGR**kHN:wZ{dP' );
define( 'AUTH_SALT',        'O -Fe.z)`|%y}`cpvB`&RKI6dvjce!]UWXZ`wMOBEwHK#J^b.?2,l5bz+Y@S-R_/' );
define( 'SECURE_AUTH_SALT', '3h|0#2O2/R;SyqtZfA$9dSS=<P+hJ,a-AS=KlsR6=Q(vA{l_]w^]ku,VL}:94Jl,' );
define( 'LOGGED_IN_SALT',   'O~ 8C;{Kd<E@KUHPnd]t/PtG4C5XzieF6kUh*H<TvHSPq,S8!.HeX@-Oh7]Fbz_m' );
define( 'NONCE_SALT',       'FE!p8!@wuMf[-u 3[-Wch}G`}YUJqN`Q4eH>SeSNb/,WXMVz;G#Eh}eA|djy=JcW' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
