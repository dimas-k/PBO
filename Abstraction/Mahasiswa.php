<?php

include_once "Person.php";

Class Mahasiswa implements Person{
    public String $nama;
    public int $nim;

    public function setNama(string $nama){
        $this -> nama = $nama;
    }
    public function getNama(){
        return $this->nama;
    }

    public function setNim(int $nim){
        $this -> nim = $nim;
    }

    public function getNim(){
        return $this->nim;
    }
}