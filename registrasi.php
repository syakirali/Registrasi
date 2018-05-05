<?php
  $databaru = false;
  if (isset($_POST['nama'])) {
    // echo "string";
    // die();
    $databaru = true;
    $error = false;
    $pesan = $_POST['nama'] . ' <strong>sukses</strong> terdaftar !';
    // echo $pesan;
    // die();
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
      // header("location:/Registrasi/registrasi.php");
    } catch (PDOException $e) {
      // print "Error!: " . $e->getMessage() . "<br/>";
      $error = true;
      $pesan = $e->getMessage();
    }
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
    <title>Daftar - Pendaftaran Mahasiswa Baru Universitas Airlangga</title>
  </head>
  <body>
    <div class="row text-white" style="background-color:#c12e3c">
      <div class="container col-md-6 col-sm-12 cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
          <div class="inner">
            <a href="/registrasi">
              <h3 class="masthead-brand">PMB Universitas Airlangga</h3>
            </a>
            <nav class="nav nav-masthead justify-content-center">
              <a class="nav-link" href="/Registrasi">Beranda</a>
              <a class="nav-link active" href="#">Registrasi</a>
              <a class="nav-link" href="tampil.php">Tampil</a>
            </nav>
          </div>
        </header>
      </div>
    </div>

    <div class="container col-md-6 col-sm-12">
      <form method="post">

        <?php if ($databaru) {?>
        <div class="alert mt-3 <?php echo (!$error) ? 'alert-primary' : 'alert-error'?> alert-dismissible fade show" role="alert">
          <?php echo $pesan?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?php } ?>

        <div class="containerku my-3 p-3 bg-white rounded box-shadow">
          <h6 class="border-gray pb-2 mb-3" style="border-bottom: 1px solid #c12e3c">Data Diri</h6>

          <div class="form-group row">
            <label for="form_nik" class="col-md-5 col-form-table">NIK</label>
            <div class="col-md-7">
              <input id="form_nik" type="text" class="form-control form-control-sm" placeholder="NIK" name="nik" value="" required>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-5">
              <label for="form_nama">Nama</label>
            </div>
            <div class="col-md-7">
              <input id="form_nama" type="text" class="form-control form-control-sm" placeholder="Nama" name="nama" value="" required>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-5">
              <label for="form_tempat_lahir">Tempat, tanggal Lahir</label>
            </div>
            <div class="col-md-3">
              <input id="form_tempat_lahir" type="text" class="form-control form-control-sm" placeholder="Tempat Lahir" name="tempat_lahir" value="" required>
            </div>
            <div class="col-md-4">
              <input id="form_tanggal_lahir" type="date" class="form-control form-control-sm" placeholder="Tanggal Lahir" name="tanggal_lahir" value="" required>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-5">
              <label for="form_asal_sekolah">Asal Sekolah</label>
            </div>
            <div class="col-md-7">
              <input id="form_asal_sekolah" type="text" class="form-control form-control-sm" placeholder="Asal Sekolah" name="asal_sekolah" value="" required>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-5">
              <label for="form_jenis_kelamin">Jenis Kelamin</label>
            </div>
            <div class="col-md-7">
              <select id="form_jenis_kelamin"class="custom-select form-control-sm" name="jenis_kelamin">
                <option selected>Pilih</option>
                <option value="l">Laki-laki</option>
                <option value="p">Perempuan</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-5">
              <label for="form_agama">Agama</label>
            </div>
            <div class="col-md-7">
              <select id="form_agama" class="custom-select form-control-sm" name="agama">
                <option selected>Pilih</option>
                <option value="islam">Islam</option>
                <option value="katolik">Katolik</option>
                <option value="katolik">Kristen</option>
                <option value="hindu">Hindu</option>
                <option value="budha">Budha</option>
                <option value="konghucu">Konghucu</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-5">
              <label for="form_seluler">No. Seluler</label>
            </div>
            <div class="col-md-7">
              <div class="input-group">
                <span type="text" class="input-group-text" style="padding: .25rem .5rem;font-size: .875rem;line-height: 1.5;border-radius: .2rem;">+62</span>
                <input type="number" name="no_seluler" class="form-control form-control-sm" id="form_seluler" placeholder="Nomor Seluler" aria-describedby="inputGroupPrepend" required>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-5">
              <label for="form_tlp_rumah">Telpon Rumah</label>
            </div>
            <div class="col-md-7">
              <div class="input-group">
                <span type="text" class="input-group-text" style="padding: .25rem .5rem;font-size: .875rem;line-height: 1.5;border-radius: .2rem;">0</span>
                <input type="number" name="tlp_rumah" class="form-control form-control-sm" id="form_telp_rumah" placeholder="Nomor Seluler" aria-describedby="inputGroupPrepend" required>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-5">
              <label for="form_email">Email</label>
            </div>
            <div class="col-md-7">
              <input type="email" name="email" id="form_email" class="form-control form-control-sm" placeholder="Email" value="" required>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-5">
              <label for="form_alamat">Alamat</label>
            </div>
            <div class="col-md-7">
              <textarea type="text" id="form_alamat" class="form-control form-control-sm" placeholder="Alamat" name="alamat" value="" required></textarea>
            </div>
          </div>
        </div>

        <div class="containerku my-3 p-3 bg-white rounded box-shadow">
          <h6 class="border-gray pb-2 mb-3" style="border-bottom: 1px solid #c12e3c">Pilihan Program Studi</h6>

          <div class="form-group row">
            <div class="col-md-5">
              <label class="pilihan1" for="form_pilihan1">Pilihan Pertama</label>
            </div>
            <div class="col-md-7">
              <input id="form_pilihan1" type="text" placeholder="pilih" class="form-control input-prodi form-control-sm" name="pilihan1" readonly required>
              <input type="hidden" name="pil1" id="pil1" value="">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-5">
              <label class="pilihan2" for="form_pilihan2">Pilihan Kedua</label>
            </div>
            <div class="col-md-7">
              <input id="form_pilihan2" type="text" class="form-control input-prodi form-control-sm" name="pilihan2" placeholder="pilih"  readonly required>
              <input type="hidden" name="pil2" id="pil2" value="">

              <div id="master-pilihan" style="display:none">
                <div class="list-group d-flex mt-3" id="list-tab" role="tablist" style="flex-direction:row">
                  <button class="btn btn-sm mr-1 dropdown-toggle" id="list-home-list" data-toggle="list" href="#datas1" role="tab" aria-controls="home">S1</button>
                  <button class="btn btn-sm mr-1 dropdown-toggle" id="list-profile-list" data-toggle="list" href="#datad4" role="tab" aria-controls="profile">D4</button>
                  <button class="btn btn-sm dropdown-toggle" id="list-messages-list" data-toggle="list" href="#datad3" role="tab" aria-controls="messages">D3</button>
                </div>

                <div class="d-flex mt-3">
                  <div class="tab-content" id="nav-tabContent" style="width:100%">

                    <div class="tab-pane fade show" id="datas1" role="tabpanel" aria-labelledby="list-home-list">
                      <div class="list-group">
                        <?php
                        include_once 'koneksi.php';
                        $query = "select id,fakultas,nama from prodi where jenjang = 'S1' order by nama";
                        $datas1 = $koneksi->query($query);
                        $datas1->data_seek(0);
                        while ($row = $datas1->fetch_assoc()) {
                          $fakultas = $row['fakultas'] == 16 ? ' (PDD Banyuwangi) ' : '';
                          echo "<button type='button' idprodi='{$row["id"]}' class='list-group-item list-group-item-action piljur'>S1 - " . $row['nama'] . $fakultas . "</buton>";
                        }
                        ?>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="datad4" role="tabpanel" aria-labelledby="list-profile-list">
                      <div class="list-group">
                        <?php
                        include_once 'koneksi.php';
                        $query = "select id,nama from prodi where jenjang = 'D4' order by nama";
                        $datas1 = $koneksi->query($query);
                        $datas1->data_seek(0);
                        while ($row = $datas1->fetch_assoc()) {
                          echo "<button type='button' idprodi='{$row["id"]}' class='list-group-item list-group-item-action piljur'>D4 - " . $row['nama'] . "</buton>";
                        }
                        ?>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="datad3" role="tabpanel" aria-labelledby="list-messages-list">
                      <div class="list-group">
                        <?php
                        include_once 'koneksi.php';
                        $query = "select id,nama from prodi where jenjang = 'D3' order by nama";
                        $datas1 = $koneksi->query($query);
                        $datas1->data_seek(0);
                        while ($row = $datas1->fetch_assoc()) {
                          echo "<button type='button' idprodi='{$row["id"]}' class='list-group-item list-group-item-action piljur'>D3 - " . $row['nama'] . "</buton>";
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-5">
              <label class="pilihan3" for="form_pilihan3">Pilihan Ketiga</label>
            </div>
            <div class="col-md-7">
              <input id="form_pilihan3" type="text" placeholder="pilih" class="form-control input-prodi form-control-sm" data-toggle="tooltip" data-html="true" title="Anda sudah memilih prodi ini di pilihan ketiga" name="pilihan3" readonly required>
              <input type="hidden" name="pil3" id="pil3" value="">
            </div>
          </div>

        </div>

        <div class="container mb-3">
          <input type="submit" class="btn btn-secondary" value="Daftar"
          style="color:#fff;text-shadow:none;background-color:#c12e3c;border: .05rem solid #c12e3c;">
        </div>

      </form>
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
    <script type="text/javascript">
        $('.input-prodi').focus(function(){
            console.log("focus");
            $(this).parent().append($('#master-pilihan'));
            $('#master-pilihan').removeAttr('style');
        });
        $('.input-prodi').focusout(function(){
            console.log('focusout');
        });
        $('.piljur').click(function(){
            var terpilih = $(this).html();
            var input = $(this).closest('.col-md-7').children().first();
            if (!$(this).attr('id')) {
              if ($('#'+input.attr('name')).length !== 0) {
                $('#'+input.attr('name')).removeAttr('id');
              }
              input.val(terpilih);
              var idprodi = $(this).attr('idprodi');
              input.parent().find('input').last().val(idprodi);
              console.log(input.parent().find('input').last());
              $(this).attr('id', input.attr('name'));
              $('#master-pilihan').css("display", "none");
              $('.tab-pane.fade.show.active').attr("class", "tab-pane fade");
              $('.btn.btn-sm.mr-1.dropdown-toggle.active.show').attr("class", "btn btn-sm mr-1 dropdown-toggle").attr("aria-selected", "false");
            } else {
              // var temp = '.' + $(this).attr('id');
              // var option = 'Kamu sudah memilih prodi ini di ' + $(temp).html();
              // console.log(option);
              switch ($(this).attr('id')) {
                case 'pilihan1':
                  $('#form_pilihan1').tooltip('show');
                  break;
                case 'pilihan2':
                  $('#form_pilihan2').tooltip('show');
                  break;
                case 'pilihan3':
                  $('#form_pilihan3').tooltip('show');
                  break;
                default:
                  break;
              }
            }
        });
    </script>
  </body>
</html>
