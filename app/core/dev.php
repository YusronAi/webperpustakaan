<?php 

class Dev{

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
            $url = rtrim($_GET['url'],'/');
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
        if($url == NULL){
            $url = ['$this->controller'];
        }

        if (file_exists('app/controllers/'.$url[0].'.php')) {
            // Ganti variable controller dengan index array ke 0
            $this->controller = $url[0];
            // Hilangkan controller dari array awal
            unset($url[0]);
        }

        // Panggil controller dan ambil
        require_once('app/controllers/'.$this->controller.'.php');
        // Instansiasi class agar bisa panggil method
        $this->controller = new $this->controller;

        if(isset($url[1])){
            // Cek jika method di url indeks satu
            $this->method = $url[1];
            // Hapus indeks array ke satu
            unset($url[1]);
        }

        // Parameter yang ditulis setelah controller dan method 
        // Cek jika url kosong
        call_user_func_array([$this->controller, $this->method], $this->params);
    }


    
}