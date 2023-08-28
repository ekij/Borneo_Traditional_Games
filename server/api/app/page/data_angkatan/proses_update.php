<?php 
require_once('../../../include/all_include.php');

$id_angkatan=isset($_POST["id_angkatan"]) ? $_POST["id_angkatan"]:"";
$angkatan=isset($_POST["angkatan"]) ? $_POST["angkatan"]:"";


$sql = "UPDATE data_angkatan SET 
angkatan=?,

WHERE id_angkatan=?";

$stmt = $dbh->prepare($sql);
$stmt->execute([
$angkatan,

$id_angkatan]);
$resp = [];
$resp["status"]="success";
echo (json_encode($resp)) 
?>
