<?php 
    include "koneksi.php";
    session_start();
    if(isset($_SESSION['level'])){
        if (isset($_SESSION['6LfQTxcUAAAAAH4-Boh5YZmTknrd7beQTh-Vtvr9'])) {
            if ($_SESSION['level'] == "admin") {
                header("Location: ../index.php");
            }else {
                header("Location: ../index.php");
            }
        }
    }
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | Glade Hotel</title>
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../../images/program.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../images/program.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../images/program.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../images/program.png">
    <link rel="apple-touch-icon-precomposed" href="../../images/program.png">
</head>

<body id="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <h2 align="center">Selamat Datang</h2>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading" align="center" style="margin-bottom: 0px">
                        <a href="../../index.php"><img src="../galileo.png" width="75%" class="img-responsive"></a><br>
                    </div>
                    <div class="panel-heading">
                        <?php 
                            $username = @$_POST['username'];
                            $password = @$_POST['password'];
                            $login = @$_POST['login'];
                            
                            $sql = "SELECT * from user";
                            $query = $mysql->query($sql);
                            if (isset($login)) {
                                while($user = mysqli_fetch_array($query)){
                                    if ($user['username']==$username && $user['password']==$password) {
                                            $_SESSION['6LfQTxcUAAAAAH4-Boh5YZmTknrd7beQTh-Vtvr9'] = $username;
                                            $_SESSION['nip'] = $user['nip'];
                                            header("Location: ../index.php");
                                    }
                                    else{ ?>
                                        <div class="alert alert-danger">
                                            <strong>Maaf !</strong> Username / Password Salah
                                        </div>
                                        <?php
                                    }
                                }
                            }
                        ?>
                        <form role="form" method="POST" id="login" action="">
                            <fieldset>
                                <div class="form-group input-group">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input class="form-control" placeholder="Username" id="username" name="username" type="text">
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input class="form-control" placeholder="Password" id="password" name="password" type="password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <div class="form-group">
                                    <input type="submit" name="login" class="btn-lg btn-block btn btn-primary" value="Masuk">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer" >
                <div style="color: blue; font-size: 16px; margin-top: 100px; text-align: center;">
                    <b>&copy;2018 | Rahadhian Dinnur Rahman</b>
                </div>
    </footer><!--/#footer-->
    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>
<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
<script type="text/javascript">
        $(document).ready(function(){
            $('#login').validate({
                rules: {
                    username: {
                    	required:true,
                        minlength:5,
                        maxlength:20
                    },

                    password: {
                    	required:true,
                        minlength:5,
                        maxlength:30
                    }
                },
                messages: {
                    username: {
                        required:"'wajib diisi'",
                        minlength:"'minimal 5 karakter'",
                        maxlength:"'maximal 20 karakter'"
                    },

                    password: {
                        required:"'wajib diisi'",
                        minlength:"'minimal 5 karakter'",
                        maxlength:"'maximal 20 karakter'"
                    }
                }
            });
        });
    </script>
</html>
