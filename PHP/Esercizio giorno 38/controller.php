<?php
require_once 'config.php';

$mysqli = new mysqli(
    $config['mysql_host'],
    $config['mysql_user'],
    $config['mysql_password'],
);

if ($mysqli->connect_error) {
    die($mysqli->connect_error);
}

$sql = 'CREATE DATABASE IF NOT EXISTS utenti';
if (!$mysqli->query($sql)) {
    die($mysqli->connect_error);
}

$sql = 'USE utenti';
$mysqli->query($sql);

$sql = 'CREATE TABLE IF NOT EXISTS utentitab (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  firstname VARCHAR(255) NOT NULL,
  lastname VARCHAR(255) NOT NULL,
  username VARCHAR(255) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  pass VARCHAR(100) NOT NULL,
  city VARCHAR(255) NULL,
  img VARCHAR(255) NULL
)';

if (!$mysqli->query($sql)) {
    die($mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $city = isset($_POST['city']) ? $_POST['city'] : '';
    $image = isset($_POST['image']) ? $_POST['image'] : '';

    $file_name = $_FILES['image']["tmp_name"];
    $file_type = $_FILES['image']["type"];
    $file_size = $_FILES['image']["size"];

    $target_dir = "uploads/";
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_size = $_FILES['image']['size'];

    $target_file = $target_dir . basename($file_name);

    if (!empty($_FILES['image'])) {
        if (strpos($file_type, "image/") === 0) {
            if ($file_size < 400000) {
                if (move_uploaded_file($file_tmp, $target_file)) {
                    $sql = "INSERT INTO utentitab (firstname, lastname, username, email, pass, city, img)
                            VALUES ('$firstname', '$lastname', '$username', '$email', '$password', '$city', '$target_file')";

                    if (!$mysqli->query($sql)) {
                        die($mysqli->error);
                    } else {
                        header('Location: http://localhost/PHP/Esercizi%20php/Esercizio%20giorno%2038/index.php');
                    }
                } else {
                    echo 'Errore!!!';
                }
            } else {
                echo 'FileSize troppo grande';
            }
        } else {
            echo 'FileType non supportato';
        }
    }
}
;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mysqli = new mysqli(
    $config['mysql_host'],
    $config['mysql_user'],
    $config['mysql_password'],
    $config['mysql_database']
);

if ($mysqli->connect_error) {
    die($mysqli->connect_error);
}

$sql = "SELECT * FROM utentitab";
$res = $mysqli->query($sql);

if (!$res) {
    die($mysqli->error);
}

$result = array();
while ($row = $res->fetch_assoc()) {
    array_push($result, $row);
}
;
?>