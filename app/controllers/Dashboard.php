<?php 

// Buat class untuk tampilan dashbord 
class Dashboard extends Controller{
    // Buat method default

    public function index()
    {
    // Ambil data dari model dan beri nilai untuk judul
    $data['judul'] = 'Dashboard Admin';
    $data['css'] = "app/views/css/bootstrap.css";
    $data['buku'] = $this->model('Buku_Model')->getBook();

    $this->views('/base/header', $data);
    $this->views('/base/navbaradmin');
    $this->views('/dashboard/index', $data);
    $this->views('/base/footer');
    }

    public function daftarAnggota()
    {
    // Ambil data dari model dan beri nilai untuk judul
    $data['judul'] = 'Daftar Anggota';
    $data['css'] = "../app/views/css/bootstrap.css";
    $data['user'] = $this->model('User_Model')->getUser();

    $this->views('/base/header', $data);
    $this->views('/base/navbaradmin');
    $this->views('/dashboard/daftaranggota', $data);
    $this->views('/base/footer');
    }

    public function transaksi()
    {
    // Ambil data dari model dan beri nilai untuk judul
    $data['judul'] = 'Transaksi';
    $data['css'] = "../app/views/css/bootstrap.css";
    $data['pinjam'] = $this->model('User_Model')->getPinjam();

    $this->views('/base/header', $data);
    $this->views('/base/navbaradmin');
    $this->views('/dashboard/transaksi', $data);
    $this->views('/base/footer');
    }
}