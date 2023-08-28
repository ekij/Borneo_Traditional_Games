<?php 
require_once('../../../include/all_include.php');

$id_materi=isset($_POST["id_materi"]) ? $_POST["id_materi"]:"";
$menu=isset($_POST["menu"]) ? $_POST["menu"]:"";
$halaman=isset($_POST["halaman"]) ? $_POST["halaman"]:"";
$materi=isset($_POST["materi"]) ? $_POST["materi"]:"";


$sql = "UPDATE data_materi SET 
menu=?,
halaman=?,
materi=?,

WHERE id_materi=?";

$stmt = $dbh->prepare($sql);
$stmt->execute([
$menu,
$halaman,
$materi,

$id_materi]);
$resp = [];
$resp["status"]="success";
echo (json_encode($resp)) 
?>
