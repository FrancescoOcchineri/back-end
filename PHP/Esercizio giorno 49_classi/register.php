<?php
require('controller.php');

use FormGenerator\Form;
use FormGenerator\Fields;

include('user.php');

$form = new Form('post', 'controller.php');
$username = new Fields('text', 'username', 'Your username...', 'Username', 'form-control form-control-lg');
$email = new Fields('email', 'email', 'Your email...', 'Email', 'form-control form-control-lg');
$password = new Fields('password', 'password', 'Your password...', 'Password', 'form-control form-control-lg');
$city = new Fields('text', 'city', 'Your city...', 'City', 'form-control form-control-lg');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                <?php echo $form->getForm(); ?>

                <div class="form-outline mb-4">
                    <?php echo $username->getLabel(); ?>
                    <?php echo $username->getInput(); ?>
                </div>

                <div class="form-outline mb-4">
                    <?php echo $email->getLabel(); ?>
                    <?php echo $email->getInput(); ?>
                </div>

                <div class="form-outline mb-4">
                    <?php echo $password->getLabel(); ?>
                    <?php echo $password->getInput(); ?>
                </div>

                <div class="d-flex justify-content-center">
    <form method="post" action="controller.php">
        <button type="submit" name="register" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
    </form>
</div>


            <p class="text-center text-muted mt-5 mb-0">Ritorna alla Home <a href="index.php" class="fw-bold text-body"><u>Clicca qui</u></a></p>


                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>

<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"
></script>
</body>
</html>
