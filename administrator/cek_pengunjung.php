<?php
    $ip      = $_SERVER['REMOTE_ADDR']; // Dapatkan IP user
    $tanggal = date("Ymd"); // Dapatkan tanggal sekarang
    $waktu   = time(); // Dapatkan nilai waktu
    $konek = mysqli_connect("localhost","root","","rental");

    // Cek user yang mengakses berdasarkan IP-nya 
    $s = mysqli_query($konek, "SELECT * FROM pengunjung WHERE ip='$ip' AND tanggal='$tanggal'");
    // Kalau belum ada, simpan datanya sebagai user baru
    if(mysqli_num_rows($s) == 0){
      mysqli_query($konek, "INSERT INTO pengunjung(ip, tanggal, hits, online) VALUES('$ip', '$tanggal', '1', '$waktu')");
    }
    // Kalau sudah ada, update data hits user  
    else{
      mysqli_query($konek, "UPDATE pengunjung SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
    }

    $query1     = mysqli_query($konek, "SELECT * FROM pengunjung WHERE tanggal='$tanggal' GROUP BY ip");
    $pengunjung = mysqli_num_rows($query1);

    $query2        = mysqli_query($konek, "SELECT COUNT(hits) as total FROM pengunjung");
    $hasil2        = mysqli_fetch_array($query2);
    $totpengunjung = $hasil2['total'];

    $query3 = mysqli_query($konek, "SELECT SUM(hits) as jumlah FROM pengunjung WHERE tanggal='$tanggal' GROUP BY tanggal");
    $hasil3 = mysqli_fetch_array($query3);
    $hits   = $hasil3['jumlah'];

    $query4  = mysqli_query($konek, "SELECT SUM(hits) as total FROM pengunjung");
    $hasil4  = mysqli_fetch_array($query4);
    $tothits = $hasil4['total'];  

    // Cek berapa pengunjung yang sedang online
    $bataswaktu       = time() - 300; 
    $pengunjungonline = mysqli_num_rows(mysqli_query($konek, "SELECT * FROM pengunjung WHERE online > '$bataswaktu'"));

    // Angka total pengunjung dalam bentuk gambar
    $folder = "counter"; // nama folder
    $ext    = ".png";     // ekstension file gambar

    // ubah digit angka menjadi enam digit
    $totpengunjunggbr = sprintf("%06d", $totpengunjung);
    // ganti angka teks dengan angka gambar
    for ($i = 0; $i <= 9; $i++){
     $totpengunjunggbr = str_replace($i, "<img src=\"$folder/$i$ext\" alt=\"$i\">", $totpengunjunggbr);
    } 

    "<h3>pengunjung Pengunjung</h3>
           $totpengunjunggbr<br><br>
        
          <img src=\"$folder/hariini.png\"> Pengunjung hari ini : $pengunjung <br>
          <img src=\"$folder/total.png\"> Total pengunjung    : $totpengunjung <br><br>
          
          <img src=\"$folder/hariini.png\"> Hits hari ini  :  $hits<br>
          <img src=\"$folder/total.png\"> Total hits     :  $tothits<br><br> 
          
          <img src=\"$folder/online.png\"> Pengunjung Online : $pengunjungonline";
?>