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
    include "konversi.php";
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
                        <a href="booking_lihat.php"><i class="fa fa-fw fa-truck"></i> Status Booking</a>
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
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Settings
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-gear"></i> Settings
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row" style="margin-bottom: 50px">
                <form method="post" action="settings-simpan.php" id="settings" role="form" name="settings" onsubmit="return cekform()">
                    <div class="col-lg-5 col-sm-offset-3">
                            <label class="control-label" for="inputSuccess">Masukan Password Baru</label>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Password Baru" id="passbaru1" name="passbaru1">
                            </div>
                    </div>
                    <br>
                    <div class="col-lg-5 col-sm-offset-3">
                            <label class="control-label" for="inputSuccess">Konfirmasi Password Baru </label>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Password Baru" id="passbaru2" name="passbaru2">
                            </div>
                    </div>
                    <br>
                    <div class="col-lg-5 col-sm-offset-3">
                            <label class="control-label" for="inputSuccess">Masukan Password Lama</label>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Password lama" id="passlama" name="passlama">
                            </div>
                    </div>
                    <br>
                    <div class="col-lg-5 col-sm-offset-3">
                        <div class="form-group input-group">
                            <div class="g-recaptcha" data-sitekey="6LcLOBUUAAAAAOE7WlVLU05GIvSOj-r3IBII-ECQ">
                            </div>
                            <b><medium id='data_warning'></medium></b>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-offset-3">
                        <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
                    </div>
                </form> 
                </div>
                <script type="text/javascript">
                    function cekform(){
                    var passbaru1 = document.forms["settings"]["passbaru1"].value;
                    var passbaru2 = document.forms["settings"]["passbaru2"].value;
                    var passlama = document.forms["settings"]["passlama"].value;
                    var captcha = document.forms["settings"]["g-recaptcha-response"].value;
                    if(captcha =="" || passbaru1 =="" || passbaru2 =="" || passlama ==""){
                        $("#data_warning").text("Silahkan isikan semua data dengan benar!");
                        $("#data_warning").css("color", "red");
                        return false;
                    }else{
                        if (passbaru1!=passbaru2) {
                            $("#data_warning").text("Password salah, Silahkan cek lagi!");
                            $("#data_warning").css("color", "red");
                            return false;
                        } else {
                            return true;
                        }
                    }
                    }
                            </script>
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

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->

</body>

<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript">
        $(document).ready(function(){
            $('#settings').validate({
                rules: {
                    passbaru1: {
                        required:true,
                        minlength:8,
                        maxlength:30
                    },

                    passbaru2: {
                        required:true,
                        minlength:8,
                        maxlength:30
                    },

                    passlama: {
                        required:true,
                        minlength:5,
                        maxlength:30
                    }
                },

                messages: {
                    passbaru1: {
                        required:"'wajib diisi'",
                        minlength:"'minimal 8 karakter'",
                        maxlength:"'maximal 30 karakter'"
                    },

                    passbaru2: {
                        required:"'wajib diisi'",
                        minlength:"'minimal 8 karakter'",
                        maxlength:"'maximal 30 karakter'"
                    },

                    passlama: {
                        required:"'wajib diisi'",
                        minlength:"'minimal 5 karakter'",
                        maxlength:"'maximal 30 karakter'"
                    }
                }
            });
        });
</script>
</html>
