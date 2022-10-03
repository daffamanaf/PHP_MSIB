<?php 
require_once 'BangunDatar.php';

class Segitiga extends BangunDatar{
    public $a;
    public $t;
    public $garing;
	
    public function __construct($a,$t,$garing) 
    {
        $this->a = $a;
        $this->t = $t;
        $this->sisi = $garing;
    }
    public function NBidang() {
        echo "Segitiga";
    }
    public function LBidang() {
        $luas = 0.5 * $this->a * $this->t;
        return $luas;
    }
    public function  KBidang() {
        $keliling = $this->sisi + $this->sisi + $this->sisi;
        return $keliling;
    }
    public function Ket() {
        echo ' Alas = '.$this->a.' Cm <br/>  Tinggi = '.$this->t.' Cm <br/>  Garis Miring ='.$this->sisi.' Cm';
    }

}