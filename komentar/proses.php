<?php
include '../config.php';
$komen = new Comment();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $nama = $_POST['nama'];
    $komentar = $_POST['komentar'];
    
    if ($aksi == "create") {
        $komen->create($nama, $komentar);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $komen->update($id, $nama, $komentar);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $komen->delete($id);
        header("location:index.php");
    }

}
?>