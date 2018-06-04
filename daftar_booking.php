						<div class="contact-form" >
                                <div class="form-group">
                                    <div class="col-md-12">
<div class="table-responsive">
    <table class="table table-hover table-striped">
        <tbody>
                                <?php
                                    include "administrator/login/koneksi.php";
                                    $kodea = @$_GET['kode'];
                                    $sql = "SELECT * from booking where kode='$kodea' || kode = '$kodeb'";
                                    $querynya = $mysql->query($sql);
                                    $cek = mysqli_num_rows($querynya);
                            if (isset($kodeb) || isset($kodea)) {
                                if($cek < 1) { ?>
                                    <div class="alert alert-danger">
                                        <strong>Maaf !</strong> Kode <b><?php echo "$kodeb"; ?></b> tidak terdaftar
                                    </div>
                                    <?php
                                    } else {
                                    $i=1;
                                while ($dibooking = mysqli_fetch_array($querynya)) {?>
                                    <tr>
                                        <td>Kode Booking</td>
                                        <td>:</td>
                                        <td><?php echo $dibooking['kode']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Identitas</td>
                                        <td>:</td>
                                        <td><?php echo $dibooking['id_customer']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td><?php echo $dibooking['nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td><?php echo $dibooking['email']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Check In</td>
                                        <td>:</td>
                                        <td><?php echo $dibooking['tgl_checkin']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Check Out</td>
                                        <td>:</td>
                                        <td><?php echo $dibooking['tgl_checkout']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td><?php echo $dibooking['total']; ?></td>
                                    </tr>
                                        <td>Status Pembayaran</td>
                                        <td>:</td>
                                        <td><?php echo $dibooking['Status']; ?></td>
                                    </tr>
                                    </tr>
                                        <td>Batas Pembayaran</td>
                                        <td>:</td>
                                        <td style="color: red"><?php echo $dibooking['tgl_batas']; ?></td>
                                    </tr>
                                    <tr><a href="cetak/cetak.php?sql=<?php echo $sql; ?>"><button type="submit" class="btn btn-warning">Cetak</button></a></tr><p></p>
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