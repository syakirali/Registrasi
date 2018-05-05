<?php
header("location:/Registrasi");
include_once 'koneksi.php';
$query = "select fakultas,nama from prodi where jenjang = 'S1' order by nama";
$datas1 = $koneksi->query($query);
// $datas1->data_seek(0);
$n = 1;
while ($row = $datas1->fetch_assoc()) {
  $fakultas = $row['fakultas'] == 16 ? ' (PDD Banyuwangi) ' : '';
  echo $n . '. S1 - ' . $row['nama'] . $fakultas . '<br>';
}
echo "<pre>";
print_r($datas1);
echo "</pre>";
?>
