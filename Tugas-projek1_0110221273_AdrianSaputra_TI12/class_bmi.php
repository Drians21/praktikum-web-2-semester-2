<?php
    class bmi extends pasien{
        public $berat;
        public $tinggi;
        public $nilai;


        function __construct($berat, $tinggi){
            $this->berat = $berat;
            $this->tinggi = $tinggi;
        }
        
        public function nilaiBMI(){
           $this->nilai = $this->berat / pow($this->tinggi/100, 2);
           return $this->nilai;
        }
        public function statusBMI(){
           if ($this->nilai < 18.5){
                
                return 'Kekurangan Berat Badan';
           }
           else if ($this->nilai >= 18.5 && $this->nilai <= 24.9){
              
                return 'Normal (ideal)';
            }
            else if ($this->nilai >= 25 && $this->nilai <= 29.9){
                
                return 'Kelaebihan Berat Badan';
            }
            else if ($this->nilai >= 30){
                
                return 'Kegemukan (Obesitas)';
            }
            else {
                return 'BMI tidak ditemukan';
           }
        }
    }

?>