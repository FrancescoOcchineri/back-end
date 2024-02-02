<?php
session_start();

$utenti = [];
if (isset($_SESSION['utenti'])) {
  $utenti = $_SESSION['utenti'];
}
session_write_close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<style>
  #tableImg {
    width: 5rem;
  }

  #tableUser {
    width: 70%;
    margin: 0 15%;
  }
</style>

<body>
  <h1 class="text-center fw-bold mt-3 text-success">Form</h1>
  <form id="customForm" method="post" action="gestione.php" enctype="multipart/form-data"
    class="row g-3 needs-validation border border-3 border-success" novalidate>
    <div class="col-md-5">
      <label for="validationCustom01" class="form-label">First name</label>
      <input type="text" placeholder="Firstname..." class="form-control" id="customInput" name="firstname" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-5">
      <label for="validationCustom02" class="form-label">Last name</label>
      <input type="text" class="form-control" id="customInput" name="lastname" placeholder="LastName..." required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-5">
      <label for="validationCustomUsername" class="form-label">Username</label>
      <input type="text" class="form-control" id="customInput" name="username" placeholder="Username..." required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
    </div>
    <div class="col-md-5">
      <label for="exampleFormControlInput1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="customInput" name="email" placeholder="name@example.com">
    </div>
    <div class="col-md-5">
      <label for="validationCustom03" class="form-label">City</label>
      <input type="text" class="form-control" id="customInput" name="city" placeholder="City..." required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-5">
      <label for="formFile" class="form-label">Default file input example</label>
      <input class="form-control" name="miofile" type="file" id="customInput">
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-success" type="submit">Submit form</button>
    </div>
  </form>

  <div class="mx-5 mt-5">
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
        </tr>
      </thead>
      <tbody>
        <?php
        if ($utenti) {
          foreach ($utenti as $key => $utente) {
            ?>
            <tr>
              <th scope="row">
                <?= $key + 1 ?>
              </th>
              <td><img src="<?= $utente['miofile'] ?>" width="50"></td>
              <td>
                <?= $utente['firstname'] ?>
              </td>
              <td>
                <?= $utente['lastname'] ?>
              </td>
              <td>
                <?= $utente['username'] ?>
              </td>
              <td>
                <?= $utente['city'] ?>
              </td>
              <td>
                <?= $utente['email'] ?>
              </td>
            </tr>
          <?php }
        } ?>
      </tbody>
    </table>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>