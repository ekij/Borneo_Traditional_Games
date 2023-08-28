
<a href="<?php index(); ?>">
    <?php btn_kembali(' KEMBALI'); ?>
</a>

<br><br>

<div class="content-box">
    <div class="content-box-content">
        <table <?php tabel_in(100, '%', 0, 'center'); ?>>		
            <tbody>
               
                <?php
                if (!isset($_GET['proses'])) {
                        
                    ?>
                <script>
                    alert("AKSES DITOLAK");
                    location.href = "index.php";
                </script>
                <?php
                die();
            }
            $proses = decrypt(mysql_real_escape_string($_GET['proses']));
            $sql = mysql_query("SELECT * FROM data_berita where id_berita = '$proses'");
            $data = mysql_fetch_array($sql);
            ?>
           <!--h
            <tr>
                <td class="clleft" width="25%">Id Berita </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['id_berita']; ?></td>	
            </tr>
           h-->

            <tr>
                <td class="clleft" width="25%">Tanggal </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo format_indo($data['tanggal']); ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Judul </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['judul']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Foto </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft">
                  <a href="../../../../admin/upload/<?php echo $data['foto']; ?>"><img onerror="this.src='../../../data/image/error/file.png'" width="100"  src="../../../../admin/upload/<?php echo $data['foto']; ?>"></a>
                    <br>
                  <?php echo $data['foto']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Isi </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['isi']; ?></td>
            </tr>




            </tbody>
        </table>
    </div>
</div>
