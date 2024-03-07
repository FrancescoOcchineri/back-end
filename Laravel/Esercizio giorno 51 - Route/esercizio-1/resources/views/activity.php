<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mt-3">Elenco attività</h1>
    <div class="d-flex justify-content-center">
      <table class="table table-dark table-hover mt-5" style="width: 70rem" >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Attività</th>
            <th scope="col">Ore</th>
            <th scope="col">Luogo</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($activities as $index => $activity): ?>
            <tr>
              <th scope="row"><?php echo $index + 1; ?></th>
              <td><?php echo $activity['username']; ?></td>
              <td><?php echo $activity['email']; ?></td>
              <td><?php echo $activity['attivita']; ?></td>
              <td><?php echo $activity['ore']; ?></td>
              <td><?php echo $activity['luogo']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
