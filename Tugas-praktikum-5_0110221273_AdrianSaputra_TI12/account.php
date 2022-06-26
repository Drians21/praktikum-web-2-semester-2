<?php
class Account{
    public $nomor;
    protected $saldo;

    function __construct($nomor, $saldo){
    $this->nomor = $nomor;
    $this->saldo = $saldo;
    }

    public function deposit($jumlah){
        $this->saldo = $this->saldo + $jumlah;
    }
    public function withdraw($jumlah){
        $this->saldo = $this->saldo - $jumlah;
    }
    public function cetak(){
        echo 'Nomor Pelanggan : '. $this->nomor. '<br>';
        echo 'Saldo : '. $this->saldo. '<br><br>';
    }

}


?>