<?php 

// Buat class untuk tampilan dashbord 
class Dashboard extends Controller{
    // Buat method default

    public function index()
    {
    // Ambil data dari model dan beri nilai untuk judul
    $data['judul'] = 'Dashboard Admin';

    $this->views('/base/header', $data);
    $this->views('/base/navbaradmin');
    $this->views('/dashboard/index', $data);
    $this->views('/base/footer');
    }

    public function dataBuku()
    {
        $data['judul'] = 'Data Buku';
        $data['buku'] = $this->model('Buku_Model')->getBook();

        $this->views('/base/header', $data);
        $this->views('/base/navbaradmin');
        $this->views('/dashboard/databuku', $data);
        $this->views('/base/footer');
    }

    public function tambah()
    {
        if($this->model('buku_model')->add($_POST) > 0){
            // Atur pesan saat berhasil dan beri parameter
            header('location: '.Config::BASEURL. '/dashboard/databuku');
            exit;
        }else{
            header('location: '.Config::BASEURL. '/dashboard/databuku');
            echo "Gagal";
            exit;
        }
    }

    public function hapus ($id)
    {
        if ($this->model('buku_model')->delete($id) > 0) {
            header('location: '.Config::BASEURL. '/dashboard/databuku');
            exit;
        }else {
            header('location: '.Config::BASEURL. '/dashboard/databuku');
            exit;
        }
    }

    public function ubah () 
    {
        
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