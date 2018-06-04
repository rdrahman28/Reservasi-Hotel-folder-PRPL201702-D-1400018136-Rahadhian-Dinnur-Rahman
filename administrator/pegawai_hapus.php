<?php 
    include "login/koneksi.php";
    session_start();
    if (!isset($_SESSION['6LfQTxcUAAAAAH4-Boh5YZmTknrd7beQTh-Vtvr9'])) {
        if (!isset($_SESSION['username'])) {
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
    // membaca id file yang akan dihapus
    $id = $_GET['id_pegawai'];
 
    // membaca nama file yang akan dihapus berdasarkan id
    $query   = "SELECT * FROM tb_pegawai WHERE id_pegawai = '$id'";
    $hasil   = $mysql->query($query);
    $data    = mysqli_fetch_array($hasil);
    $namaFile = $data['gambar'];
 
    // query untuk menghapus informasi file berdasarkan id
    $query = "DELETE FROM tb_pegawai WHERE id_pegawai = '$id'";
    $mysql->query($query);
 
    // menghapus file dalam folder sesuai namanya
    unlink("../assets/gambar/".$namaFile);
    ?>
        <script type="text/javascript">
            alert("Berhasil dihapus");
            window.location.href = "pegawai_lihat.php";
        </script>
    <?php
?>