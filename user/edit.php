<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
</head>

<body>
    <?php
include '../config.php';
$admin = new Admin();
foreach ($admin->edit($_GET['id']) as $data) {
    $id = $data['id'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $kategori = $data['kategori'];
    $wisata = $data['wisata'];
}
?>
    <fieldset>
        <legend>Edit Data Wisata</legend>
        <form action="proses.php" method="post">
            <input type="hidden" name="aksi" value="update">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>Nama</th>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" required></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><input type="textarea" name="alamat" value="<?php echo $alamat; ?>" required></td>
                </tr>
                <tr>
                    <th>Kategori Wisata</th>
                    <td><input type="text" name="kategori" value="<?php echo $kategori; ?>" required></td>
                </tr>
                <tr>
                    <th>Nama Wisata</th>
                    <td><input type="text" name="wisata" value="<?php echo $wisata; ?>" required></td>
                </tr>

                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>