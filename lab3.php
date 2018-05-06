<?php
// $array['a'] = 12;
// $array['b'] = 'asdfaf';
// header('Content-Type: application/json');
// echo json_encode($array);
// include_once 'koneksi.php';
// $query = "SELECT nik, p.nama, tempat_lahir, tanggal_lahir, asal_sekolah, jenis_kelamin, agama, no_seluler, tlp_rumah, email, alamat, CONCAT(p1.jenjang, ' - ', p1.nama) AS pilihan1, CONCAT(p2.jenjang, ' - ', p2.nama) AS pilihan2, CONCAT(p2.jenjang, ' - ', p2.nama) AS pilihan3
//           FROM `pendaftar` p
//           LEFT JOIN `prodi` p1 ON p.pilihan1=p1.id
//           LEFT JOIN `prodi` p2 ON p.pilihan2=p2.id
//           LEFT JOIN `prodi` p3 ON p.pilihan3=p3.id";
// $data = $koneksi->query($query);
// $data->data_seek(0);
// echo "<pre>";
// while ($row = $data->fetch_assoc()) {
//   print_r($row);
// }
// echo "</pre>";

include_once 'checkAuth.php';
echo auth() . '<br>';

// session_start();
echo "<pre>";
print_r($_SESSION);
echo "cookie";
print_r($_COOKIE);
// session_unset();
echo "</pre>";


?>
