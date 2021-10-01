<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Data</title>
</head>

<body>
    <?php
include '../config.php';
$komen = new Comment();
foreach ($admin->show($_GET['id']) as $data) {
    $id = $data['id'];
    $nama = $data['nama'];
    $komentar = $data['komentar'];
}
?>
    <fieldset>
        <legend>Show Komentar</legend>
        <table>
            <tr>
                <th>Nama</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
            </tr>
            <tr>
                <th>Komentar</th>
                <td><input type="textarea" name="komentar" value="<?php echo $komentar; ?>" readonly></td>
            </tr>
        
        </table>
    </fieldset>
</body>

</html>