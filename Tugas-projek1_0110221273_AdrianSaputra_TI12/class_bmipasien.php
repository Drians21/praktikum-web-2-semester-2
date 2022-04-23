<?php
    require_once 'class_pasien.php';
    require_once 'class_bmi.php';

    class bmipasien{
        public $bmi;
        public $tanggal;
        public $pasien;

        function __construct($bmi, $pasien, $tanggal){
            $this->bmi = $bmi;
            $this->pasien = $pasien;
            $this->tanggal = $tanggal;
        }
    }




?>