<?php
  if (isset($_POST['email'])) {
    if (isset($_POST['katasandi'])) {
      $koneksi = new PDO('mysql:host=localhost;dbname=ppmb', 'root', '');
      $sth = $koneksi->prepare("SELECT *
          FROM `users`
          WHERE `email`=:email AND `password`=:katasandi");
      $sth->bindParam(':email', $_POST['email'], PDO::PARAM_STR, 100);
      $sth->bindParam(':katasandi', $_POST['katasandi'], PDO::PARAM_STR, 100);
      $sth->execute();
      if ($sth->rowCount() == 1) {
        $user = $sth->fetch();
        if ($user['email'] == $_POST['email'] && $user['password'] == $_POST['katasandi']) {
          $token = md5(date('Y-m-d H:i:s'));
          $sth2 = $koneksi->query("UPDATE users
          SET token='{$token}'
          WHERE email='{$_POST['email']}'");
          if (isset($_POST['simpan'])) {
            setcookie('ppmb_unair_token', $token);
            setcookie('ppmb_unair_email', $user['email']);
            // die();
          } else {
            session_start();
            $_SESSION['ppmb_unair_token'] = $token;
            $_SESSION['ppmb_unair_email'] = $user['email'];
          }

          header("location:/Registrasi/tampil.php");
          die();
        }
      }
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="gambar/icon.png">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form id="login_form" class="form-signin" method="post">
      <a class="mb-4" href="/Registrasi">
        <img src="gambar/icon.png" alt="" width="72" height="72">
      </a>
      <h1 class="h3 mb-3 font-weight-normal">Masuk</h1>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Alamat email" required autofocus>
      <label for="inputPassword" class="sr-only">Kata Sandi</label>
      <input type="password" id="inputPassword" name="katasandi" class="form-control" placeholder="Kata sandi" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" name="simpan" value="remember-me"> Ingat saya
        </label>
      </div>
      <input type="submit" class="btn btn-lg btn-block" value="Masuk"
      style="color:#fff;text-shadow:none;background-color:#c12e3c;border: .05rem solid #c12e3c;">
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
