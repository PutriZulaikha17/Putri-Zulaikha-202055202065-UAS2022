<?php include 'template.php'; include 'koneksi.php'; ?>
<body><br><br>
    <div class="container">        
        <div class="row">
            <div class="col-md-9">
                <b>DATA MAHASISWA</b><br><br>
            </div>
            <div class="col-md-3">
                <a href="tambah.php" class="btn btn-warning">Tambah Data Mahasiswa</a>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Uang Jajan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                $sql = mysqli_query($koneksi,"SELECT * FROM mahasiswa");                
                while ($data = mysqli_fetch_array($sql)) {
                    echo "<tr>
                        <td>".$no++."</td>
                        <td>".$data['nim']."</td>
                        <td>".$data['nama']."</td>
                        <td>".$data['alamat']."</td>
                        <td>".$data['uang_jajan']."</td>
                        <td><a href='edit.php?id=".$data['nim']."' class='btn btn-info'>Edit</a>
                        <a href='delete.php?id=".$data['nim']."' class='btn btn-danger'>Delete</a></td>
                        </tr>";
                }
                ?>                
            </tbody>
        </table>
    </div>
</body>
</html>