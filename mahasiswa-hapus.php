<?php 
$conn = mysqli_connect("localhost", "root", "", "db_mhs");

$id = $_GET['id'];

$hapus = mysqli_query($conn, "DELETE FROM tb_mhs WHERE id = '$id'");

if ($hapus) {
    echo "<script>alert('Data berhasil di hapus')</script>";
    header("refresh:0;mahasiswa.php");
} else {
    echo "<script>alert('Data gagal di hapus')</script>";
    header("refresh:0;mahasiswa.php");
}

?>