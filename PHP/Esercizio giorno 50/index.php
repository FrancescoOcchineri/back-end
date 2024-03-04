<?php
require_once('classes/Biblioteca.php');

use Biblioteca\Libro as LI;

$libro1 = new LI('A piedi nudi sulla terra', 'Folco Terzani', '2011');
$libro2 = new LI('Pelle di leopardo', 'Tiziano Terzani', '2000');
$libro3 = new LI('In Asia', 'Tiziano Terzani', '1998');
$libri = [$libro1, $libro2, $libro3];

use Biblioteca\DVD as DV;

$dvd1 = new DV('Il silenzio degli innocenti', 'Jonathan Demme', '1991');
$dvd2 = new DV('Il sesto senso', 'M. Night Shyamalan', '1999');
$dvd3 = new DV('Il miglio verde', 'Frank Darabont', '1999');
$dvd = [$dvd1, $dvd2, $dvd3];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <?php
            foreach ($libri as $libro) {
                ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://m.media-amazon.com/images/I/81UWU6RWriL._AC_UF1000,1000_QL80_.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $libro->titolo; ?>
                            </h5>

                            <p class="card-text">
                                <?php echo $libro->autore; ?>
                            </p>
                            <p class="card-text badge text-bg-dark">
                                <?php echo $libro->annoPubblicazione; ?>
                            </p>
                            <br />
                            <a href="#" class="btn btn-sm btn-success"
                                onclick="prestaLibro(<?php echo $libro->id; ?>)">Presta</a>
                            <a href="#" class="btn btn-sm btn-danger"
                                onclick="restituisciLibro(<?php echo $libro->id; ?>)">Restituisci</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <?php echo '<p> Totale libri: ' . LI::contaLibri() . '</p>'; ?>

    <div class="container mt-5">
        <div class="row">
            <?php
            foreach ($dvd as $dv) {
                ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://m.media-amazon.com/images/I/81UWU6RWriL._AC_UF1000,1000_QL80_.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $dv->titolo; ?>
                            </h5>

                            <p class="card-text">
                                <?php echo $dv->regista; ?>
                            </p>
                            <p class="card-text badge text-bg-dark">
                                <?php echo $dv->annoPubblicazione; ?>
                            </p>
                            <br />
                            <a href="#" class="btn btn-sm btn-success"
                                onclick="prestaDVD(<?php echo $dv->id; ?>)">Presta</a>
                            <a href="#" class="btn btn-sm btn-danger"
                                onclick="restituisciDVD(<?php echo $dv->id; ?>)">Restituisci</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <?php echo '<p> Totale DVD: ' . DV::contaDVD() . '</p>'; ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>