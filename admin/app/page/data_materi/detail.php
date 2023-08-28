
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
            $sql = mysql_query("SELECT * FROM data_materi where id_materi = '$proses'");
            $data = mysql_fetch_array($sql);
            ?>
           <!--h
            <tr>
                <td class="clleft" width="25%">Id Materi </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['id_materi']; ?></td>	
            </tr>
           h-->

            <tr>
                <td class="clleft" width="25%">Menu </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['menu']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Halaman </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['halaman']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Materi </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['materi']; ?></td>
            </tr>




            </tbody>
        </table>
    </div>
</div>
