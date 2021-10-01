<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar</title>
</head>
<body>
    <center>Komentar</center>
    <fieldset>
        <legend>Komentar</legend>
        <a href="create.php">Tambah Komentar</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Komentar</th>
                <th colspan="3">Aksi</th>
            </tr>
            <?php
            include '../config.php';
            $komen = new Comment();
            $no = 1;

            //var_dump($dosen->index());
            foreach($komen->index() as $data){
            ?>

            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $data['nama'];?></td>
                <td><?php echo $data['komentar']?></td>
                <td>
                    <a href="show.php?id=<?php echo $data['id'];?>">Show</a>
                </td>
                <td>
                    <a href="edit.php?id=<?php echo $data['id'];?>">Edit</a>
                </td>
                <td>
                    <a href="#" onclick="return confirm('Apakah anda yakin mau menghapus data ini?')">delete
                </a>
                </td>
            </tr>

            <?php
        }?>
        </table>
    </fieldset>
</body>
</html>