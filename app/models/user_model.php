<?php
// Buat class sesuai nama folder dan untuk ditampilkan ke views melalui controller
class User_Model {
    private $db;

    // Konekkan ke database
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUser()
    {
        // Ambil semua data dari tabel buku
        $query = "SELECT * FROM user WHERE roles='anggota'";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getPinjam()
    {
        // Ambil semua data dari tabel buku
        $query = "SELECT * FROM user INNER JOIN tabel_peminjaman on user.id_anggota=tabel_peminjaman.id_anggota WHERE roles='anggota'";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    // public function login ($data)
    // {
    //     $query = "SELECT * FROM user WHERE nama_anggota='$data'"
    // }
}