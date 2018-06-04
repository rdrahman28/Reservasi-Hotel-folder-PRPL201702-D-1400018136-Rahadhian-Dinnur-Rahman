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
                    <li><a href="index.php"><b>HOME</b></a></li>
                    <li><a href="kamar.php"><b>DAFTAR KAMAR</b></a></li>
                    <li><a href="cek_booking.php"><b>PENCARIAN</b></a></li>
                    <li><a href="bantuan.php"><b>BANTUAN</b></a></li>
                </ul>
            </div>
           
        </div>
    </div>
     <!--END NAV SECTION -->

    <!--HOME SECTION-->
     
<div id="home-sec">   
    <div class="container"  >
        <div class="row text-center">
            <div  class="col-md-12" >
         <div id="carousel-example" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="item active">
                            <img width="70%" src="assets/img/a.jpg" alt="" />
                            <div class="carousel-caption">
                                <h4 class="back-light">Glade Hotel / Perancangan Rekayasa Perangkat Lunak / Teknik Infromatika / Universitas Ahmad Dahlan.</h4>
                            </div>
                        </div>
                        <div class="item">
                            <img width="70%" src="assets/img/b.jpg" alt="" style="right: 0px;" />
                            <div class="carousel-caption ">
                                <h4 class="back-light">Glade Hotel / Perancangan Rekayasa Perangkat Lunak / Teknik Infromatika / Universitas Ahmad Dahlan.</h4>
                            </div>
                        </div>
                        <div class="item">
                            <img width="70%" src="assets/img/c.jpg" alt="" />
                            <div class="carousel-caption ">
                                <h4 class="back-light">Glade Hotel / Perancangan Rekayasa Perangkat Lunak / Teknik Infromatika / Universitas Ahmad Dahlan.</h4>
                            </div>
                        </div>
                    </div>

                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                    </ol>
                </div>
                 
            </div>
        </div>
    </div>
</div> 


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
                        while ($kamar = mysqli_fetch_array($query)) {?>
                            <div class="col-md-12" style="margin-bottom: 6%;">
                            <a href="kamar.php?id_kamar=<?php echo $kamar['id_kamar']; ?>"><strong><?php echo $kamar['nama_kamar']; ?></strong></a>
                            <legend></legend>
                            </div>
                    <?php $i++;} ?>
            </div>
            <div class="col-md-9 col-sm-9">
                    <div class="contact-form" style="padding-bottom: 5%">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                              <tbody>
                    <?php 
                        include "administrator/login/koneksi.php";
                        $id_kamar = @$_GET['id_kamar'];
                        $sql = "SELECT * from tb_kamar where id_kamar = '$id_kamar'";
                        $query = $mysql->query($sql);
                        $i=1;
                        while ($kamar = mysqli_fetch_array($query)) {?>
                            <div class="col-md-12" style="padding-top: 2%;">
                           <tr>
                               <td>Nama Kamar : <strong><?php echo $kamar['nama_kamar']; ?></strong></td>
                           </tr>
                           <tr>
                               <td><img src="assets/gambar/<?php echo $kamar['gambar']; ?>"></td>
                           </tr> 
                            <tr>
                                <td>Fasilitas : <?php echo $kamar['fasilitas']; ?></td>
                            </tr>
                            <tr>
                                <td>Harga : <?php echo $kamar['harga']; ?></td>
                            </tr>
                            
                            </div>
                           

                    <?php $i++;} ?>      

                    
                    </tbody>
    </table>
</div>
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