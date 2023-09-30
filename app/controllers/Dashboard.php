<?php
session_start();
// Buat class untuk tampilan dashbord 

class Dashboard extends Controller
{
    // Buat method default

    public function index()
    {
        // Ambil data dari model dan beri nilai untuk judul
        $data['judul'] = 'Dashboard Admin';

        $this->views('/base/header', $data);
        $this->views('/base/navbaradmin');
        $this->views('/dashboard/index', $data);
        $this->views('/base/footer');

        if (!($_SESSION['login'])){
            header('location: '. Config::BASEURL . '/login');
        }
    }

    public function dataBuku()
    {
        $data['judul'] = 'Data Buku';
        $data['buku'] = $this->model('Buku_Model')->getBook();

        $this->views('/base/header', $data);
        $this->views('/base/navbaradmin');
        $this->views('/dashboard/databuku', $data);
        $this->views('/base/footer');

        if (!($_SESSION['login'])){
            header('location: '. Config::BASEURL . '/login');
        }
    }

    public function tambah()
    {
        if ($this->model('buku_model')->add($_POST) > 0) {
            // Atur pesan saat berhasil dan beri parameter
            header('location: ' . Config::BASEURL . '/dashboard/databuku');
            exit;
        } else {
            header('location: ' . Config::BASEURL . '/dashboard/databuku');
            echo "Gagal";
            exit;
        }

        if (!($_SESSION['login'])){
            header('location: '. Config::BASEURL . '/login');
        }
    }

    public function hapusBuku($id)
    {
        if ($this->model('buku_model')->delete($id) > 0) {
            header('location: ' . Config::BASEURL . '/dashboard/databuku');
            exit;
        } else {
            header('location: ' . Config::BASEURL . '/dashboard/databuku');
            exit;
        }

        if (!($_SESSION['login'])){
            header('location: '. Config::BASEURL . '/login');
        }
    }

    public function ubahBuku($id)
    {
        // var_dump($_POST);
        $data['judul'] = "Ubah Data Buku";
        $data['value'] = $this->model('buku_model')->getBookById($id);

        $this->views('/base/header', $data);
        $this->views('/base/navbaradmin');
        $this->views('/dashboard/ubah', $data);
        $this->views('/base/footer');

        if ($_POST) {
            $run = $this->model('buku_model')->edit($_POST);
            if ($run) {
                header('location: ' . Config::BASEURL . '/dashboard/databuku');
                exit;
            } else {
                echo "<script> alert('gagal'); </script>";
            }
        }

        if (!($_SESSION['login'])){
            header('location: '. Config::BASEURL . '/login');
        }
    }

    public function daftarAnggota()
    {
        // Ambil data dari model dan beri nilai untuk judul
        $data['judul'] = 'Daftar Anggota';
        $data['user'] = $this->model('User_Model')->getUser();

        $this->views('/base/header', $data);
        $this->views('/base/navbaradmin');
        $this->views('/dashboard/daftaranggota', $data);
        $this->views('/base/footer');
    }

    public function tambahAnggota()
    {
        // Tambah anggota ke dalam tabel user 
        if ($this->model('user_model')->addUser($_POST) > 0) {
            header('location: ' . Config::BASEURL . '/dashboard/daftaranggota');
            exit;
        } else {
            header('location: ' . Config::BASEURL . '/dashboard/daftaranggota');
            exit;
        }
    }

    public function hapusAnggota($id)
    {
        // Hapus anggota dari tabel user
        if ($this->model('user_model')->delete($id) > 0) {
            header('location: ' . Config::BASEURL . '/dashboard/daftaranggota');
            exit;
        } else {
            header('location: ' . Config::BASEURL . '/dashboard/daftaranggota');
            exit;
        }
    }

    public function ubahAnggota()
    {
        // Hapus anggota dari tabel user
        // if ($this->model('user_model')->edit($id) > 0) {
        //     header('location: ' .Config::BASEURL. '/dashboard/daftaranggota');
        //     exit;
        // }else {
        //     header('location: ' .Config::BASEURL. '/dashboard/daftaranggota');
        //     exit;
        // }
        var_dump($_POST['id_anggota']);
    }

    public function transaksi()
    {
        // Ambil data dari model dan beri nilai untuk judul
        $data['judul'] = 'Transaksi';
        $data['pinjam'] = $this->model('User_Model')->getPinjam();

        $this->views('/base/header', $data);
        $this->views('/base/navbaradmin');
        $this->views('/dashboard/transaksi', $data);
        $this->views('/base/footer');
    }
}
