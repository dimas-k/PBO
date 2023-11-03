<?php
include_once 'Person.php';
class Karyawan implements Person{

    public String $nama;
    public int $nomorinduk;

    public function setNama(string $nama){
        $this->nama = $nama;
    }
    public function getNama(){
        return $this->nama; 
    }

    public function setNomorinduk(int $nomorinduk){
        $this->nomorinduk = $nomorinduk;
    }
    public function getNomorinduk(){
        return $this->nomorinduk;
    }
}