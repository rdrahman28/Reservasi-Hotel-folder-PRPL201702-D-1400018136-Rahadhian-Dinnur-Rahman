<?php 
    include "login/koneksi.php";
    session_start();
    if(!isset($_SESSION['level'])){
        if (!isset($_SESSION['6LfQTxcUAAAAAH4-Boh5YZmTknrd7beQTh-Vtvr9'])) {
        ?>
        <script type="text/javascript">
            alert("Maaf anda tidak berhak mengakses halaman ini");
            window.location="login/index.php";
        </script>
        <?php
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="galileo.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="galileo.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="galileo.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="galileo.png">
    <link rel="apple-touch-icon-precomposed" href="galileo.png">
    <title>Glade Hotel</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
    <div id="wrapper" style="background-color: white;">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php"><img src="../logoku.png" width="100px"></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['6LfQTxcUAAAAAH4-Boh5YZmTknrd7beQTh-Vtvr9']; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                        <a href="settings.php"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="login/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="tambah_kamar.php"><i class="fa fa-fw fa-plus"></i> Tambah Kamar</a>
                    </li>
                    <li>
                        <a href="kamar_lihat.php"><i class="fa fa-fw fa-list-alt"></i> Lihat Kamar</a>
                    </li>
                    <li>
                        <a href="terbooking.php"><i class="fa fa-fw fa-book"></i> Booking Kamar</a>
                    </li>
                    <li>
                        <a href="booking_lihat.php"><i class="fa fa-fw fa-home"></i> Status Booking</a>
                    </li>
                    <li>
                        <a href="tambah_pegawai.php"><i class="fa fa-fw fa-plus"></i> Tambah Pegawai</a>
                    </li>
                    <li>
                        <a href="pegawai_lihat.php"><i class="fa fa-fw fa-list-alt"></i> Lihat Daftar Pegawai</a>
                    </li>
                     <li>
                        <a href="pengunjung.php"><i class="fa fa-fw fa-users"></i> Pengunjung</a>
                    </li>
                </ul>
            </div>            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-book"></i> Tambah Kamar
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row" style="margin-left: 1%; margin-bottom: 8%">
                    <div class="col-lg-6 col-lg-offset-0">
                        <form role="form" action="kamar_simpan.php" method="POST" enctype="multipart/form-data" name="informasi" onsubmit="return cekform()" id="hotel">
                            <div class="form-group">
                                <label>Gambar Kamar</label>
                                    <div>
                                        <input type="file" class="required" name="gambar" id="gambar">
                                    </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Id Kamar</label>
                                    <div>
                                        <input type="text" class="required and form-control" name="id_kamar" id="id_kamar">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label>Nama Kamar</label>
                                    <div>
                                        <input type="text" class="required and form-control" name="nama_kamar" id="nama_kamar">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label>Fasilitas</label>
                                    <div style="color: red; font-family: verdana;" >
                                        <textarea class="required and form-control" id="ket" rows="5" name="fasilitas"></textarea>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label>Harga Sewa</label>
                                    <div>
                                        <input type="text" class="required and form-control" name="harga" id="harga">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kamar</label>
                                    <div>
                                        <select name="jenis_kamar" id="jenis_kamar" class="required and form-control">
                                            <option selected="">--pilih jenis kamar--</option>
                                            <option value="standard">Standard</option>
                                            <option value="family">Family</option>
                                            <option value="deluxe">Deluxe</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <div class="g-recaptcha" data-sitekey="6LfQTxcUAAAAAJol_OQiZoln4_lsJ7_0IcQOi9H2"></div>
                                <!-- 6LfQTxcUAAAAAH4-Boh5YZmTknrd7beQTh-Vtvr9 -->
                                </div>
                            </div>
                            <strong><medium id='data_warning'></medium></strong>
                            <div style="margin-top: 10%">
                                <button type="submit" name="simpan" class="btn btn-primary"> Simpan <span class="fa fa-save fa-fw"></span></button>
                                <button type="reset" class="btn btn-danger"> Reset <span class="fa fa-refresh fa-fw"></span></button>
                            </div>
                        </form>
                            <script type="text/javascript">
                                function cekform(){
                                var gambar = document.forms["informasi"]["gambar"].value;
                                var id_kamar = document.forms["informasi"]["id_kamar"].value;
                                var nama_kamar = document.forms["informasi"]["nama_kamar"].value;
                                var fasilitas = document.forms["informasi"]["fasilitas"].value;
                                var harga = document.forms["informasi"]["harga"].value;
                                var jenis_kamar = document.forms["informasi"]["jenis_kamar"].value;
                                var captcha = document.forms["informasi"]["g-recaptcha-response"].value;
                                if(gambar =="" || id_kamar =="" || fasilitas =="" || harga=="" || jenis=="" || nama_kamar ==""){
                                    $("#data_warning").text("Silahkan isikan semua data dengan benar!");
                                    $("#data_warning").css("color", "red");
                                    return false;
                                }else{
                                    return true;
                                }
                            }
                            </script>
                    </div>
                </div>
                <!-- /.row -->

                <div class="panel-footer">
                    <div class="footer">
                        Copyright &copy; 2018 | All Reserverd Rahadhian Dinnur Rahman
                    </div>
                </div>
                <!-- /.footer -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#mobil').validate({
                rules: {
                    id_kamar: {
                        required:true,
                        minlength:5,
                        maxlength:15
                    },

                    nama_kamar: {
                        required:true,
                        minlength:4
                    },

                    harga: {
                        required:true,
                        digit:true
                    }

                },
                messages: {
                    id_kamar: {
                        required:"'wajib diisi'",
                        minlength:"'minimal 5 karakter termasuk spasi'",
                        maxlength:"'maximal 15 karakter termasuk spasi'"
                    },

                    nama_kamar: {
                        required:"'wajib diisi'",
                        minlength:"'minimal 4 karakter'"
                    },

                    harga: {
                        required:"'wajib diisi'",
                        digit:"'tidak boleh huruf'"
                    }
                }
            });
        });
    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
    <script src="js/plugins/morris/morris.js"></script>
</body>
</html>
