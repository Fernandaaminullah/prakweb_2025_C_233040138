<?php

class Produk {
    public $judul, $penerbit, $harga;
    public function __construct($judul = "judul", $penerbit = "penerbit", $harga = 0) 
    {
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->judul, $this->penerbit, $this->harga";
    }
}

class komik extends Produk {
    public $jmlHalaman;
    public function __construct($judul, $penerbit, $harga, $jmlHalaman) 
    {     
        $this->jmlHalaman = $jmlHalaman;
        parent::__construct($judul, $penerbit, $harga);
    }

    public function getlabel() 
    {
        return "$this->judul, $this->penerbit";
    }   

    public function getInfoProduk() {
        echo "label : " . parent::getLabel();
        echo "<br>";
        echo "harga : " . $this->harga;
        echo "<br>";
        echo "jumlah halaman : " . $this->jmlHalaman;
    }
}

$komik1 = new komik("Naruto", "Gramedia", 1000, 100);
$komik1->getInfoProduk(); 
