<!doctype html>
<html lang="en">
  <head>
    <title>Login Admin / Petugas - Aplikasi pembayaran SPP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/style.css">

    </head>
    <body class="img js-fullheight" style="background-image: url(img/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">LOGIN ADMIN / PETUGAS</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <form action="proses-login-petugas.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Masukan username anda.." required>
                    </div>
                <div class="form-group">
                    <label>Password</label>
                  <input id="NIS" type="password" name="password" class="form-control" placeholder="Masukan password anda.." required>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary submit px-3">LOGIN</button>
                </div>
                <div class="form-group d-md-flex">
                    <div class="w-50">
                        <a href="index.php"> Login siswa </a>
                </div>
              </form>
              </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

    </body>
</html>