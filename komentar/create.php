<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar</title>
</head>
<body>
    <fieldset>
        <legend>Tambah Komentar</legend>
        <form action="index.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" placeholder = "Masukkan Nama" required></td>
                </tr>
                <tr>
                    <td>Komentar</td>
                    <td><input type="textarea" name="komentar" required></td>
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