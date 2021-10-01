<?php
class database{
    public $host = "localhost", $user = "root", $pass = "", $db = "penentuan_wisata";
    public $koneksi;

    public function __construct(){
        $this->koneksi = mysqli_connect(
        $this->host,
        $this->user,
        $this->pass,
        $this->db
        );
        if($this->koneksi){
            //echo "berhasil";
        }else{
            echo "Koneksi Database Gagal";
        }
    }
}

include 'user.php';
include 'komentar.php';

//koneksi DB
$db = new database();
?>