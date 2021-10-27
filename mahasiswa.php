<?php 
$page = 'mahasiswa'; 
include 'template/header.php'; 
$conn = mysqli_connect("localhost", "root", "", "db_mhs");
?>

    <!-- Content -->
        <div class="container-xl mt-3">
            <h3>Data Mahasiswa</h3>
            <a class="btn btn-primary mt-3 mb-3" href="mahasiswa-tambah.php">Tambah Data</a>
            <div class="col-md-4 mb-3">
                <input type="text" class="form-control" id="keyword" placeholder="Masukkan data yang ingin dicari..." autocomplete="off" autofocus>
            </div>
            <!-- Table -->
                <div class="table-responsive">
                    <table class="table table-borderless table-sm">
                        <thead class="table-secondary">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Aksi</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">NPM</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Jurusan</th>
                            </tr>
                        </thead>

                        <?php 
                        $query = mysqli_query($conn, "SELECT * FROM tb_mhs");
                        $no = 1;
                        while($mhs = mysqli_fetch_array($query)) {
                        ?>

                        <tbody>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td>
                                    <a class="badge bg-warning" href="mahasiswa-ubah.php?id=<?= $mhs['id']; ?>">Ubah</a>
                                    <a class="badge bg-danger" href="mahasiswa-hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm('Apakah yakin akan menghapus pada data ini???')">Hapus</a>
                                </td>
                                <td>
                                    <img src="assets/img/<?= $mhs['gambar']; ?>" alt="<?= $mhs['nama']; ?>" width="100">
                                </td>
                                <td>
                                    <?= $mhs['npm']; ?>
                                </td>
                                <td>
                                    <?= $mhs['nama']; ?>
                                </td>
                                <td>
                                    <?= $mhs['email']; ?>
                                </td>
                                <td>
                                    <?= $mhs['jurusan']; } ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <!-- Akhir Table -->
        </div>
    <!-- Akhir Content -->

<?php include 'template/footer.php' ?>