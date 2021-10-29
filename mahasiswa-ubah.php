<?php 
$page = 'mahasiswa'; 
include 'template/header.php';

$conn = mysqli_connect("localhost", "root", "", "db_mhs");

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM tb_mhs WHERE id = '$id'");

if(isset($_POST['ubah'])) {
    $id = $_POST['id'];
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $gambar = $_POST['gambar'];

    $update = mysqli_query($conn, "UPDATE tb_mhs SET npm = '$npm', nama = '$nama', email = '$email', jurusan = '$jurusan', gambar = '$gambar' WHERE id = '$id'");

    if($update) {
        echo "<script>alert('Data berhasil di ubah!')</script>";
        header("refresh:0;mahasiswa.php"); 
    } else {
        echo "<script>alert('Data gagal di ubah!')</script>";
        header("refresh:0;mahasiswa.php"); 
    }
}

while ($mhs = mysqli_fetch_array($result)) { 
?>
<div class="container mt-3">
    <form action="" method="post">
        <div class="mb-3">
            <input type="hidden" class="form-control" id="id" name="id" value="<?= $mhs['id']; ?>">
        </div>
        <div class="mb-3">
            <label for="npm" class="form-label">NPM</label>
            <input type="text" class="form-control" id="npm" name="npm" value="<?= $mhs['npm']; ?>">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="nama" class="form-control" id="nama" name="nama" value="<?= $mhs['nama']; ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $mhs['email']; ?>">
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <select class="form-select" name="jurusan" id="jurusan">
                <option value="<?= $mhs['jurusan']; ?>"><?= $mhs['jurusan']; ?></option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Sipil">Teknik Sipil</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Teknik Arsitektur">Teknik Arsitektur</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="text" class="form-control" id="gambar" name="gambar" value="<?= $mhs['gambar']; } ?>">
        </div>
        <button type="submit" class="btn btn-primary mb-5" name="ubah">Ubah Data!</button>
    </form>
    <a href="mahasiswa.php">&laquo; Back to mahasiswa</a>
</div>
<?php include 'template/footer.php' ?>