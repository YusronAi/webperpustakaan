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
        $this->db->query("SELECT * FROM user WHERE role='anggota'");
        return $this->db->resultSet();
    }

    public function getPinjam()
    {
        // Ambil semua data dari tabel buku
        $this->db->query("SELECT * FROM user INNER JOIN tabel_peminjaman on user.id_anggota=tabel_peminjaman.id_anggota WHERE role='anggota'");
        return $this->db->resultSet();
    }
}