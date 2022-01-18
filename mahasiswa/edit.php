<?php include 'template.php'; include 'koneksi.php'; 
$id = $_GET['id'];
$sql = mysqli_query($koneksi,"SELECT*FROM mahasiswa WHERE nim = '$id'");
$data = mysqli_fetch_array($sql);
$nim = $data['nim'];
$nama = $data['nama'];
$alamat = $data['alamat'];
$uang_jajan = $data['uang_jajan'];
?>
<body><br><br>
    <div class="container">
        <b>UPDATE DATA BARANG</b><br><br>
        <div class="card"><br>
            <form action="" method="post" style="margin: 10px;">
            <div class="row">
                    <div class="col-md-3">
                        <label for="NIM">NIM</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" value="<?= $nim; ?>" name="nim" id="nim" class="form-control" placeholder="20192012910" readonly>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="Nama">Nama</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" value="<?= $nama; ?>" name="nama" id="nama" class="form-control" placeholder="Shin Tae Yong" required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="Alamat">Alamat</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" value="<?= $alamat; ?>" name="alamat" id="alamat" class="form-control" placeholder="Jl. Bangau" required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="Uang Jajan">Uang Jajan</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" value="<?= $uang_jajan; ?>"r" name="uang_jajan" id="uang_jajan" class="form-control" placeholder="120000">
                    </div>
                </div><br>
                <div class="text-center">
                    <button type="submit" name="update_mhs" class="btn btn-info">Update Data Mahasiswa</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<?php
if (isset($_POST['update_mhs'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $uang_jajan = $_POST['uang_jajan'];
    $sql = mysqli_query($koneksi,"UPDATE mahasiswa SET nama='$nama',alamat='$alamat',uang_jajan='$uang_jajan' WHERE nim='$nim'");
    if ($sql) {
        echo "<script>
        alert('Berhasil Update Data');
        window.location = 'index.php';
        </script>";
    }
}
?>