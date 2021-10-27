<?php $page = 'mahasiswa'; include 'template/header.php' ?>

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

                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    <a class="badge bg-warning" href="mahasiswa-ubah.php">Ubah</a> <a class="badge bg-danger" href="">Hapus</a>
                                </td>
                                <td>
                                    <img src=".." alt="" width="100">
                                </td>
                                <td>
                                    2017110019
                                </td>
                                <td>
                                    M Sandy Yudha
                                </td>
                                <td>
                                    muhammadsandy74@gmail.com
                                </td>
                                <td>
                                    Teknik Informatika
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <!-- Akhir Table -->
        </div>
    <!-- Akhir Content -->

<?php include 'template/footer.php' ?>