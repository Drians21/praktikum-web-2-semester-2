<?php
class Dispenser{
    protected $volumeWadah;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    public function __construct($volumeGelas, $namaMinuman, $hargaSegelas, $volumeWadah){
        $this->namaMinuman = $namaMinuman;
        $this->volumeWadah = $volumeWadah;
        $this->volumeGelas = $volumeGelas;
        $this->hargaSegelas = $hargaSegelas;
    }
    // Harga Total beli
    public function harga_beli($jumlah){
        $this->volumeGelas = $jumlah; echo '<br>';
        $this->hargaSegelas = $this->volumeGelas * $this->hargaSegelas;
        $this->volumeWadah = $this->volumeWadah;
    }
    // Mengecek volume wadah setiap pemeblian dan simpan
    public function cek_wadah($banyak_beli){
        $this->volumeWadah =  $this->volumeWadah - 250 * $this->volumeGelas; 
       
    }
    // Jika wadah habis maka bisa diisi ulang
    public function isi_ulang(){
        $this->volumeWadah =  $this->volumeWadah + 5000;
        
    }
    // uang dibayarkan pada wadah penyimpanan
    public function penyimpanan_uang(){
        $this->volumeWadah = $this->hargaSegelas;
        
    }
    public function cetak_harga_beli(){
       echo 'Minuman : ' . $this->namaMinuman . '<br>';
       echo 'Total Wadah Minuman : ' . $this->volumeWadah . ' ml<br>Harga : Rp. 5000 <br><br>';
       echo 'Jumlah Gelas terjual : ' . $this->volumeGelas . '<br><br>';
       echo 'Total Harga Pembelian : ' . $this->hargaSegelas . '<br>';
      
       echo '<br>';
        
    }
    public function cetak_cek_wadah(){
       
       echo 'Total Sisa Minuman : ' . $this->volumeWadah . ' ml <br>';
      
       echo '<br>';
        
    }
    public function cetak_isi_ulang(){
      
       echo 'Sudah Isi Ulang Sebanyak : ' . $this->volumeWadah . ' ml<br>';
       
       echo '<br>';
        
    }
    public function cetak_penyimpanan_uang(){
       
       echo 'Uang yang tersimpan pada wadah : Rp. ' . $this->volumeWadah . '<br>';
     
       echo '<br>';
        
    }

}

$dispenser1 = new Dispenser(250, 'kopi susu', 5000, 5000);
$dispenser1->harga_beli(20);
$dispenser1->cetak_harga_beli();
$dispenser1->cek_wadah(20);
$dispenser1->cetak_cek_wadah();
$dispenser1->isi_ulang(); 
$dispenser1->cetak_isi_ulang();
$dispenser1->penyimpanan_uang(20);
$dispenser1->cetak_penyimpanan_uang();


?>