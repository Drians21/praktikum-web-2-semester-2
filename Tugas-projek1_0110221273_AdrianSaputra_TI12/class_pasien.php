<?php
class pasien{
    public $nama;
    public $kode;
    public $tmp_lahir;
    public $tgl_lahir;
    public $email;
    public $gender;


    function __construct($kode, $nama){
        $this->kode = $kode;
        $this->nama = $nama;
    }
}



?>