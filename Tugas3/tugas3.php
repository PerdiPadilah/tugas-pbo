<?php

class bidang{
	public $s;
	public $k;
	public $l;

 public function keliling(){
 	return "keliling adalah :";
 }
 public function luas(){
 	return"Luas Adalah :";
 }
}
  
class hitung extends bidang {
   public function h_keliling(){
     return "besar sisi: $this->s<br> hasil adalah : $this->k";
   }
   public function h_luas(){
     return "besar sisi: $this->s<br> hasil adalah : $this->l";
   }
}
  
$bidang_persegi = new hitung();


$bidang_persegi->s = 15;
$bidang_persegi->k = 15+15+15+15;
$bidang_persegi->l = 15*15;
 

echo $bidang_persegi->keliling()."<br>";
echo $bidang_persegi->h_keliling();
echo "<hr>";
echo $bidang_persegi->luas()."<br>";
echo $bidang_persegi->h_luas();

?>