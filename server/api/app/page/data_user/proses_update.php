<?php 
require_once('../../../include/all_include.php');

$id_user=isset($_POST["id_user"]) ? $_POST["id_user"]:"";
$nama=isset($_POST["nama"]) ? $_POST["nama"]:"";
$NPT=isset($_POST["NPT"]) ? $_POST["NPT"]:"";
$id_kelas=isset($_POST["id_kelas"]) ? $_POST["id_kelas"]:"";
$id_angkatan=isset($_POST["id_angkatan"]) ? $_POST["id_angkatan"]:"";
$alamat=isset($_POST["alamat"]) ? $_POST["alamat"]:"";
$username=isset($_POST["username"]) ? $_POST["username"]:"";
$password=isset($_POST["password"]) ? $_POST["password"]:"";


$sql = "UPDATE data_user SET 
nama=?,
NPT=?,
id_kelas=?,
id_angkatan=?,
alamat=?,
username=?,
password=?,

WHERE id_user=?";

$stmt = $dbh->prepare($sql);
$stmt->execute([
$nama,
$NPT,
$id_kelas,
$id_angkatan,
$alamat,
$username,
$password,

$id_user]);
$resp = [];
$resp["status"]="success";
echo (json_encode($resp)) 
?>
