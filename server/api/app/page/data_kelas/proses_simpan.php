<?php 
require_once('../../../include/all_include.php');

$id_kelas=isset($_POST["id_kelas"]) ? $_POST["id_kelas"]:"";
$kelas=isset($_POST["kelas"]) ? $_POST["kelas"]:"";


$query=mysql_query("insert into data_kelas values (
'$id_kelas'
,'$kelas'

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
