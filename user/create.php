<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Wisata</title>
</head>
<body>
    <fieldset>
        <legend>Tambah Data Wisata</legend>
        <form action="index.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" placeholder = "Masukkan Nama" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="textarea" name="alamat" placeholder = "Masukkan Alamat" required></td>
                </tr>
                <tr>
                    <td>Kategori Wisata</td>
                    <td><select name="kategori">
                        <option value="bahari">Wisata Bahari</option>
                        <option value="cagarAlam">Wisata Cagar Alam</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Nama Wisata</td>
                    <td><input type="text" name="wisata" placeholder = "Wisata"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name = "save" value="Tambah">
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>