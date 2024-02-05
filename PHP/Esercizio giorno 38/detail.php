<?php
require 'config.php';

$mysqli = new mysqli(
    $config['mysql_host'],
    $config['mysql_user'],
    $config['mysql_password'],
    $config['mysql_database']
);

if ($mysqli->connect_error) {
    die($mysqli->connect_error);
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

    <?php echo '<h1 class="mt-5 ms-5">Profilo di: ' . $result['username'] . '</h1>'; ?>
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
                    <th></th>
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
                            <button type="button" class="btn btn-warning"><i
                                    class="bi bi-pencil-fill text-white"></i></button>
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