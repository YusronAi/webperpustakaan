<?php

class Router
{
    // Membuat controller dan method default
    protected $controller = "Dashboard",
        $method = "index",
        // Membuat variable array
        $params = [];

    // Memparsing url
    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            // Bersihkan url dari tanda slash diakhir
            $url = rtrim($_GET['url'], '/');
            // Bersihkan url dari karakter berbahaya
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // Pecah array url dengan delimiter slash
            $url = explode('/', $url);

            return $url;
        }
    }

    public function __construct()
    {
        $url = $this->parseUrl();

        // Cek apakah ada file
        if ($url == NULL) {
            $url = ['$this->controller'];
        }

        if (file_exists('app/controllers/' . $url[0] . '.php')) {
            // Ganti variable controller dengan index array ke 0
            $this->controller = $url[0];
            // Hilangkan controller dari array awal
            unset($url[0]);
        }

        // Panggil controller dan ambil
        require_once('app/controllers/' . $this->controller . '.php');
        // Instansiasi class agar bisa panggil method
        $this->controller = new $this->controller;

        if (isset($url[1])) {
            // Cek jika method di url indeks satu
            $this->method = $url[1];
            // Hapus indeks array ke satu
            unset($url[1]);
        }

        // Parameter yang ditulis setelah controller dan method 
        // Cek jika url kosong
        if(!empty($url)){
            // Ambil data dan masukkan ke array params
            $this->params = array_values($url);
        }
        
        call_user_func_array([$this->controller, $this->method], $this->params);
    }



    // public static function handle ($method = 'GET', $path = '/', $filename = ''){
    //     $currentMethod = $_SERVER['REQUEST_METHOD'];
    //     $current_uri = $_SERVER['REQUEST_URI'];
    //     // echo $path;

    //     if ($currentMethod != $method) {
    //         return false;
    //     }

    //     $root = '/webperpustakaan';
    //     $pattern = '#^'.$root.$path.'$#siD';

    //     if (preg_match($pattern,$current_uri)) {
    //         require_once $filename;
    //         exit();
    //     }

    //     return false;
    // }
}
