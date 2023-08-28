<?php
include '../../../include/all_include.php';

if (!isset($_POST['id_permainan'])) {
        
?>
    <script>
        alert("AKSES DITOLAK");
        location.href = "index.php";
    </script>
<?php
    die();
}

$id_permainan = xss($_POST['id_permainan']);
$nama = xss($_POST['nama']);
$foto1 = ($_FILES['foto1']['name']);
if (empty($foto1)) {
    $foto1 = $_POST['foto11'];
} else {
    $foto1 = upload('foto1');
};
$foto2 = ($_FILES['foto2']['name']);
if (empty($foto2)) {
    $foto2 = $_POST['foto21'];
} else {
    $foto2 = upload('foto2');
};
$video = $_POST['video'];
$deskripsi = xss($_POST['deskripsi']);
$manfaat = xss($_POST['manfaat']);
$cara_bermain = xss($_POST['cara_bermain']);


$query = mysql_query("update data_permainan set 
nama='$nama',
foto1='$foto1',
foto2='$foto2',
video='$video',
deskripsi='$deskripsi',
manfaat='$manfaat',
cara_bermain='$cara_bermain'

where id_permainan='$id_permainan' ") or die(mysql_error());

if ($query) {
?>
    <script>
        location.href = "<?php index(); ?>?input=popup_edit";
    </script>
<?php
} else {
    echo "GAGAL DIPROSES";
}
?>
