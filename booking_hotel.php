<?php
include "administrator/login/koneksi.php";
$save = @$_POST['simpan'];

if(isset($save)){
	$kode = @$_POST['kode'];	
	$id_kamar = @$_POST['id_kamar'];
	$nama_kamar = @$_POST['nama_kamar'];
	$id_customer = @$_POST['id_customer'];
	$nama = @$_POST['nama'];
	$email = @$_POST['email'];
	date_default_timezone_set("Asia/Jakarta");
	$tgl_booking = date("Y-m-d H:i:s");
	$tambah = strtotime("+3 Hours");
	$tgl_batas = date("Y-m-d H:i:s", $tambah);
	$tgl_checkin = @$_POST['tgl1'];
	$tgl_checkout = @$_POST['tgl2'];
	$lama = @$_POST['lama'];
	
	$harga = @$_POST['harga'];

	$dibooking = "INSERT into booking (kode,id_kamar,nama_kamar,id_customer,nama,email,tgl_booking,tgl_batas, tgl_checkin,lama,tgl_checkout,Status,total) values ('$kode','$id_kamar','$nama_kamar','$id_customer','$nama','$email','$tgl_booking','$tgl_batas','$tgl_booking','$lama','$tgl_checkout','Belum dibayar','$harga')";
	$query = $mysql->query($dibooking) or die (mysqli_error());
	if ($query){
		?>
			<script language="javascript">
			alert("Berhasil dibooking");
    		window.location.href = "cek_booking.php?kode=<?php echo $kode; ?>";
			</script>
		<?php
	}else{
		?>
			<script language="javascript">
			alert("Gagal Booking!");
    		window.location.href = "booking.php";
			</script>
		<?php
	}
	}else{
	?>
			<script language="javascript">
			alert("Gagal Booking");
    		window.location.href = "booking.php";
			</script>
	<?php
}
?>
