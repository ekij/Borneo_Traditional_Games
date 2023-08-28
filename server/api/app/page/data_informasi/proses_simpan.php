<?php 
require_once('../../../include/all_include.php');

$id_informasi=isset($_POST["id_informasi"]) ? $_POST["id_informasi"]:"";
$panduan=isset($_POST["panduan"]) ? $_POST["panduan"]:"";
$tentang=isset($_POST["tentang"]) ? $_POST["tentang"]:"";


$query=mysql_query("insert into data_informasi values (
'$id_informasi'
,'$panduan'
,'$tentang'

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
