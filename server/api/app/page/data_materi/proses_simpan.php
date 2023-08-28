<?php 
require_once('../../../include/all_include.php');

$id_materi=isset($_POST["id_materi"]) ? $_POST["id_materi"]:"";
$menu=isset($_POST["menu"]) ? $_POST["menu"]:"";
$halaman=isset($_POST["halaman"]) ? $_POST["halaman"]:"";
$materi=isset($_POST["materi"]) ? $_POST["materi"]:"";


$query=mysql_query("insert into data_materi values (
'$id_materi'
,'$menu'
,'$halaman'
,'$materi'

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
