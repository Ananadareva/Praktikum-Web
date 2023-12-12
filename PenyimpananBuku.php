<?php
//import file php lain
include_once 'Buku.php';

class PenyimpananBuku  {
    //dekalarasi array obejk buku
    private $daftar_buku = [];
    // method tambah bk
    public function tambahBuku(Buku $buku) {
        	//tambahkan buku ke array daftar buku
        $this->daftar_buku[] = $buku;
        echo "Buku dengan ID " . $buku->getId() . " telah ditambahkan.";
    }

    //method hapus buku
    //pake seraching
    public function hapusBuku($id) {
        //cari buku pada array asosiatif 
        //https://www.w3schools.com/php/func_array_push.asp#:~:text=The%20array_push()%20function%20inserts,as%20many%20as%20you%20like.
        foreach ($this->daftar_buku as $key => $buku) {
            if ($buku->getId() == $id) {
                //kalo buku dengan id ketemu maka hapus buku
                unset($this->daftar_buku[$key]);
                echo "Buku dengan ID " . $id . " telah dihapus.";
                break;
            }
        }
    }


    //getter setter
    public function getDaftarBuku() {
        return $this->daftar_buku;
    }

    public function setDaftarBuku($daftar_buku) {
        $this->daftar_buku = $daftar_buku;
    }
}

?>
