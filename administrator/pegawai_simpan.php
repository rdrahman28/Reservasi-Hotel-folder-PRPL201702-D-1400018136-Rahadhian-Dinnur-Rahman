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

// /* untuk menampung variabel post dari captcha google adalah g-recaptcha-reponse */
// $captcha = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response']:'';

// $secret_key = '6LfQTxcUAAAAAH4-Boh5YZmTknrd7beQTh-Vtvr9'; //masukkan secret key-nya berdasarkan secret key masig-masing saat create api key nya

// if ($captcha != '' ) {
//    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secret_key) . '&response=' . $captcha;   
//    $recaptcha = file_get_contents($url);
//    $recaptcha = json_decode($recaptcha, true);

$save = @$_POST['simpan'];

if(isset($save)){	
	$sumber = @$_FILES['gambar']['tmp_name'];
	$target = '../assets/gambar/';
	$nama_gambar = @$_FILES['gambar']['name'];
	move_uploaded_file($sumber, $target.$nama_gambar);

	date_default_timezone_set("Asia/Jakarta");
	$admin = $_SESSION['6LfQTxcUAAAAAH4-Boh5YZmTknrd7beQTh-Vtvr9'];
	$id_pegawai = @$_POST['id_pegawai'];
	$nama_pegawai = @$_POST['nama_pegawai'];
	$jabatan = @$_POST['jabatan'];

	$pegawai_simpan = "INSERT into tb_pegawai (gambar,id_pegawai,nama_pegawai,jabatan) values ('$nama_gambar','$id_pegawai','$nama_pegawai','$jabatan')";
	$query = $mysql->query($pegawai_simpan) or die (mysqli_error());
	if ($query){
		?>
			<script language="javascript">
			alert("Berhasil di Upload");
    		window.location.href = "pegawai_lihat.php";
			</script>
		<?php
	}else{
		?>
			<script language="javascript">
			alert("Gagal di Upload");
    		window.location.href = "tambah_pegawai.php";
			</script>
		<?php
	}
}else{
	?>
			<script language="javascript">
			alert("Error");
    		window.location.href = "tambah_kamar.php";
			</script>
	<?php
}
// }else{
// 	?>
// 			<script language="javascript">
// 			alert("Error");
//     		window.location.href = "tambah_kamar.php";
// 			</script>
// 	<?php
// }
?>