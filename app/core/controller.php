<?php
// Membuat class controller

class Controller {
    // Buat method untuk menampilkan tampilan
    public function views ($view, $data = []){
        // Panggil view di folder Views
        require_once('app/views'.$view.'.php');
    }

    // Membuat function model untuk memanggil data di sebuah model
    public function model($model){
        require_once('app/models/'.$model.'.php');
        return new $model;
    }
}