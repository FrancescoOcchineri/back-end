<?php

$config = [
    'mysql_host' => 'localhost',
    'mysql_user' => 'root',
];

$mysqli = new mysqli(
    $config['mysql_host'],
    $config['mysql_user'],
);

if ($mysqli->connect_error) {
    die($mysqli->connect_error);
}

$sql = 'CREATE DATABASE IF NOT EXISTS utenti';
if (!$mysqli->query($sql)) {
    die($mysqli->error);
}

$sql = 'USE utenti';
$mysqli->query($sql);

$sql = 'CREATE TABLE IF NOT EXISTS utentitab (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  pass VARCHAR(100) NOT NULL
)';

if (!$mysqli->query($sql)) {
    die($mysqli->error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $check_email_sql = "SELECT * FROM utentitab WHERE email = '$email'";
    $result = $mysqli->query($check_email_sql);
    if ($result->num_rows > 0) {
        echo "L'email inserita è già associata a un altro account.";
    } else {
        $insert_sql = "INSERT INTO utentitab (username, email, pass) VALUES ('$username', '$email', '$password')";
        if ($mysqli->query($insert_sql)) {
            echo "Utente registrato con successo!";
            header("Location: http://localhost/PHP/Esercizi/Esercizio%20giorno%2049_classi/index.php");
        } else {
            echo "Errore durante la registrazione dell'utente: " . $mysqli->error;
        }
    }
}

?>
