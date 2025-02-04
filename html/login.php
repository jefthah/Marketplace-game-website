<!doctype html>
<html lang="en">
<?php

require "func.php";
session_start();

if (isset($_SESSION["data"])) {
    header("Location: indexAfterLogin.php");
    exit;
}



if (isset($_POST["submit"])) {
  if (login($_POST) == true) {

    $email = $_POST["email"];
    $_SESSION["data"] = query("SELECT * FROM database_porto1_user where email = '$email'");

    header("Location: indexAfterLogin.php");
    exit;
  } else {
    $error = 1;
  }
}
?>



<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet" />

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
  .gradient-custom-2 {
    /* fallback for old browsers */
    background: #000000;

  }

  .btn:hover {
    background: red;
    color: #eee;
  }

  #form2Example11{
    color: #000000;
  }

  @media (min-width: 768px) {
    .gradient-form {
      height: 100vh !important;
    }
  }

  @media (min-width: 769px) {
    .gradient-custom-2 {
      border-top-right-radius: .3rem;
      border-bottom-right-radius: .3rem;
    }
  }
</style>
</head>

<body>
  <section class="h-200 gradient-form" style="background-color: #ffff;">
    <div class="container py-5 ">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card text-black" style="border-radius: 20px; background-color: #EEEEEE;">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center">
                    <img src="images/sijago-logo-removebg-preview.png" style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1" style="color: red">We are SiJago Team</h4>
                  </div>

                  <?php if (isset($error)) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Holy guacamole!</strong> password/email salah.
                    </div>
                  <?php endif; ?>

                  <p>Please login to your account</p>
                  <form action="" method="POST">

                    <div class="form-outline mb-4">
                      <input type="email" id="exampleFormControlInput1" class="form-control border-2" name="email" />
                      <label class="form-label" for="exampleFormControlInput1">Email Address</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example22" class="form-control" name="password" />
                      <label class="form-label" for="form2Example22">Password</label>
                    </div>

                    <button class="btn btn-danger btn-block fa-lg gradient-custom-2 mb-3" name="submit" type="submit">Log
                      in</button>

                  </form>


                  <div class="text-center pt-1 mb-5 pb-1">

                    <a class="text-muted" href="#!">Forgot password?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <a href="register.php"><button type="button" class="btn btn-outline-danger">Create new</button></a>
                  </div>


                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2" style="border-radius: 20px;">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4" style="color: red">We are more than just a company</h4>
                  <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  <<!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
</body>

</html>