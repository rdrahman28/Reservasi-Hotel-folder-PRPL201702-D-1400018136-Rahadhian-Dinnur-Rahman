<div id="footer">
    <!--END ABOUT SECTION-->
    <section id="contact" style="">
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="contact">
                            <h3 class="column-title" style="margin-top: 4px">Kontak</h3>
                            <legend></legend>
                              <b><span class="fa fa-map-marker"></span> Jln. Pramuka No 20, Umbulharjo, Warungboto - Yogyakarta. <br><br>
                              <span class="fa fa-phone"></span> 0274-789 9876 <br><br>
                              <span class="fa fa-tags"></span> 0878 2740 9062 <br></b>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="contact">
                            <h3 class="column-title" style="margin-top: 4px">Jam Kerja</h3>
                            <legend></legend>
                              <b><span class="fa fa-time"></span>Senin-Sabtu : 08.00 s/d 17.00 <br><br>
                              <span class="fa fa-time"></span>Minggu : 07.00 s/d 15.00 <br><br>
                              <span class="fa fa-time"></span>Hari raya besar Libur </b>
                        </div>
                    </div>
                    <div class="col-sm-4" style="background-color: white; padding-bottom: 20px;">
                        <div class="contact-form" >
                            <h3>Pesan / Saran</h3>
                            <form method="post" action="kirimpesan.php" name="sendmail" onsubmit="return cekform()">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Nama" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="7" placeholder="Pesan" required></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6LfQTxcUAAAAAJol_OQiZoln4_lsJ7_0IcQOi9H2"></div>
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                                <medium id='data_warning'></medium>
                            </form>
                            <script type="text/javascript">
                                function cekform(){
                                var name = document.forms["sendmail"]["name"].value;
                                var email = document.forms["sendmail"]["email"].value;
                                var subject = document.forms["sendmail"]["subject"].value;
                                var message = document.forms["sendmail"]["message"].value;
                                var captcha = document.forms["sendmail"]["g-recaptcha-response"].value;

                                if(captcha == ""){
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
                </div>
            </div>
        </div>
    </section>
    <div style="border-top: 2px solid #d6d6d6; padding-top: 1%; text-align: center;">
        <b>Copyright &copy; 2018 | Rahadhian Dinnur Rahman</b>
    </div>
    <!-- END FOOTER SECTION -->
</div>
