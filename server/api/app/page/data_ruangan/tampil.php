<?php 
require_once('../../../include/all_include.php');
$resp = [];
$resp["status"]="success";
$resp["result"] = array();

if (isset($_POST['berdasarkan']) && !empty($_POST['berdasarkan']) && isset($_POST['isi']) && !empty($_POST['isi']))
{
	$berdasarkan =  mysql_real_escape_string($_POST['berdasarkan']);
	$isi =  mysql_real_escape_string($_POST['isi']);
	$limit =  mysql_real_escape_string($_POST['limit']);
	$hal =  mysql_real_escape_string($_POST['hal']);
	if (isset($_POST['dari']) && !empty($_POST['dari']) && isset($_POST['sampai']) && !empty($_POST['sampai']))
	{
		$dari =  mysql_real_escape_string($_POST['dari']);
		$sampai =  mysql_real_escape_string($_POST['sampai']);
		$query="SELECT * FROM data_ruangan where $berdasarkan like '%$isi%'";
	}
	else
	{
		$query="SELECT * FROM data_ruangan where $berdasarkan like '%$isi%'";
	}
}
else
{
	$query = "select * from data_ruangan";
}

$proses = mysql_query($query);	
  while($data = mysql_fetch_array($proses))
  {
	
	$id_ruangan = $data["id_ruangan"];	
    $hasil['id_ruangan'] = $id_ruangan;
	$hasil['nama'] = $data["nama"];
	$hasil['gambar'] = $data["gambar"];
	$hasil['alamat'] = $data["alamat"];
	$hasil['kode_qrcode'] = $data["kode_qrcode"];
	$hasil['maksimal_kunjungan'] = $data["maksimal_kunjungan"];

    array_push($resp["result"], $hasil);
  }
  
json_print($resp);
?>
