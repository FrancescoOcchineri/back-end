<?php

use Illuminate\Support\Facades\Route;

Route::get('/attivita', function () {
    $activities = [
        ['username' => 'Mariux', 'email' => 'm@example.it', 'attivita' => 'Basket', 'ore' => '3', 'luogo' => 'Milano'],
        ['username' => 'Verdix', 'email' => 'v@example.it','attivita' => 'Calcio', 'ore' => '2', 'luogo' => 'Firenze'],
        ['username' => 'Frank', 'email' => 'f@example.it','attivita' => 'Nuoto', 'ore' => '1', 'luogo' => 'Roma'],
        ['username' => 'Lol', 'email' => 'l@example.it','attivita' => 'Pallavolo', 'ore' => '4', 'luogo' => 'Torino'],
        ['username' => 'Super', 'email' => 's@example.it','attivita' => 'Golf', 'ore' => '2', 'luogo' => 'Venezia']
    ];

    return view('activity')->with('activities', $activities);
});

Route::get('/creazione/{username}/{email}/{attivita}/{ore}/{luogo}', function (string $username, string $email, string $attivita, int $ore, string $luogo) {
    $a = new stdClass();
    $a->username = $username;
    $a->email = $email;
    $a->attivita = $attivita;
    $a->ore = $ore;
    $a->luogo = $luogo;

    return view('creation', ['obj' => $a]);
})  -> whereAlpha('username') 
    -> whereAlpha('attivita') 
    -> whereAlpha('luogo') 
    -> whereNumber('ore') 
    -> where('email', '^.+@.+\..+$');

    Route::get('/singolo/{singola}/{ore}/{luogo}', function ($singola, $ore, $luogo) {
    $s = new stdClass();
    $s->singola = $singola;
    $s->ore = $ore;
    $s->luogo = $luogo;
    
        return view('single', ['obj' => $s]);
    });

    Route::get('/elimina/{attivita}', function ($attivita) {
        $d = new stdClass();
        $d->attivita = $attivita;
        
            return view('delete', ['obj' => $d]);
        });

        Route::get('/modifica/{username}/{email}/{attivita}/{ore}/{luogo}', function (string $username, string $email, string $attivita, int $ore, string $luogo) {
        $m = new stdClass();
        $m->username = $username;
        $m->email = $email;
        $m->attivita = $attivita;
        $m->ore = $ore;
        $m->luogo = $luogo;
            
            return view('modify', ['obj' => $m]);
        });


