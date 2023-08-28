<?php 
require_once('../../../include/all_include.php');

$id_ruangan=isset($_POST["id_ruangan"]) ? $_POST["id_ruangan"]:"";
$nama=isset($_POST["nama"]) ? $_POST["nama"]:"";
$gambar=isset($_POST["gambar"]) ? $_POST["gambar"]:"";
$alamat=isset($_POST["alamat"]) ? $_POST["alamat"]:"";
$kode_qrcode=isset($_POST["kode_qrcode"]) ? $_POST["kode_qrcode"]:"";
$maksimal_kunjungan=isset($_POST["maksimal_kunjungan"]) ? $_POST["maksimal_kunjungan"]:"";


$sql = "UPDATE data_ruangan SET 
nama=?,
gambar=?,
alamat=?,
kode_qrcode=?,
maksimal_kunjungan=?,

WHERE id_ruangan=?";

$stmt = $dbh->prepare($sql);
$stmt->execute([
$nama,
$gambar,
$alamat,
$kode_qrcode,
$maksimal_kunjungan,

$id_ruangan]);
$resp = [];
$resp["status"]="success";
echo (json_encode($resp)) 
?>
