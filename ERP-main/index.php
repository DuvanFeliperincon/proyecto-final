<?php
ob_start();
require_once('includes/load.php');
if ($session->isUserLoggedIn(true)) {
  redirect('home.php', false);
}
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login.css">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.min.css" rel="stylesheet" />
  <title>Login</title>
</head>
 
<section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="libs/images/login.svg" class="img-fluid"
            alt="Phone image">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <?php echo display_msg($msg); ?>
          <form method="post" action="auth.php" class="clearfix">
           <!-- User -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form1Example13">Usuario</label>
              <input type="text"  name="username" class="form-control form-control-lg" />
            </div>

            <div class="form-outline mb-4">
            <!-- password -->
              <label class="form-label" for="form1Example23">Contraseña</label>
              <input type="password" name="password" class="form-control form-control-lg" />
            </div>

            <div class="d-flex justify-content-around align-items-center mb-4">
              <a href="#!">¿Olvido Contraseña?</a>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block" >Ingresar</button>

          </form>
        </div>
      </div>
    </div>
  </section>
<?php include_once('layouts/footer.php'); ?>