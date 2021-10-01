<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <style>
    body{
    background-color: darkcyan;
    color:black;
    }
    </style>
</head>
<body>
    <div id="container">
        <div class="header">
        <img src="images/halutama.jpg" width="2000" height="150">
        <h1 align = "center"> Destinasi Wisata</h1>
    </div>
    
    <a href="index.php">Beranda</a>
    <a href="index2.php">Kategori Wisata</a>
    <a href="create.php">Tambah Wisata</a>
    <a href="../komentar/index.php">Tambah Komentar</a>
    </ul>
  </div>
</nav>
    <br>
    <h1 align = "center">Selamat Datang Di Destinasi Wisata Jawa Barat</h1>
    <br>
    <center>
    <img src="images/1.png" width="250" height="175">
    <img src="images/3.png" width="250" height="175">
    <img src="images/2.jpg" width="250" height="175">
    </center>

        <center><table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Kategori Wisata</th>
                <th>Nama Wisata</th>
                <th colspan="3">Aksi</th>
            </tr>
            <?php
            include '../config.php';
            $admin = new Admin();
            $no = 1;

            foreach($admin->index() as $data){
            ?>

            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $data['nama'];?></td>
                <td><?php echo $data['alamat']?></td>
                <td><?php echo $data['kategori']?></td>
                <td><?php echo $data['wisata']?></td>
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
        </center>
        </table>
    </fieldset>
</body>
</html>