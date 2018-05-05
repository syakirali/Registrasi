<?php
// $koneksi = new PDO('mysql:host=localhost;dbname=ppmb', 'root', '');
// $token = md5(date('Y-m-d'));
// $sth = $koneksi->query("INSERT INTO users(`token`) VALUES ('{$token}')");
// $str = "INSERT INTO users(`token`) VALUES ('{$token}')";
// echo $str;
$koneksi = new PDO('mysql:host=localhost;dbname=ppmb', 'root', '');
$email = 'admin@admin.com';
$password = 'adminadmin';
$sth = $koneksi->prepare("SELECT *
    FROM `users`
    WHERE `email`=:email AND `password`=:katasandi");
$sth->bindParam(':email', $email, PDO::PARAM_STR, 100);
$sth->bindParam(':katasandi', $password, PDO::PARAM_STR, 100);
$sth->execute();
$user = $sth->fetch();
echo "<pre>";
print_r($user);
echo "</pre>";
?>
