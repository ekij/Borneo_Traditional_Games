<a href="<?php index(); ?>">
    <?php btn_kembali(' KEMBALI KE HALAMAN SEBELUMNYA'); ?>
</a>

<div class="col-sm-12" style="margin-bottom: 20px; margin-top: 20px;">
    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <strong>Edit Data Permainan </strong>
        <hr class="message-inner-separator">
        <p>Silahkan Update Data Permainan dibawah ini.</p>
    </div>
</div>


<div class="content-box">
    <form action="proses_update.php" enctype="multipart/form-data" method="post">
        <div class="content-box-content">
            <div id="postcustom">
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
                        <td width="25%" class="leftrowcms">					
                            <label >Id Permainan  <font color="red">*</font></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                           <?php echo $data['id_permainan']; ?>	
                        </td>
                    </tr>
                    h-->
                        <input type="hidden" class="form-control" name="id_permainan" value="<?php echo $data['id_permainan']; ?>" readonly id="id_permainan" required="required">

                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label>Nama <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input class="form-control" style="width:50%" type="varchar" name="nama" id="nama" placeholder="Nama " required="required" value="<?php echo ($data['nama']); ?>">
                            </td>
                        </tr>
                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label>Foto1 <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <a href="../../../../admin/upload/<?php echo $data['foto1']; ?>"><img onerror="this.src='../../../data/image/error/file.png'" width="100" src="../../../../admin/upload/<?php echo $data['foto1']; ?>"></a>
                                <input value="<?php echo ($data['foto1']); ?>" class="form-control" style="width:50%" type="hidden" name="foto11" id="foto11" placeholder="Foto1  ">
                                <input value="<?php echo ($data['foto1']); ?>" class="form-control" style="width:50%" type="file" name="foto1" id="foto1" placeholder="Foto1  ">

                            </td>
                        </tr>
                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label>Foto2 <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <a href="../../../../admin/upload/<?php echo $data['foto2']; ?>"><img onerror="this.src='../../../data/image/error/file.png'" width="100" src="../../../../admin/upload/<?php echo $data['foto2']; ?>"></a>
                                <input value="<?php echo ($data['foto2']); ?>" class="form-control" style="width:50%" type="hidden" name="foto21" id="foto21" placeholder="Foto2  ">
                                <input value="<?php echo ($data['foto2']); ?>" class="form-control" style="width:50%" type="file" name="foto2" id="foto2" placeholder="Foto2  ">

                            </td>
                        </tr>
                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label>Video <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input value="<?php echo ($data['video']); ?>" class="form-control" style="width:50%" type="text" name="video" id="video" placeholder="Video  ">
                            </td>
                        </tr>
                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label>Deskripsi <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <textarea class="form-control" style="width:50%" type="text" name="deskripsi" id="deskripsi" placeholder="Deskripsi " required="required"><?php echo ($data['deskripsi']); ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label>Manfaat <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input class="form-control" style="width:50%" type="varchar" name="manfaat" id="manfaat" placeholder="Manfaat " required="required" value="<?php echo ($data['manfaat']); ?>">
                            </td>
                        </tr>
                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label>Cara Bermain <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input class="form-control" style="width:50%" type="varchar" name="cara_bermain" id="cara_bermain" placeholder="Cara Bermain " required="required" value="<?php echo ($data['cara_bermain']); ?>">
                            </td>
                        </tr>


                    </tbody>
                </table>
                <div class="content-box-content">
                    <center>
                        <?php btn_update(' PROSES UPDATE DATA'); ?>
                    </center>
                </div>
            </div>
        </div>
    </form>
