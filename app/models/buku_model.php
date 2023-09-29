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

    public function getBookById($id)
    {
        $this->db->query("SELECT * FROM tabel_buku WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }

    public function add ($data)
    {
        // Tambah ke database
        $query = "INSERT INTO tabel_buku VALUES ('', :id_kategori, :judul_buku, :pengarang, :penerbit, :tahun_terbit, :stock_buku)";
        $this->db->query($query);

        $this->db->bind('id_kategori', $data['id_kategori']);
        $this->db->bind('judul_buku', $data['judul_buku']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('tahun_terbit', $data['tahun_terbit']);
        $this->db->bind('stock_buku', $data['stock_buku']);

        $this->db->execute();
        
        return $this->db->affectedRows();
    }

    public function delete ($id)
    {
        // Hapus nilai dalam tabel_buku dengan id
        $query = "DELETE FROM tabel_buku WHERE id=:id";
        $this->db->query($query);

        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->affectedRows();
    }

    public function edit ($data)
    {
        // Ubah data dalam tabel_buku dengan id
        $query = "UPDATE tabel_buku SET id_kategori=:id_kategori, judul_buku=:judul_buku, pengarang=:pengarang, penerbit=:penerbit, tahun_terbit=:tahun_terbit, stock_buku=:stock_buku WHERE id=:id";

        $this->db->query($query);

        $this->db->bind('id_kategori', $data['id_kategori']);
        $this->db->bind('judul_buku', $data['judul_buku']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('tahun_terbit', $data['tahun_terbit']);
        $this->db->bind('stock_buku', $data['stock_buku']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        
        return true;
    }
}