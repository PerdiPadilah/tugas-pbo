<?php

abstract class bidang{
   abstract public function hitung_keliling ();
}
interface datar{
 public function hitung_luas();
}
  
class persegi extends bidang implements datar{
   public function hitung_keliling(){
     return 4+4+4+4;
   }
    public function hitung_luas(){
     return 4*4;
   }
}
  
class p_panjang extends bidang implements datar{
   public function hitung_keliling(){
     return 4+8+4+8;
   }
   public function hitung_luas(){
     return 4*8;
   }
}
  
// buat objek dari class diatas
$bidang_persegi = new persegi();
$bidang_P_panjang = new P_panjang();
  
// buat fungsi untuk memproses objek
function keliling ($objek_bidang){
   return $objek_bidang->hitung_keliling();
}

function luas($objek_bidang){
   return $objek_bidang->hitung_luas();
}
  
// jalankan fungsi

echo "keliling persegi = ";
echo keliling($bidang_persegi);
echo "<hr>";
echo "luas persegi = ";
echo luas($bidang_persegi);
echo "<hr>";
echo "keliling persegi panjang = ";
echo keliling($bidang_P_panjang);
echo "<hr>";
echo "keliling persegi panjang = ";
echo luas($bidang_P_panjang);

?>