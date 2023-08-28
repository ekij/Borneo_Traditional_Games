<?php 
require_once('../../../include/all_include.php');

$id_kelas=isset($_POST["id_kelas"]) ? $_POST["id_kelas"]:"";
$kelas=isset($_POST["kelas"]) ? $_POST["kelas"]:"";


$sql = "UPDATE data_kelas SET 
kelas=?,

WHERE id_kelas=?";

$stmt = $dbh->prepare($sql);
$stmt->execute([
$kelas,

$id_kelas]);
$resp = [];
$resp["status"]="success";
echo (json_encode($resp)) 
?>
