<?php 
class Pegawai{
    public $nip;
    public $nama;
    public $jabatan;
    public $agama;
    public $status;

    public function __construct($nip,$nama,$jabatan,$agama,$status)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
    }
    public function fncGapok() {
      switch($this->jabatan) {
		  
        case "Manager": $Gapok = 15000000;
		break;
		
        case "Asmen": $Gapok = 10000000;
		break;
		
        case "Kabag": $Gapok = 7000000;
		break;
		
        case "Staff": $Gapok = 4000000;
		break;
		
      }
      return $Gapok;
    }
    public function fncTunjab() {
        $tunjab = $this->fncGapok() * 0.2;
        return $tunjab;
    }
    public function fncTunkel() {
        $tunkel = ($this->status == "Menikah") ? $this->fncGapok() * 0.1 : 0;
        return $tunkel;
    }
    public function Gakot() {
        $gator = $this->fncGapok() + $this->fncTunjab() + $this->fncTunkel();
        return $gator;
    }
    public function fnczakat() {
        $zakatProfesi = ($this->agama == "Islam" && $this->Gakot() >= 6000000) ? $this->fncGapok() * 0.025 : 0 ;
        return $zakatProfesi;
    }
    public function thp() {
        $thp = $this->Gakot() - $this->fnczakat();
        return $thp;
    }
    public function mencetak() {
		echo '<hr />';
        echo 'Data Gaji Pegawai';
        echo '<br />NIP :'.$this->nip;
        echo '<br />Nama :'.$this->nama;
        echo '<br />Jabatan :'.$this->jabatan;
        echo '<br />Agama :'.$this->agama;
        echo '<br />Status :'.$this->status;
        echo '<br />Gaji Pokok : Rp.'.number_format($this->fncGapok(), 0, ',', '.');
        echo '<br />Tunjangan Jabatan : Rp.'.number_format($this->fncTunjab(), 0, ',', '.');
        echo '<br />Tunjangan Keluarga : Rp.'.number_format($this->fncTunkel(), 0, ',', '.');
        echo '<br />Zakat : Rp.'.number_format($this->fnczakat(), 0, ',', '.');
        echo '<br />Gaji Bersih : Rp.'.number_format($this->thp(), 0, ',', '.');
        echo '<hr />';
    }

}
?>