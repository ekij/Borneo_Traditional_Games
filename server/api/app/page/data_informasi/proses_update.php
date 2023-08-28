<?php 
require_once('../../../include/all_include.php');

$id_informasi=isset($_POST["id_informasi"]) ? $_POST["id_informasi"]:"";
$panduan=isset($_POST["panduan"]) ? $_POST["panduan"]:"";
$tentang=isset($_POST["tentang"]) ? $_POST["tentang"]:"";


$sql = "UPDATE data_informasi SET 
panduan=?,
tentang=?,

WHERE id_informasi=?";

$stmt = $dbh->prepare($sql);
$stmt->execute([
$panduan,
$tentang,

$id_informasi]);
$resp = [];
$resp["status"]="success";
echo (json_encode($resp)) 
?>
