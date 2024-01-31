<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        #table1 {
            width: 50% !important;
            margin: auto;
        }

        #table2 {
            width: 60% !important;
            margin: auto;
        }
    </style>
</head>

<body>
    <?php
    echo '<h1 class="text-center text-danger">Esercizio 1</h1>';
    $today = date("Y-m-d H:i:s");
    echo '<p class="text-center fs-4 mt-3 text-dark">' . 'Data e ora corrente: ' . '<span class="text-info">' . $today . '</span></p>';
    echo '<div id="image">';
    echo '<h1 class="text-center mt-5 fw-bold text-danger">Esercizio 2</h1>';
    $arrTeam = [
        'Atalanta' => 'Musso, Toloi, Scalvini, Kolasinac; Ruggeri, De Roon, Ederson, Zappacosta, Koopmeiners, De Ketelaere, Scamacca',
        'Bologna' => 'Skorupski, Posch, Beukema, Lucumì, Kristiansen, Freuler, Moro, Ndoye, Ferguson, Orsolini, Zirkzee',
        'Cagliari' => 'Radunovic, Zappa, Dossena, Obert, Augello, Nandez, Makoumbou, Sulemana, Jankto, Petagna, Lapdula',
        'Fiorentina' => 'Christensen, Dodo, Milenkovic, Quarta, Biraghi, Arthur, Lopez, Mandragora; Gonzalez, Bonaventura, Ikone, Beltran',
        'Frosinone' => 'Turati, Lirola, Okoli, Romagnoli, Marchizza, Mazzitelli, Barrenechea, Gelli, Bourabia, Harroui, Cheddira',
        'Genoa' => 'Martinez, Sabelli, Bani, Dragusin, Vasquez, Frendrup, Badelj, Strootman, Malinovsky, Gudmundsson, Retegui',
        'Inter' => 'Sommer, Pavard, Acerbi, Bastoni, Dumfries, Barella, Calhanoglu, Mkhitaryan, Dimarco, Thuram, Lautaro',
        'Juventus' => 'Szczesny, Gatti, Bremer, Danilo, Weah, Rabiot, Locatelli, Fagioli, Kostic, Chiesa, Vlahovic',
        'Lazio' => 'Provedel, Marusic, Casale, Romagnoli, L.Pellegrini, Kamada, Rovella, Luis Alberto, Felipe Anderson, Immobile, Zaccagni',
        'Lecce' => 'Falcone, Gendrey, Baschirotto, Pongracic, Gallo, Kaba, Ramadani, Rafia, Strefezza, Almqvist, Krstovic',
        'Milan' => 'Maignan, Calabria, Thiaw, Tomori, Theo Hernandez, Loftus-Cheek, Reijnders, Krunic, Chukwueze, Giroud, Leao',
        'Monza' => 'Di Gregorio, Izzo, Pablo Marì, Caldirola, Ciurria, Gagliardini, Pessina, Kyriakopoulos, Colpani, Caprari, Dany Mota',
        'Napoli' => 'Meret, Di Lorenzo, Rrahmani, Natan, Olivera, Anguissa, Lobotka, Zielinski, Politano, Osimhen, Kvaratskhelia',
        'Roma' => ' Rui Patricio, Mancini, Smalling, Ndicka, Kristensen, Pellegrini, Paredes, Aouar, Spinazzola, Dybala, Lukaku',
        'Salernitana' => 'Ochoa, Lovato, Gyomber, Pirola, Mazzocchi, L.Coulibaly, Bohinen, Bradaric, Candreva, Kastanos, Dia',
        'Sassuolo' => 'Consigli, Pedersen, Viti, Erlic, Vina, Henrique, Racic, Bajrami, Berardi, Pinamonti, Laurienté',
        'Torino' => 'Milinkovic-Savic, Schuurs, Buongiorno, Rodriguez, Bellanova, Ricci, Ilic, Lazaro, Vlasic, Sanabria, Zapata',
        'Udinese' => 'Silvestri, Perez, Bijol, Masina, Ferreira, Samardzic, Walace, Lovric, Kamara, Deulofeu, Lucca',
        'Verona' => 'Montipò, Faraoni, Dawidowicz, Magnani, Cabal, Hongla, Duda, Lazovic, Ngonge, Folornusho, Djuric',
    ];

    echo '<table id="table1" class="table table-dark table-striped mt-3">';
    echo '<tbody>';
    foreach ($arrTeam as $key => $value) {
        echo '<tr>';
        echo '<th scope="row">' . $key . ':' . '</th>';
        echo '<td class="text-justify">' . $value . '.' . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';

    echo '<h1 class="text-danger text-center mt-5 fw-bold">Esercizio 3<h1/>';
    echo '<h2 class="text-primary text-center mt-5 fw-bold">Partite<h2/>';
    $partiteSerieA = [
        [
            'casa' => 'Lecce',
            'trasferta' => 'Fiorentina',
            'formazioni' => [
                'Lecce' => 'Falcone, Gendrey, Baschirotto, Pongracic, Gallo, Kaba, Ramadani, Rafia, Strefezza, Almqvist, Krstovic',
                'Fiorentina' => 'Christensen, Dodo, Milenkovic, Quarta, Biraghi, Arthur, Lopez, Mandragora; Gonzalez, Bonaventura, Ikone, Beltran',
            ],
        ],
        [
            'casa' => 'Empoli',
            'trasferta' => 'Genoa',
            'formazioni' => [
                'Empoli' => 'Perisan, Berisha, Goglichidze, Pezzella, Bereszynski, Indragoli, Marin, Fazzini, Baldanzi, Shpendi, Cancellieri',
                'Genoa' => 'Martinez, Sabelli, Bani, Dragusin, Vasquez, Frendrup, Badelj, Strootman, Malinovsky, Gudmundsson, Retegui',
            ],
        ],
        [
            'casa' => 'Udinese',
            'trasferta' => 'Monza',
            'formazioni' => [
                'Udinese' => 'Silvestri, Perez, Bijol, Masina, Ferreira, Samardzic, Walace, Lovric, Kamara, Deulofeu, Lucca',
                'Monza' => 'Di Gregorio, Izzo, Pablo Marì, Caldirola, Ciurria, Gagliardini, Pessina, Kyriakopoulos, Colpani, Caprari, Dany Mota',
            ],
        ],
        [
            'casa' => 'Frosinone',
            'trasferta' => 'Milan',
            'formazioni' => [
                'Frosinone' => 'Turati, Lirola, Okoli, Romagnoli, Marchizza, Mazzitelli, Barrenechea, Gelli, Bourabia, Harroui, Cheddira',
                'Milan' => 'Maignan, Calabria, Thiaw, Tomori, Theo Hernandez, Loftus-Cheek, Reijnders, Krunic, Chukwueze, Giroud, Leao',
            ],
        ],
        [
            'casa' => 'Bologna',
            'trasferta' => 'Sassuolo',
            'formazioni' => [
                'Bologna' => 'Skorupski, Posch, Beukema, Lucumì, Kristiansen, Freuler, Moro, Ndoye, Ferguson, Orsolini, Zirkzee',
                'Sassuolo' => 'Consigli, Pedersen, Viti, Erlic, Vina, Henrique, Racic, Bajrami, Berardi, Pinamonti, Laurienté',
            ],
        ],
        [
            'casa' => 'Torino',
            'trasferta' => 'Salernitana',
            'formazioni' => [
                'Torino' => 'Milinkovic-Savic, Schuurs, Buongiorno, Rodriguez, Bellanova, Ricci, Ilic, Lazaro, Vlasic, Sanabria, Zapata',
                'Salernitana' => 'Ochoa, Lovato, Gyomber, Pirola, Mazzocchi, L.Coulibaly, Bohinen, Bradaric, Candreva, Kastanos, Dia',
            ],
        ],
        [
            'casa' => 'Napoli',
            'trasferta' => 'Verona',
            'formazioni' => [
                'Napoli' => 'Meret, Di Lorenzo, Rrahmani, Natan, Olivera, Anguissa, Lobotka, Zielinski, Politano, Osimhen, Kvaratskhelia',
                'Verona' => 'Montipò, Faraoni, Dawidowicz, Magnani, Cabal, Hongla, Duda, Lazovic, Ngonge, Folornusho, Djuric',
            ],
        ],
        [
            'casa' => 'Atalanta',
            'trasferta' => 'Lazio',
            'formazioni' => [
                'Atalanta' => 'Musso, Toloi, Scalvini, Kolasinac; Ruggeri, De Roon, Ederson, Zappacosta, Koopmeiners, De Ketelaere, Scamacca',
                'Lazio' => 'Provedel, Marusic, Casale, Romagnoli, L.Pellegrini, Kamada, Rovella, Luis Alberto, Felipe Anderson, Immobile, Zaccagni',
            ],
        ],
        [
            'casa' => 'Inter',
            'trasferta' => 'Juventus',
            'formazioni' => [
                'Inter' => 'Sommer, Pavard, Acerbi, Bastoni, Dumfries, Barella, Calhanoglu, Mkhitaryan, Dimarco, Thuram, Lautaro',
                'Juventus' => 'Szczesny, Gatti, Bremer, Danilo, Weah, Rabiot, Locatelli, Fagioli, Kostic, Chiesa, Vlahovic',
            ],
        ],
        [
            'casa' => 'Roma',
            'trasferta' => 'Cagliari',
            'formazioni' => [
                'Roma' => ' Rui Patricio, Mancini, Smalling, Ndicka, Kristensen, Pellegrini, Paredes, Aouar, Spinazzola, Dybala, Lukaku',
                'Cagliari' => 'Radunovic, Zappa, Dossena, Obert, Augello, Nandez, Makoumbou, Sulemana, Jankto, Petagna, Lapdula',
            ],
        ],
    ];

    echo '<table id="table2" class="table table-dark table-striped mt-3">';
    echo '<thead>';
    echo '<tr>';
    echo '<th scope="col">Casa</th>';
    echo '<th scope="col">Trasferta</th>';
    echo '<th scope="col">Formazioni</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($partiteSerieA as $partita) {
        echo '<tr>';
        echo '<td>' . ($partita['casa']) . ' -' . '</td>';
        echo '<td>' . ($partita['trasferta']) . '</td>';
        echo '<td>';
        echo '<strong>' . ($partita['casa']) . ':</strong> ' . $partita['formazioni'][$partita['casa']] . '<br>';
        echo '<strong>' . ($partita['trasferta']) . ':</strong> ' . $partita['formazioni'][$partita['trasferta']] . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
    ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>