<?php 

class Dispenser {
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas = 250;
    public $namaMinuman;

    public function isi ($vol) {
        
        $this->volume = $vol;
    }

    public function hargaSegelas($harga) {

        $this->hargaSegelas = $harga;
    }

    public function beliMinum(){

        $this->volume -= $this->volumeGelas;

        if($this->volume >= 0){
            echo "Selamat Menikmati $this->namaMinuman <br>";
        }
        else {
            echo "Mohon Maaf $this->namaMinuman Sudah Habis <br>";
        }
    }
}


$jusMangga = new Dispenser();
$jusMangga->isi(1000);
$jusMangga->hargaSegelas(5000);
$jusMangga->namaMinuman = "Jus Mangga";

$jusMangga->beliMinum();
$jusMangga->beliMinum();
$jusMangga->beliMinum();
$jusMangga->beliMinum();
$jusMangga->beliMinum();
