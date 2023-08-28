<?php 
require_once('../../../include/all_include.php');

$id_riwayat=isset($_POST["id_riwayat"]) ? $_POST["id_riwayat"]:"";
$id_user=isset($_POST["id_user"]) ? $_POST["id_user"]:"";
$id_ruangan=isset($_POST["id_ruangan"]) ? $_POST["id_ruangan"]:"";
$waktu=isset($_POST["waktu"]) ? $_POST["waktu"]:"";


$query=mysql_query("insert into data_riwayat values (
'$id_riwayat'
,'$id_user'
,'$id_ruangan'
,'$waktu'

)");

$resp = [];
if($query){
	$resp["status"]="success";
}
else
{
	$resp["status"]="gagal";
}

echo (json_encode($resp)) 
?>
