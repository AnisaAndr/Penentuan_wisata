<?php
include '../config.php';
$admin = new Admin();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kategori = $_POST['kategori'];
    $wisata = $_POST['wisata'];

    if ($aksi == "create") {
        $admin->create($nama, $alamat, $kategori, $wisata);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $admin->update($id, $nama, $alamat, $kategori, $wisata);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $admin->delete($id);
        header("location:index.php");
    }

}
?>