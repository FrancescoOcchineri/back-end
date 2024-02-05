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

$sql = "SELECT * FROM utentitab";
$res = $mysqli->query($sql);

if (!$res) {
    die($mysqli->error);
}

$result = array();
while ($row = $res->fetch_assoc()) {
    array_push($result, $row);
}

?>

<?php include 'header.php'; ?>

<h1 class="mt-5 text-center">Lista utenti </h1>
<div class="mx-5 mt-5 d-flex justify-content-center">
    <?php
    if (isset($result) && !empty($result)) {
        ?>
        <table class="table table-success table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
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
                <?php
                foreach ($result as $key => $row) {
                    ?>
                    <tr>
                        <th scope="row">
                            <?= $key + 1 ?>
                        </th>
                        <td><img src="<?= $row['img'] ?>" width="70"></td>
                        <td>
                            <?= $row['firstname'] ?>
                        </td>
                        <td>
                            <?= $row['lastname'] ?>
                        </td>
                        <td>
                            <?= $row['username'] ?>
                        </td>
                        <td>
                            <?= $row['city'] ?>
                        </td>
                        <td>
                            <?= $row['email'] ?>
                        </td>
                        <td>
                            <a href="detail.php?id=<?= $row['id'] ?>" type="button" class="btn btn-primary"><i
                                    class="bi bi-info-circle"></i></a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <?php
    } else {
        echo '<h1>Nessun Utente trovato</h1>';
    }
    ?>
</div>

</html>