
<?php 
session_start();
if (empty($_SESSION['telah_login']) ) {
    header("Location: ../Log_System/login.php");
    exit;
  }

require "../koneksi.php";

$id = $_GET["id"];

mysqli_query($koneksi, "DELETE FROM tbl_pesanan WHERE id = $id");

if (mysqli_affected_rows($koneksi) > 0) {
    echo "
            <script>
                alert('Pesanana anda berhasil di hapus!');
                document.location.href = 'pesan.php';
            </script>
        ";
  }else {
    echo mysqli_error($koneksi);
  }
?> 