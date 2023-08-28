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


$query=mysql_query("insert into data_user values (
'$id_user'
,'$nama'
,'$NPT'
,'$id_kelas'
,'$id_angkatan'
,'$alamat'
,'$username'
,'$password'

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
