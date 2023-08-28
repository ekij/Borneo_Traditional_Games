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


$id_materi = id_otomatis("data_materi", "id_materi", "10");
              $menu=xss($_POST['menu']);
              $halaman=xss($_POST['halaman']);
              $materi=xss($_POST['materi']);


$query = mysql_query("insert into data_materi values (
'$id_materi'
 ,'$menu'
 ,'$halaman'
 ,'$materi'

)");

if ($query) {
    ?>
    <script>location.href = "<?php index(); ?>?input=popup_tambah";</script>
    <?php
} else {
    echo "GAGAL DIPROSES";
}
?>
