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
<?php
/* untuk menampung variabel post dari captcha google adalah g-recaptcha-reponse */
$captcha = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response']:'';

$secret_key = '6LcLOBUUAAAAABpYrTiaKlX_uYG-ZVE-kMAMjgX5'; //masukkan secret key-nya berdasarkan secret key masig-masing saat create api key nya

if ($captcha != '') {
   $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secret_key) . '&response=' . $captcha;   
   $recaptcha = file_get_contents($url);
   $recaptcha = json_decode($recaptcha, true);

	$save = @$_POST['simpan'];
	
	if(isset($save)){
	$passbaru1 = @$_POST['passbaru1'];
	$passbaru2 = @$_POST['passbaru2'];
	$passlama = @$_POST['passlama'];

	$nip = $_SESSION['nip'];
	$sql = "select * from pengguna where nip = '$nip'";
	$query = $mysql->query($sql);
	while ( $data = mysqli_fetch_array($query)){
		if ($passbaru1==$passbaru2) {
			if ($passlama == $data['password']) {
				$sqlpass = "UPDATE pengguna set password = '$passbaru1'";
				$status = $mysql->query($sqlpass);
				if (isset($status)) {
					?>
						<script language="javascript">
						alert("Berhasil diupdate, anda harus login lagi");
			    		window.location.href = "login/logout.php";
						</script>
					<?php
				}else{
					?>
						<script language="javascript">
						alert("Gagal diupdate, anda harus login lagi");
			    		window.location.href = "login/logout/.php";
						</script>
					<?php
				}
			}
		}
	}
	}
}
?>