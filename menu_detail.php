<?php

include 'admin/include/koneksi/koneksi.php';
function baca_database($tabel,$field,$query)
{
	
	if ($query=="")
	{
		$sql = 'SELECT * FROM '.$tabel;
	}
	else
	{
		$sql = $query;
	}
	
	$querytabelualala=$sql;
	$prosesulala = mysql_query($querytabelualala);
	$datahasilpemrosesanquery = mysql_fetch_array($prosesulala);
	$hasiltermantab = $datahasilpemrosesanquery[$field];
	return $hasiltermantab;
}
$menu = $_GET['menu'];
$halaman = $_GET['halaman'];
echo baca_database("","materi","select * from data_materi where menu='$menu' and halaman='$halaman'");

?>

