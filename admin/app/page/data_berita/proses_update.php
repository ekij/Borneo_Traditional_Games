<?php
include '../../../include/all_include.php';

if (!isset($_POST['id_berita'])) {
        
    ?>
    <script>
        alert("AKSES DITOLAK");
        location.href = "index.php";
    </script>
    <?php
    die();
}

$id_berita = xss($_POST['id_berita']);
$tanggal = xss($_POST['tanggal']);
$judul = xss($_POST['judul']);
$foto=($_FILES['foto']['name']); if (empty($foto)){$foto = $_POST['foto1'];} else { $foto = upload('foto');};
$isi = xss($_POST['isi']);


$query = mysql_query("update data_berita set 
tanggal='$tanggal',
judul='$judul',
foto='$foto',
isi='$isi'

where id_berita='$id_berita' ") or die(mysql_error());

if ($query) {
    ?>
    <script>location.href = "<?php index(); ?>?input=popup_edit";</script>
    <?php
} else {
    echo "GAGAL DIPROSES";
}
?>
