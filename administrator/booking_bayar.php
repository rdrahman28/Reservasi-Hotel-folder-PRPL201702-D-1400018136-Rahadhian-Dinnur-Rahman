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

$kode = @$_GET['kode'];
if(isset($kode)){	
	$riwayat_hotel = "INSERT into laporan_booking (kode, id_kamar, id_customer, nama, email, tgl_booking, tgl_batas, tgl_checkin, tgl_checkout, lama, Status, total) SELECT kode, id_kamar, id_customer, nama, email, tgl_booking, tgl_batas, tgl_checkin, tgl_checkout, lama, Status, total from booking where kode = '$kode'";
	$query_riwayat = $mysql->query($riwayat_hotel) or die (mysqli_error());
	$bayar_hotel = "UPDATE booking set Status = 'Dibayar' where kode = '$kode'";
	$query = $mysql->query($bayar_hotel) or die (mysqli_error());
	if ($query){
		?>
			<script language="javascript">
			alert("Berhasil Dibayar");
    		window.location.href = "booking_lihat.php";
			</script>
		<?php
	}else{
		?>
			<script language="javascript">
			alert("Gagal Dibayar");
    		window.location.href = "booking_lihat.php";
			</script>
		<?php
	}
}else{
	?>
			<script language="javascript">
			alert("Error");
    		window.location.href = "booking_lihat.php";
			</script>
	<?php
}

?>