<?php 
require_once('../../../include/all_include.php');

$id_permainan=isset($_POST["id_permainan"]) ? $_POST["id_permainan"]:"";
$nama=isset($_POST["nama"]) ? $_POST["nama"]:"";
$foto1=isset($_POST["foto1"]) ? $_POST["foto1"]:"";
$foto2=isset($_POST["foto2"]) ? $_POST["foto2"]:"";
$video=isset($_POST["video"]) ? $_POST["video"]:"";
$deskripsi=isset($_POST["deskripsi"]) ? $_POST["deskripsi"]:"";
$manfaat=isset($_POST["manfaat"]) ? $_POST["manfaat"]:"";
$cara_bermain=isset($_POST["cara_bermain"]) ? $_POST["cara_bermain"]:"";


$sql = "UPDATE data_permainan SET 
nama=?,
foto1=?,
foto2=?,
video=?,
deskripsi=?,
manfaat=?,
cara_bermain=?,

WHERE id_permainan=?";

$stmt = $dbh->prepare($sql);
$stmt->execute([
$nama,
$foto1,
$foto2,
$video,
$deskripsi,
$manfaat,
$cara_bermain,

$id_permainan]);
$resp = [];
$resp["status"]="success";
echo (json_encode($resp)) 
?>
