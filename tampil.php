<?php
  include_once 'checkAuth.php';
  if (!auth()) {
    header("location:/Registrasi/login.php");
    die();
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="gambar/icon.png">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/registrasi.css" rel="stylesheet">

    <link href="css/jquery.dataTables.min.css" rel="stylesheet">
    <title>Daftar - Pendaftaran Mahasiswa Baru Universitas Airlangga</title>
  </head>
  <body>
    <div class="row text-white" style="background-color:#c12e3c">
      <div class="container col-md-6 col-sm-12 cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
          <div class="inner">
            <a href="/Registrasi">
              <h3 class="masthead-brand">PMB Universitas Airlangga</h3>
            </a>
            <nav class="nav nav-masthead justify-content-center">
              <a class="nav-link" href="/Registrasi">Beranda</a>
              <a class="nav-link" href="registrasi.php">Registrasi</a>
              <a class="nav-link active" href="tampil.php">Tampil</a>
            </nav>
          </div>
        </header>
      </div>
    </div>

    <div class="container col-md-12 col-sm-12">
      <div class="containerku my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-gray pb-2 mb-3" style="border-bottom: 1px solid #c12e3c">Data Pendaftar</h6>
        <div class="form-group row col-md-12" style="font-size:0.875rem">
          <table id="tabel-ppmb" class="table table-hover table-responsive">
            <thead>
              <tr>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Asal Sekolah</th>
                <th scope="col">#</th>
                <th scope="col">No. Seluler</th>
                <th scope="col">Email</th>
                <th scope="col">Agama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Pilihan I</th>
                <th scope="col">Pilihan II</th>
                <th scope="col">Pilihan III</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include_once 'koneksi.php';
              $query = "SELECT nik, p.nama, tempat_lahir, tanggal_lahir, asal_sekolah, jenis_kelamin, agama, no_seluler, tlp_rumah, email, alamat, CONCAT(p1.jenjang, ' - ', p1.nama) AS pilihan1, CONCAT(p2.jenjang, ' - ', p2.nama) AS pilihan2, CONCAT(p2.jenjang, ' - ', p2.nama) AS pilihan3
                        FROM `pendaftar` p
                        LEFT JOIN `prodi` p1 ON p.pilihan1=p1.id
                        LEFT JOIN `prodi` p2 ON p.pilihan2=p2.id
                        LEFT JOIN `prodi` p3 ON p.pilihan3=p3.id";
              $data = $koneksi->query($query);
              $data->data_seek(0);
              while ($row = $data->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['nik']}</td>";
                echo "<td>{$row['nama']}</td>";
                echo "<td>{$row['asal_sekolah']}</td>";
                echo ($row['jenis_kelamin'] = 'l') ? "<td>Laki-laki</td>" : "<td>Perempuan</td>";
                echo "<td>{$row['no_seluler']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "<td>{$row['agama']}</td>";
                echo "<td>{$row['alamat']}</td>";
                echo "<td>{$row['pilihan1']}</td>";
                echo "<td>{$row['pilihan2']}</td>";
                echo "<td>{$row['pilihan3']}</td>";
                echo "</tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <footer class="mastfoot mt-auto">
      <div class="container">
        <div class="inner">
          <p>&copy; 2018 <a href="http://si.fst.unair.ac.id">S1 Sistem Informasi Universitas Airlangga</a></p>
        </div>
      </div>
    </footer>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
    $(document).ready( function () {
      $('#tabel-ppmb').DataTable();
    });
    </script>
  </body>
</html>
