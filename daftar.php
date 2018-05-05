<?php
try {
  $koneksi = new PDO('mysql:host=localhost;dbname=ppmb', 'root', '');
  $date = date($_POST['tanggal_lahir']);
  $sth = $koneksi->prepare("INSERT
      INTO `pendaftar`
      VALUES (:nik, :nama, :tempat_lahir, :tanggal_lahir, :asal_sekolah, :jenis_kelamin, :agama, :no_seluler, :tlp_rumah, :email, :alamat, :pilihan1, :pilihan2, :pilihan3)");
  $tanggal_lahir = date($_POST['tanggal_lahir']);
  $sth->bindParam(':nik', $_POST['nik'], PDO::PARAM_STR, 20);
  $sth->bindParam(':nama', $_POST['nama'], PDO::PARAM_STR, 50);
  $sth->bindParam(':tempat_lahir', $_POST['tempat_lahir'], PDO::PARAM_STR, 50);
  $sth->bindParam(':tanggal_lahir', $tanggal_lahir, PDO::PARAM_STR, 8);
  $sth->bindParam(':asal_sekolah', $_POST['asal_sekolah'], PDO::PARAM_STR, 50);
  $sth->bindParam(':jenis_kelamin', $_POST['jenis_kelamin'], PDO::PARAM_STR, 1);
  $sth->bindParam(':agama', $_POST['agama'], PDO::PARAM_STR, 15);
  $sth->bindParam(':no_seluler', $_POST['no_seluler'], PDO::PARAM_STR, 15);
  $sth->bindParam(':tlp_rumah', $_POST['tlp_rumah'], PDO::PARAM_STR, 15);
  $sth->bindParam(':email', $_POST['email'], PDO::PARAM_STR, 50);
  $sth->bindParam(':alamat', $_POST['alamat'], PDO::PARAM_STR, 100);
  $sth->bindParam(':pilihan1', $_POST['pil1'], PDO::PARAM_INT);
  $sth->bindParam(':pilihan2', $_POST['pil2'], PDO::PARAM_INT);
  $sth->bindParam(':pilihan3', $_POST['pil3'], PDO::PARAM_INT);
  $sth->execute();
  header("location:/Registrasi/registrasi.php");
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
