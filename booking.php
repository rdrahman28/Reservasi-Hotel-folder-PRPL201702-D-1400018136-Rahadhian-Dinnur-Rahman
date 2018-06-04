<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Home | Glade Hotel</title>
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
       <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
     <!-- NAV SECTION -->
    <div class="navbar navbar-inverse navbar-fixed-top">   
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php"><img src="logoku.png"  class="img-responsive" style="position: absolute; width: 150px;"></a><br>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="kamar.php">DAFTAR KAMAR</a></li>
                    <li><a href="cek_booking.php">CEK BOOKING</a></li>
                    <li><a href="lihat_berita.php">BERITA</a></li>
                    <li><a href="bantuan.php"><b>BANTUAN</b></a></li>
                </ul>
            </div>
           
        </div>
    </div>
     <!--END NAV SECTION -->

<section  id="about" style="padding-bottom: 5%">
    <div class="container">
        <div class="row">
        <div class="panel-body">
            <div class="col-md-3" style="background-color: #efefef; font-size: 11px;">
                    <div class="col-md-12" style="font-size: 11px; padding-top: 5%;">
                    <legend><strong>Daftar Kamar</strong></legend>
                    </div>
                    <?php 
                        include "administrator/login/koneksi.php";
                        $sql = "SELECT * from tb_kamar order by jenis_kamar desc";
                        $query = $mysql->query($sql);
                        $i=1;
                        while ($hotel = mysqli_fetch_array($query)) {?>
                            <div class="col-md-12" style="margin-bottom: 6%;">
                            <a href="hotel.php?id_kamar=<?php echo $hotel['id_kamar']; ?>"><strong><?php echo $hotel['nama_kamar']; ?></strong></a>
                            <legend></legend>
                            </div>
                    <?php $i++;} ?>
            </div>
            <div class="col-md-9 col-sm-9">
                        <div class="contact-form" style="margin-bottom: 10%">
                            <h3>Booking Kamar</h3><legend></legend>
                            <form method="post" action="booking_hotel.php"  class="col-md-12">
                            <?php 
                                include "administrator/login/koneksi.php";
                                $id_kamar = @$_GET['id_kamar'];
                                $tgl1 = @$_GET['tgl1'];
                                $tgl2 = @$_GET['tgl2'];
                                $sql_booking = "SELECT * from tb_kamar where id_kamar='$id_kamar'";
                                $query_booking = $mysql->query($sql_booking);
                                $i=1;
                                while ($booking = mysqli_fetch_array($query_booking)) {?>
<?php 
$faktur=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','0','1','2','3','4','5','6','7','8','9');

shuffle($faktur);
reset($faktur);

$no=0;
foreach($faktur as $line){
@$kode_faktur.=strtoupper($line);
$no++;
if (($no >= 5)) break;
}
?>
                                    <input type="text" name="kode" hidden="" value="<?php echo "$kode_faktur"; ?>">
                                    <input type="text" name="tgl1" hidden="" value="<?php echo "$tgl1"; ?>">
                                    <input type="text" name="tgl2" hidden="" value="<?php echo "$tgl2"; ?>">
                                    <input type="text" name="id_kamar" hidden="" value="<?php echo $booking['id_kamar']; ?>">
                                    <div class="form-group">
                                            <label>Gambar Kamar Hotel : </label>
                                            <br>
                                            <label><img src="assets/gambar/<?php echo $booking['gambar']; ?>" class="img-responsive"></label>
                                    </div>
                                    <div class="form-group">
                                            <label>Nama Kamar : </label><input type="text" name="nama_kamar" class="form-control" required="" disabled="" value="<?php echo $booking['nama_kamar']; ?>">
                                    </div>
                                    <div class="form-group">
                                            <label>No KTP : </label><input type="text" name="id_customer" class="form-control"  required="" placeholder="KTP">
                                    </div>
                                    <div class="form-group">
                                            <label>Nama : </label><input type="text" name="nama" class="form-control"  required="" placeholder="Nama lengkap">
                                    </div>
                                    <div class="form-group">
                                            <label>email : </label><input type="text" name="email" class="form-control"  required="email" placeholder="example@domain.com">
                                    </div>
                                    <div class="form-group">
                                            <label>Harga : </label><input type="text" name="" class="form-control"  required="" disabled="" value="<?php
                                            $harga = $booking['harga'];
                                            $datetime1 = new DateTime($tgl1);
                                            $datetime2 = new DateTime($tgl2);
                                            $lama = $datetime1->diff($datetime2);
                                            $total= ($lama->days + 1) * $harga;
                                            echo "Rp.".$total." / ";
                                            echo $lama->days+1; echo " hari";
                                             ?>">
                                            <input type="text" name="harga" hidden="" value="<?php echo $total ?>">
                                            <input type="text" name="lama" hidden="" value="<?php echo $lama->days+1; ?>">
                                    </div>
                                    
                                    <button type="reset" class="btn btn-danger ">Reset</button>
                                    <button type="submit" class="btn btn-primary" name="simpan">Booking</button>
                                <medium id='data_warning'></medium>
                            <?php $i++;} ?>
                            </form>

                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>


    <!--FOOTER SECTION -->
    <?php include 'footer.php' ?>
    <!-- END FOOTER SECTION -->

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.min.js"></script>  
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    </body>
</html>
