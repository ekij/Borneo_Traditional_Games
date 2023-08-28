<?php 
require_once('../../../include/all_include.php');

$id_angkatan=isset($_POST["id_angkatan"]) ? $_POST["id_angkatan"]:"";
$angkatan=isset($_POST["angkatan"]) ? $_POST["angkatan"]:"";


$query=mysql_query("insert into data_angkatan values (
'$id_angkatan'
,'$angkatan'

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
