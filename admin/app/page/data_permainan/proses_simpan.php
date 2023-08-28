<?php
include '../../../include/all_include.php';

if (!isset($_POST['id_permainan'])) {
      
?>
  <script>
    alert("AKSES DITOLAK");
    location.href = "index.php";
  </script>
<?php
  die();
}


$id_permainan = id_otomatis("data_permainan", "id_permainan", "10");
$nama = xss($_POST['nama']);
$foto1 = upload('foto1');
$foto2 = upload('foto2');
$video = $_POST[ 'video' ];
$deskripsi = xss($_POST['deskripsi']);
$manfaat = xss($_POST['manfaat']);
$cara_bermain = xss($_POST['cara_bermain']);


$query = mysql_query("insert into data_permainan values (
'$id_permainan'
 ,'$nama'
 ,'$foto1'
 ,'$foto2'
 ,'$video'
 ,'$deskripsi'
 ,'$manfaat'
 ,'$cara_bermain'

)");

if ($query) {
?>
  <script>
    location.href = "<?php index(); ?>?input=popup_tambah";
  </script>
<?php
} else {
  echo "GAGAL DIPROSES";
}
?>
