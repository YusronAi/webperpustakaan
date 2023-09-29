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
        $query = "SELECT * FROM user";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getUserById($id)
    {
        $this->db->query("SELECT * FROM user WHERE id_anggota=:id");
        $this->db->bind('id_anggota', $id);
        return $this->db->resultSingle();
    }

    public function addUser ($data)
    {
        // // Input daftar anggota ke tabel user
        $query = "INSERT INTO user VALUES ('', :nama_anggota, :alamat, :nomor_telepone, :email, :pass, :roles)";

        $this->db->query($query);

        $this->db->bind('nama_anggota', $data['nama_anggota']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('nomor_telepone', $data['nomor_telepone']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('pass', $data['password']);
        $this->db->bind('roles', $data['role']);

        $this->db->execute();

        return $this->db->affectedRows();

    }

    public function delete ($id)
    {
        // Hapus dari tabel user sesuai id
        $query = "DELETE FROM user where id_anggota=:id";
        $this->db->query($query);

        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->affectedRows();
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