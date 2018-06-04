<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="tcal.css" />
    <?php 
	$tgl_booking = date("Y-m-d H:i:s");
	echo $tgl_booking;
	echo "<br>";
	$tgl_balik = date("Y-m-d H:i:s",+);
	echo $tgl_balik;
     ?>
</body>
</html>