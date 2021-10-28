<?php 
$page = 'mahasiswa'; 
include 'template/header.php';
$conn = mysqli_connect("localhost", "root", "", "db_mhs");

if(isset($_POST['simpan'])) {
    $npm = $_POST["npm"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $gambar = $_POST["gambar"];
    
    $simpan = mysqli_query($conn, "INSERT INTO tb_mhs VALUES ('','$npm','$nama','$email','$jurusan','$gambar')");
    
    if($simpan) {
        echo "<script>alert('Data berhasil di simpan')</script>";
        header("refresh:0;mahasiswa.php"); 
    } else {
        echo "<script>alert('Data gagal di simpan')</script>";
        header("refresh:0;mahasiwa.php");
    }
}
?>

    <!-- Content -->
        <div class="container mt-3">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="npm" class="form-label">NPM</label>
                    <input type="text" class="form-control" id="npm" name="npm">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="nama" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <select class="form-select" name="jurusan" id="jurusan">
                        <option value="Teknik Informatika" selected>Teknik Informatika</option>
                        <option value="Teknik Sipil">Teknik Sipil</option>
                        <option value="Teknik Industri">Teknik Industri</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Arsitektur">Teknik Arsitektur</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="text" class="form-control" id="gambar" name="gambar">
                </div>
                <button type="submit" name="simpan" class="btn btn-primary mb-5" name="submit">Submit</button>
            </form>
            <a href="mahasiswa.php">&laquo; Back to mahasiswa</a>
        </div>
    <!-- Akhir Content -->
<?php include 'template/footer.php' ?>