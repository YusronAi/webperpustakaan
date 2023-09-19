<?php

// Buat method untuk koneksi ke database
class Connection {
    // Buat properti untuk nilai pada koneksi pdo
    private $dbh,
            $host = 'mysql:host=localhost',
            $dbname = 'dbname=db_perpppustakaan';

    public function __construct()
    {
        try{
            $this->dbh = new PDO($this->host, $this->dbname, 'root', '';)
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}