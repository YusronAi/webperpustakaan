<?php
// Buat class sesuai nama folder dan untuk ditampilkan ke views melalui controller
class Buku_Model {
    private $db;

    // Konekkan ke database
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getBook()
    {
        // Ambil semua data dari tabel buku
        $this->db->query("SELECT * FROM tabel_buku");
        return $this->db->resultSet();
    }
}