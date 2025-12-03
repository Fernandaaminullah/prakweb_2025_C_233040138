<?php
// ...existing code...//

class rumah {
    // rumah saya //
    public $warnaCat = "Putih";
    public $isiKamar = 3;
    public $alamat = "setiabudi";

    // diperbaiki: tambahkan 'function', hapus tanda kutip pada parameter, beri default
    public function __construct($warnaCat = "Putih", $isiKamar = 3, $alamat = "setiabudi")
    {
        $this->warnaCat = $warnaCat;
        $this->isiKamar = $isiKamar;
        $this->alamat = $alamat;
    }

    // method //
    public function kuncipintu() {
        return "Rumah ini terkunci";
    }

    // diperbaiki: "function" (bukan "funciton")
    public function gantiWarna($warnacat) {
        $this->warnaCat = $warnacat;
    }
}

// perbaikan fungsi: 'funciton' -> 'function', gunakan $rumah (case-sensitive)
function pasanglistrik($rumah)
{
    return "Rumah ini dipasang listrik, rumah yang berwarna " . $rumah->warnaCat;
}

$rumahAndi = new rumah("Kuning", 2, "Cipaganti");
echo pasanglistrik($rumahAndi);

$rumahsaya  = new rumah('biru', 4, 'setiabudi');
echo "Rumah saya : " . $rumahsaya->kuncipintu();
echo "<br>";

$rumahsaya = new rumah('biru', 4, 'setiabudi');
$rumahsaya->gantiWarna("Merah");
echo "Warna cat rumah saya : " . $rumahsaya->warnaCat;      
echo "<br>";


// rumah tetangga //
$rumahtetangga = new rumah();
echo "Rumah tetangga : " . $rumahtetangga->kuncipintu();

$rumahtetangga = new rumah();
$rumahtetangga->gantiWarna("Biru"); 
echo "<br>Warna cat rumah tetangga : " . $rumahtetangga->warnaCat;
echo "<br>";


?>