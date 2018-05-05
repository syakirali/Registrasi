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
              <a class="nav-link" href="login.php">Tampil</a>
            </nav>
          </div>
        </header>
      </div>
    </div>

    <div class="container col-md-6 col-sm-12">
      <form class="" action="registrasi.php" onsubmit="preventDefault" method="post">

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
              <input id="form_asal_sekolah" type="text" class="form-control form-control-sm" placeholder="Asal Sekolah" name="form_asal_sekolah" value="" required>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-5">
              <label for="form_nama">Jenis Kelamin</label>
            </div>
            <div class="col-md-7">
              <select class="custom-select form-control-sm">
                <option selected>Pilih</option>
                <option value="l">Laki-laki</option>
                <option value="p">Perempuan</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-5">
              <label for="form_nama">Agama</label>
            </div>
            <div class="col-md-7">
              <select class="custom-select form-control-sm">
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
              <label for="form_nama">No. Seluler</label>
            </div>
            <div class="col-md-7">
              <div class="input-group">
                <span type="text" class="input-group-text" style="padding: .25rem .5rem;font-size: .875rem;line-height: 1.5;border-radius: .2rem;">+62</span>
                <input type="number" class="form-control form-control-sm" id="form_seluler" placeholder="Nomor Seluler" aria-describedby="inputGroupPrepend" required>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-5">
              <label for="form_nama">Telpon Rumah</label>
            </div>
            <div class="col-md-7">
              <div class="input-group">
                <span type="text" class="input-group-text" style="padding: .25rem .5rem;font-size: .875rem;line-height: 1.5;border-radius: .2rem;">0</span>
                <input type="number" class="form-control form-control-sm" id="form_seluler" placeholder="Nomor Seluler" aria-describedby="inputGroupPrepend" required>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-5">
              <label for="form_nama">Email</label>
            </div>
            <div class="col-md-7">
              <input id="form_nama" type="email" class="form-control form-control-sm" placeholder="Email" name="nama" value="" required>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-5">
              <label for="form_alamat">Alamat</label>
            </div>
            <div class="col-md-7">
              <textarea id="form_alamat" type="text" class="form-control form-control-sm" placeholder="Alamat" name="alamat" value="" required></textarea>
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
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Akuntansi	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Akuntansi (PDD Banyuwangi)	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Antropologi	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Biologi	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Budidaya Perairan	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Budidaya Perairan (PDD Banyuwangi)	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Ekonomi Islam	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Ekonomi Pembangunan	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Fisika	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Ilmu Administrasi Negara	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Ilmu dan Teknologi Lingkungan	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Ilmu Gizi	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Ilmu Hubungan Internasional	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Ilmu Hukum	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Ilmu Informasi dan Perpustakaan	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Ilmu Komunikasi	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Ilmu Politik	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Ilmu Sejarah	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Kesehatan Masyarakat	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Kesehatan Masyarakat (PDD Banyuwangi)	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Kimia	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Manajemen	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Matematika	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Pendidikan Apoteker	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Pendidikan Bidan	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Pendidikan Dokter	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Pendidikan Dokter Gigi	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Pendidikan Dokter Hewan	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Pendidikan Dokter Hewan (PDD Banyuwangi)	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Pendidikan Ners	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Psikologi	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Sastra Indonesia	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Sastra Inggris	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Sastra Jepang	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Sistem Informasi	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Sosiologi	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Statistika	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Teknobiomedik	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">S1 - Teknologi Industri Hasil Perikanan	</button>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="datad4" role="tabpanel" aria-labelledby="list-profile-list">
                      <div class="list-group">
                        <button type="button" class="list-group-item list-group-item-action piljur">D4 - 	Pengobat Tradisional	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">D4 -	Fisioterapi	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">D4 -	Radiologi	</button>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="datad3" role="tabpanel" aria-labelledby="list-messages-list">
                      <div class="list-group">
                        <button type="button" class="list-group-item list-group-item-action piljur">D3 -	Pengobat Tradisional	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">D3 -	Fisioterapi	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">D3 -	Analis Medis	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">D3 -	Teknik Kesehatan Gigi	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">D3 -	Manajemen Pemasaran	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">D3 -	Manajemen Perbankan	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">D3 -	Akuntansi	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">D3 -	Perpajakan	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">D3 -	Manajemen Kesekretariatan dan Perkantoran	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">D3 -	Manajemen Perhotelan	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">D3 -	Kepariwisataan / Bina Wisata	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">D3 -	Teknisi Perpustakaan	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">D3 -	Bahasa Inggris	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">D3 -	Hiperkes dan Keselamatan Kerja	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">D3 -	Otomasi Sistem Instrumentasi	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">D3 -	Sistem Informasi	</button>
                        <button type="button" class="list-group-item list-group-item-action piljur">D3 -	Kesehatan Ternak	</button>

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
            var input = $(this).closest('.col-md-7').find('input');
            console.log($(this).attr('id'));
            if (!$(this).attr('id')) {
              if ($('#'+input.attr('name')).length !== 0) {
                $('#'+input.attr('name')).removeAttr('id');
              }
              input.val(terpilih);
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

              }
            }

        });
    </script>
  </body>
</html>
