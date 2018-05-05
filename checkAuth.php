<?php
  function auth() {
    session_start();
    if (isset($_SESSION['ppmb_unair_token'])) {
      if (isset($_SESSION['ppmb_unair_email'])) {
        return validate_user($_SESSION['ppmb_unair_token'], $_SESSION['ppmb_unair_email']);
      }
    } else if (isset($_COOKIE['ppmb_unair_token'])) {
      if (isset($_COOKIE['ppmb_unair_email'])) {
        return validate_user($_COOKIE['ppmb_unair_token'], $_COOKIE['ppmb_unair_email']);
      }
    }
    return false;
  }


  function validate_user($token, $email) {
    $koneksi = new PDO('mysql:host=localhost;dbname=ppmb', 'root', '');
    $sth = $koneksi->prepare("SELECT *
      FROM `users`
      WHERE `email`=:email AND `token`=:token");
    $sth->bindParam(':email', $email, PDO::PARAM_STR, 100);
    $sth->bindParam(':token', $token, PDO::PARAM_STR, 100);
    $sth->execute();
    if ($sth->rowCount() == 1) {
      $user = $sth->fetch();
      if ($user['email'] == $email && $user['token'] == $token) {
        return true;
      }
    }
    return false;
  }
?>
