<?php
class Comment extends database
{
    
    public function index()
    {
        $dataKomentar = mysqli_query($this->koneksi, "SELECT komentar.*, admin.nama
                                    FROM komentar JOIN admin
                                    ON komentar.id_admin = admin.id ORDER BY komentar.id DESC"
        );
        return $dataKomentar;
    }

    public function create($nama, $komentar)
    {
        mysqli_query(
            $this->koneksi,
            "insert into komentar values(null,'$nama', '$komentar', '$id_admin')"
        );
    }
    
    public function show($id)
    {
        $dataKomentar = mysqli_query(
            $this->koneksi,
            "SELECT komentar.*, admin.nama
            FROM komentar JOIN admin
            ON komentar.id_admin = admin.id where komentar.id='$id'"
        );
        return $dataKomentar;
    }

    public function edit($id)
    {
        $dataKomentar = mysqli_query(
            $this->koneksi,
            "select * from komentar where id='$id'"
        );
        return $dataKomentar;
    }
    
    public function update($id, $nama, $komentar)
    {
        mysqli_query(
            $this->koneksi,
            "update komentar set nama='$nama', komentar='$komentar', 
            id_admin='$id_admin' where id='$id'"
        );
    }

    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from komentar where id='$id'");
    }
}
?>