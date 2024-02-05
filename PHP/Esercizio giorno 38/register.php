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
                    } /*  else {
                     echo "Record inserito con successo";
                 } */
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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    #tableImg {
        width: 5rem;
    }

    #tableUser {
        width: 70%;
        margin: 0 15%;
    }

    .navbar {
        background-color: #D1E7DD;
    }

    #register {
        font-size: 14px;
    }

    #logo {
        width: 60px;
    }

    #titolo {
        color: green;
    }

    #customForm {
        margin: 0 15rem;
        margin-top: 4rem;
        padding: 2rem 2rem;
        background-color: rgb(158, 243, 167);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.378);
    }

    #customInput:hover {
        border: 1px solid green !important;
    }

    #invalidCheck {
        background-color: green;
    }

    #tableImg {
        width: 5rem;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="index.php"><img id="logo"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png"
                    alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </nav>

    <h1 class="text-center fw-bold mt-3 text-success">Registrati</h1>
    <form id="customForm" method="post" action="register.php" enctype="multipart/form-data"
        class="row g-3 needs-validation border border-3 border-success" novalidate>
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">First name</label>
            <input type="text" placeholder="Firstname..." class="form-control" id="customInput" name="firstname"
                required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Last name</label>
            <input type="text" class="form-control" id="customInput" name="lastname" placeholder="LastName..." required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustomUsername" class="form-label">Username</label>
            <input type="text" class="form-control" id="customInput" name="username" placeholder="Username..." required>
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>
        </div>
        <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="customInput" name="email" placeholder="name@example.com">
        </div>
        <div class="col-md-6">
            <label for="inputPassword6" class="form-label">Password</label>
            <input type="password" id="customInput" class="form-control" name="password">
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">City</label>
            <input type="text" class="form-control" id="customInput" name="city" placeholder="City..." required>
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-6">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" name="image" type="file" id="customInput">
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-success" name="register" type="submit">Submit form</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>