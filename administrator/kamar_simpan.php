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
	$id_kamar = @$_POST['id_kamar'];
	$nama_kamar = @$_POST['nama_kamar'];
	$fasilitas = @$_POST['fasilitas'];
	$angkaa = @$_POST['harga'];
	$harga = str_replace(".", "", $angkaa);
	$jenis_kamar = @$_POST['jenis_kamar'];

	$kamar_simpan = "INSERT into tb_kamar (gambar,id_kamar,nama_kamar,fasilitas,harga,jenis_kamar) values ('$nama_gambar','$id_kamar','$nama_kamar','$fasilitas','$harga','$jenis_kamar')";
	$query = $mysql->query($kamar_simpan) or die (mysqli_error());
	if ($query){
		?>
			<script language="javascript">
			alert("Berhasil di Upload");
    		window.location.href = "kamar_lihat.php";
			</script>
		<?php
	}else{
		?>
			<script language="javascript">
			alert("Gagal di Upload");
    		window.location.href = "tambah_kamar.php";
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