<?php 
require_once 'BangunDatar.php';

class Persegi extends BangunDatar{
    
    public $panjang;
    public $lebar;

    public function __construct($panjang,$lebar)
    {
        $this->p = $panjang;
        $this->l = $lebar;
    }
    
    public function NBidang() {
        echo "Persegi";
    }

    public function LBidang(){
     $luas = $this->p * $this->l;
     return $luas;
    }

    public function KBidang()
    {
      $keliling = 2 * ($this->p + $this->l);
      return $keliling;
    }

    public function Ket(){
        echo 'Panjang = ' .$this->p.' Cm';
        echo '<br> Lebar = ' .$this->l.' Cm';
    }
}