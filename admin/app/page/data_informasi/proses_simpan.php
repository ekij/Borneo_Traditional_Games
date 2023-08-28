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


$id_informasi = id_otomatis("data_informasi", "id_informasi", "10");
              $panduan=xss($_POST['panduan']);
              $tentang=xss($_POST['tentang']);


$query = mysql_query("insert into data_informasi values (
'$id_informasi'
 ,'$panduan'
 ,'$tentang'

)");

if ($query) {
    ?>
    <script>location.href = "<?php index(); ?>?input=popup_tambah";</script>
    <?php
} else {
    echo "GAGAL DIPROSES";
}
?>
