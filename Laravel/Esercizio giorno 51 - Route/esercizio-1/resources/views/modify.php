<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mt-3">Modifica <?= $obj->attivita ?></h1>
    <form class="row g-3 needs-validation mt-5 mx-auto" style="width: 60rem" novalidate>
  <div class="col">
    <label for="validationCustom01" class="form-label">Username</label>
    <input value="<?= $obj->username ?>" type="text" class="form-control" id="validationCustom01" required>
  </div>
  <div class="col">
    <label for="validationCustom02" class="form-label">Email</label>
    <input value="<?= $obj->email ?>" type="email" class="form-control" id="validationCustom02" required>
  </div>
  <div class="col">
    <label for="validationCustomUsername" class="form-label">Attività</label>
      <input value="<?= $obj->attivita ?>" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
    </div>
  </div>
  <div class="col">
    <label for="validationCustom03" class="form-label">Ore</label>
    <input value="<?= $obj->ore ?>" type="text" class="form-control" id="validationCustom03" required>
  </div>
  </div>
  <div class="col">
    <label for="validationCustom05" class="form-label">Luogo</label>
    <input value="<?= $obj->luogo ?>" type="text" class="form-control" id="validationCustom05" required>
  </div>
  <div class="col-12">
    <button class="btn btn-warning" type="submit">Modifica</button>
  </div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
