
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
            $sql = mysql_query("SELECT * FROM data_permainan where id_permainan = '$proses'");
            $data = mysql_fetch_array($sql);
            ?>
           <!--h
            <tr>
                <td class="clleft" width="25%">Id Permainan </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['id_permainan']; ?></td>	
            </tr>
           h-->

            <tr>
                <td class="clleft" width="25%">Nama </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['nama']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Foto1 </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft">
                  <a href="../../../../admin/upload/<?php echo $data['foto1']; ?>"><img onerror="this.src='../../../data/image/error/file.png'" width="100"  src="../../../../admin/upload/<?php echo $data['foto1']; ?>"></a>
                    <br>
                  <?php echo $data['foto1']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Foto2 </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft">
                  <a href="../../../../admin/upload/<?php echo $data['foto2']; ?>"><img onerror="this.src='../../../data/image/error/file.png'" width="100"  src="../../../../admin/upload/<?php echo $data['foto2']; ?>"></a>
                    <br>
                  <?php echo $data['foto2']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Video </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft">
                  <a href="../../../../admin/upload/<?php echo $data['video']; ?>"><img onerror="this.src='../../../data/image/error/file.png'" width="100"  src="../../../../admin/upload/<?php echo $data['video']; ?>"></a>
                    <br>
                  <?php echo $data['video']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Deskripsi </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['deskripsi']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Manfaat </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['manfaat']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Cara Bermain </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['cara_bermain']; ?></td>
            </tr>




            </tbody>
        </table>
    </div>
</div>
