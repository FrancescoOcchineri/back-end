<?php
require 'controller.php';

$sql = "SELECT * FROM utentitab";
$res = $mysqli->query($sql);

if (!$res) {
    die($mysqli->error);
}

$result = array();
while ($row = $res->fetch_assoc()) {
    array_push($result, $row);
}

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    $sql = "SELECT * FROM utentitab WHERE id = $userId";
    $res = $mysqli->query($sql);

    if (!$res) {
        die($mysqli->error);
    }

    $result = $res->fetch_assoc();

} else {
    die($mysqli->error);
}

if (isset($_POST['delete'])) {
    $sql = "DELETE FROM utentitab WHERE id = $userId";
    $res = $mysqli->query($sql);

    if ($res) {
        header("Location: index.php");
    } else {
        die($mysqli->error);
    }
}

if (isset($_POST['update'])) {
    $sql = "UPDATE utentitab SET 
    firstname = '{$_POST['firstname']}',
    lastname = '{$_POST['lastname']}',
    username = '{$_POST['username']}',
    email = '{$_POST['email']}',
    pass = '{$_POST['password']}',
    city = '{$_POST['city']}'
    WHERE id = $userId";
    $res = $mysqli->query($sql);

    if ($res) {
        header("Location: index.php");
    } else {
        die($mysqli->error);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <?php include 'header.php'; ?>

    <?php echo '<div class="d-flex align-items-center"><a href="index.php"><i class="bi bi-arrow-left fs-3 ms-4 text-dark"></i></a>
    <h1 class="mt-5 ms-5">Profilo di: ' . $result['username'] . '</h1></div>'; ?>
    <div class="mx-5 mt-5 d-flex justify-content-center">
        <table class="table table-success table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Username</th>
                    <th scope="col">City</th>
                    <th scope="col">Email</th>
                    <th>Modifica</th>
                    <th>Elimina</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="<?= $result['img'] ?>" width="250"></td>
                    <td>
                        <?= $result['firstname'] ?>
                    </td>
                    <td>
                        <?= $result['lastname'] ?>
                    </td>
                    <td>
                        <?= $result['username'] ?>
                    </td>
                    <td>
                        <?= $result['city'] ?>
                    </td>
                    <td>
                        <?= $result['email'] ?>
                    </td>
                    <td>
                        <form method="post">
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"><i class="bi bi-pencil-fill text-white"></i></button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modifica utente</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="customForm" method="post" enctype="multipart/form-data"
                                                novalidate>
                                                <div>
                                                    <label for="validationCustom01" class="form-label">First
                                                        name</label>
                                                    <input type="text" placeholder="Firstname..." class="form-control"
                                                        id="customInput" name="firstname" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <label for="validationCustom02" class="form-label">Last name</label>
                                                    <input type="text" class="form-control" id="customInput"
                                                        name="lastname" placeholder="LastName..." required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <label for="validationCustomUsername"
                                                        class="form-label">Username</label>
                                                    <input type="text" class="form-control" id="customInput"
                                                        name="username" placeholder="Username..." required>
                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Email
                                                        address</label>
                                                    <input type="email" class="form-control" id="customInput"
                                                        name="email" placeholder="name@example.com">
                                                </div>
                                                <div class="mt-3">
                                                    <label for="inputPassword6" class="form-label">Password</label>
                                                    <input type="password" id="customInput" class="form-control"
                                                        name="password">
                                                </div>
                                                <div class="mt-3">
                                                    <label for="validationCustom03" class="form-label">City</label>
                                                    <input type="text" class="form-control" id="customInput" name="city"
                                                        placeholder="City..." required>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid city.
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <label for="formFile" class="form-label">Default file input
                                                        example</label>
                                                    <input class="form-control" name="image" type="file"
                                                        id="customInput">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="update" class="btn btn-primary">Modify</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <form method="post">
                            <button type="submit" name="delete" class="btn btn-danger"><i
                                    class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>