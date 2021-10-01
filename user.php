<?php
class Admin extends database
{
    // Menampilkan Semua Data
    public function index()
    {

        $dataAdmin = mysqli_query($this->koneksi, "select * from admin");
        return $dataAdmin;
    }

    // Menambah Data
    public function create($nama, $alamat, $kategori, $wisata)
    {
        mysqli_query(
            $this->koneksi,
            "insert into admin values(null,'$nama','$alamat', '$kategori', '$wisata')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $dataAdmin = mysqli_query(
            $this->koneksi,
            "select * from admin where id='$id'"
        );
        return $dataAdmin;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $dataAdmin = mysqli_query(
            $this->koneksi,
            "select * from admin where id='$id'"
        );
        return $dataAdmin;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nama, $alamat, $kategori, $wisata)
    {
        mysqli_query(
            $this->koneksi,
            "update admin set nama='$nama', alamat='$alamat', kategori='$kategori', wisata='$wisata' 
            where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from admin where id='$id'");
    }
}
?>