<?php
include '../../../include/all_include.php';

if (!isset($_POST['id_informasi'])) {
        
    ?>
    <script>
        alert("AKSES DITOLAK");
        location.href = "index.php";
    </script>
    <?php
    die();
}

$id_informasi = xss($_POST['id_informasi']);
$panduan = xss($_POST['panduan']);
$tentang = xss($_POST['tentang']);


$query = mysql_query("update data_informasi set 
panduan='$panduan',
tentang='$tentang'

where id_informasi='$id_informasi' ") or die(mysql_error());

if ($query) {
    ?>
    <script>location.href = "<?php index(); ?>?input=popup_edit";</script>
    <?php
} else {
    echo "GAGAL DIPROSES";
}
?>
