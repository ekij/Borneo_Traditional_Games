<?php 
require_once('../../../include/all_include.php');

$id_riwayat=isset($_POST["id_riwayat"]) ? $_POST["id_riwayat"]:"";
$id_user=isset($_POST["id_user"]) ? $_POST["id_user"]:"";
$id_ruangan=isset($_POST["id_ruangan"]) ? $_POST["id_ruangan"]:"";
$waktu=isset($_POST["waktu"]) ? $_POST["waktu"]:"";


$sql = "UPDATE data_riwayat SET 
id_user=?,
id_ruangan=?,
waktu=?,

WHERE id_riwayat=?";

$stmt = $dbh->prepare($sql);
$stmt->execute([
$id_user,
$id_ruangan,
$waktu,

$id_riwayat]);
$resp = [];
$resp["status"]="success";
echo (json_encode($resp)) 
?>
