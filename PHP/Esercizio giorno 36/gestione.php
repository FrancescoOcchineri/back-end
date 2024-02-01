<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' &&
    isset($_POST['firstname']) &&
    isset($_POST['lastname']) &&
    isset($_POST['username']) &&
    isset($_POST['email']) &&
    isset($_POST['city']) &&
    isset($_FILES['miofile'])) {

    echo '<h1> Post: ' .
        $_POST['firstname'] . ' ' .
        $_POST['lastname'] . ' ' .
        $_POST['username'] . ' ' .
        $_POST['email'] . ' ' .
        $_POST['city'] . ' ' .
        $_FILES['miofile']['name'] . 
        '</h1>';
}

$file_name = $_FILES['miofile']['name'];
$file_size = $_FILES['miofile']['size'];
$file_type = $_FILES['miofile']['type'];

$target_dir = 'files/';

if(!empty($_FILES['miofile'])) {
    echo '<h3>File Name: ' . $file_name . '</h3>';
    echo '<h3>File Type: ' . $file_type . '</h3>';
    echo '<h3>File Size: ' . $file_size . '</h3>';
    if($file_type === "image/png") {
        if($file_size < 20000) {
            if(is_uploaded_file($_FILES["miofile"]["tmp_name"]) && $_FILES["miofile"]["error"] === UPLOAD_ERR_OK) {
                if(move_uploaded_file($_FILES['miofile']["tmp_name"], $target_dir.$file_name)) {
                    echo "Caricamento avvenuto con successo";  
                }  else {
                    echo "Caricamento fallito";
                }
            }
        } else {
            echo "File troppo grande, limita a 20000";
        }
    } else {
        echo "File non supportato, carica un file .png";
    }
}

$utente = [
    'firstname' => $_POST['firstname'],
    'lastname' => $_POST['lastname'],
    'username' => $_POST['username'],
    'email' => $_POST['email'],
    'city' => $_POST['city'],
    'miofile' => $_FILES['miofile']['name'],
];

session_start();
$_SESSION['utente'] = $utente;

session_write_close();
var_dump($_SESSION);

header('Location: http://localhost/PHP/Pratica/Esercizio%20giorno%2036/form.php');
?>
