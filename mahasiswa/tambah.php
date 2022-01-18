<?php include 'template.php'; include 'koneksi.php'; ?>
<body><br><br>
    <div class="container">
        <b>TAMBAH DATA MAHASISWA</b><br><br>
        <div class="card"><br>
            <form action="" method="post" style="margin: 10px;">
                <div class="row">
                    <div class="col-md-3">
                        <label for="NIM">NIM</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="nim" id="nim" class="form-control" placeholder="20192012910" required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="Nama">Nama</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Shin Tae Yong" required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="Alamat">Alamat</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Jl. Bangau" required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="Uang Jajan">Uang Jajan</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="uang_jajan" id="uang_jajan" class="form-control" placeholder="120000">
                    </div>
                </div><br>
                <div class="text-center">
                    <button type="submit" name="tambah_mhs" class="btn btn-success">Tambah Data Mahasiswa</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<?php
if (isset($_POST['tambah_mhs'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $uang_jajan = $_POST['uang_jajan'];
    $sql = mysqli_query($koneksi,"INSERT INTO mahasiswa(nim, nama, alamat, uang_jajan) VALUES ('$nim','$nama','$alamat','$uang_jajan')");
    if ($sql) {
        echo "<script>
        alert('Berhasil Tambah Data');
        window.location = 'index.php';
        </script>";
    }
}
?>