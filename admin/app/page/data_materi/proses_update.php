<?php
include '../../../include/all_include.php';

if (!isset($_POST['id_materi'])) {
        
    ?>
    <script>
        alert("AKSES DITOLAK");
        location.href = "index.php";
    </script>
    <?php
    die();
}

$id_materi = xss($_POST['id_materi']);
$menu = xss($_POST['menu']);
$halaman = xss($_POST['halaman']);
$materi = xss($_POST['materi']);


$query = mysql_query("update data_materi set 
menu='$menu',
halaman='$halaman',
materi='$materi'

where id_materi='$id_materi' ") or die(mysql_error());

if ($query) {
    ?>
    <script>location.href = "<?php index(); ?>?input=popup_edit";</script>
    <?php
} else {
    echo "GAGAL DIPROSES";
}
?>
