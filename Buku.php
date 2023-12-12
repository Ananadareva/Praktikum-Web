<?php
// 
    class Buku {
        //deklarasi var private
        private $id_buku;
        private $nama_buku;
        private $tahun_buku;
        private $kategori_buku;
        private $penulis_buku;
        //konstruktor kelas Buku
        public function __construct($id, $nama, $tahun, $kategori, $penulis) {
            $this->id_buku = $id;
            $this->nama_buku = $nama;
            $this->tahun_buku = $tahun;
            $this->kategori_buku = $kategori;
            $this->penulis_buku = $penulis;
        }

        //getter setter
        public function getId() {
            return $this->id_buku;
        }

        public function getNama() {
            return $this->nama_buku;
        }

        public function getTahun() {
            return $this->tahun_buku;
        }

        public function getKategori() {
            return $this->kategori_buku;
        }

        public function getPenulis() {
            return $this->penulis_buku;
        }
    }


?>
