<?php
session_start();
echo 'Variabile di sessione: ';
print_r($_SESSION['utente']);
session_write_close();
?>