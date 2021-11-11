<?php
class luaspersegi {
	
   private $sisi;
    
    public function __construct ($sisi) {
    	$this->sisi = $sisi;
    }
 	
    public function hitung_luaspersegi(){
    $x = $this->sisi*$this->sisi;
    return $x;
    }
    
    public function __destruct() {
    	echo "Keterangan:<br>
        sisi persegi 5cm";
        }
}

$luas_persegi = new luaspersegi(5);

echo "Hasilnya adalah = ".$luas_persegi->hitung_luaspersegi()."<hr>";
?>