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
define( 'DB_NAME', 'wp_esercizio_theme' );

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
define( 'AUTH_KEY',         '$?wSLK7hh. {-Df@3|NZ7.W9{T$<|`o?=*{^5ST<L5=`]iHw-Hg{J^,@8XEI,8GD' );
define( 'SECURE_AUTH_KEY',  'BT >DYZQ*Y5d/<0>f/pXY(4TmH]FJ=fTAr3W.k Ud6L{4gXAJu/o4LIJ=/^RVdbR' );
define( 'LOGGED_IN_KEY',    'M%43%(/!9U/mxpMpRfz-$1>p$=.`9M?B~hM;>njN1ql+:^8[)L7:Q7_ea;-}xYsr' );
define( 'NONCE_KEY',        'Vfk*<vwli[=QuI0b(%wrr/mHfz;yW3$^S}1%}AWOi~~io)i%5X9t$s{@IB a6hk?' );
define( 'AUTH_SALT',        'lxs2me:O]S9S)ExDf`),F`wusww*dBz!.|?8FJjW#U!mxL|*9,41_nvVr_vN`|ZG' );
define( 'SECURE_AUTH_SALT', 'f%lz2v,!?+O4n=y{y(Z(f7q0blT>$:!xp/a1an_e!!zNG(a_L9b#AjDg+i5!K  #' );
define( 'LOGGED_IN_SALT',   '|SP]o7b/Gy,N{e7$9LI8|w[ /lXPRDvn7u>f@YN1)Da}H9n){XG:Pg5Yy~J:52pr' );
define( 'NONCE_SALT',       'CxUwZBI8RIJC9u!QS6#yV:]R<,NrlE8|xVI}S|r?guE,(vRQlygf8Y&8icBmvFpe' );

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
