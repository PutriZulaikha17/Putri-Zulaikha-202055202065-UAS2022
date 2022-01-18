<?php include 'koneksi.php'; 
$id = $_GET['id'];
$sql = mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE nim = '$id'");
if ($sql) {
    echo "<script>
    alert('Berhasil Delete Data');
    window.location = 'index.php';
    </script>";
}
?>