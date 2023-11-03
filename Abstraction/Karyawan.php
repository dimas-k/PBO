<?php
include_once 'Person.php';
class Karyawan implements Person{

    public String $nama;
    public int $nim;

    public function setNama(){
        $this->nama = $nama;
    }
    public function getNama(){
        return $this->nama; 
    }

    public function setNomor_Induk(){
        $this->nomor_induk = $nomor_induk;
    }
    public function getNomor_Induk(){
        return $this->nomor_induk;
    }
}