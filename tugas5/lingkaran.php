<?php 
require_once 'BangunDatar.php';

class Lingkaran extends BangunDatar{   
    public $ar;
    public function __construct($ar)
    {$this->ar = $ar;}
    
    public function NBidang() {
        echo "Lingkaran";
    }

    public function LBidang(){
     $luaslgkrn = 3.14 * $this->ar * $this->ar;
     return $luaslgkrn;
    }

    public function KBidang()
    {
      $keliling = 3.14 * 2 * $this->ar;
      return $keliling;
    }

    public function Ket(){
        echo 'Jari2 =' .$this->ar .' Cm';
    }
}