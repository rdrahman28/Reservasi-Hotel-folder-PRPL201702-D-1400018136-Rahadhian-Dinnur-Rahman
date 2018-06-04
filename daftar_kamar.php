						<div class="contact-form" >
                                <div class="form-group">
                                    <div class="col-md-12">
<div class="table-responsive">
    <table class="table table-hover table-striped">
        <tbody>
                                <?php
                                    include "administrator/login/koneksi.php";
                                    $nama_kamarrr = @$_GET['nama_kamar'];;
                                    $sql = "SELECT * from tb_kamar where nama_kamar='$nama_kamarrr' || nama_kamar = '$nama_kamarr'";
                                    $querynya = $mysql->query($sql);
                                    $cek = mysqli_num_rows($querynya);
                            if (isset($nama_kamarr) || isset($nama_kamarrr)) {
                                if($cek < 1) { ?>
                                    <div class="alert alert-danger">
                                        <strong>Maaf !</strong> Kamar <b><?php echo "$nama_kamarr"; ?></b> tidak terdaftar
                                    </div>
                                    <?php
                                    } else {
                                    $i=1;
                                while ($dibooking = mysqli_fetch_array($querynya)) {?>
                                    <tr>
                                    	<td> <img src="assets/gambar/<?php echo $dibooking['gambar']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Id Kamar</td>
                                        <td>:</td>
                                        <td><?php echo $dibooking['id_kamar']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Kamar</td>
                                        <td>:</td>
                                        <td><?php echo $dibooking['nama_kamar']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Fasilitas</td>
                                        <td>:</td>
                                        <td><?php echo $dibooking['fasilitas']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td><?php echo $dibooking['harga']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kamar</td>
                                        <td>:</td>
                                        <td><?php echo $dibooking['jenis_kamar']; ?></td>
                                    </tr>
                                <?php $i=$i+1;
                                } 
                                }
                            } ?>
        </tbody>
    </table>
</div>
                                    </div>
                                </div>
                        </div>