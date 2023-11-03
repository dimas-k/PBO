<?php

include_once "Person.php";

Class Mahasiswa implements Person{
    public String $nama;
    public int $nim;

    public function setNama(){
        $this -> nama = $nama;
    }
    public function getNama(){
        return $this->nama;
    }

    public function setNim(){
        $this -> nim = $nim;
    }

    public function getNim(){
        return $this->nim;
    }
}