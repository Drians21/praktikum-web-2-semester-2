<?php
    class NilaiMahasiswa{
        public $matakuliah;
        public $nilai;
        public $nim;

        function __construct($matakuliah, $nilai, $nim){
            $this->matakuliah = $matakuliah;
            $this->nilai = $nilai;
            $this->nim = $nim;
        }

        public function grade(){
            if($this->nilai >= 0 && $this->nilai < 36){
                $this->nilai = 'E';
                return 'E';
            }
            elseif($this->nilai >= 36 && $this->nilai < 56){
                $this->nilai = 'D';
                return 'D';
            }
            elseif($this->nilai >= 56 && $this->nilai < 70){
                $this->nilai = 'C';
                return 'C';
            }
            elseif($this->nilai >= 70 && $this->nilai < 85){
                $this->nilai = 'B';
                return 'B';
            }
            elseif($this->nilai >= 85 && $this->nilai <= 100){
                $this->nilai = 'A';
                return 'A';
            }
            else{
                return "nilai anda tidak ditemukan";
            }
        }

        public function hasil(){
            switch($this->nilai){
                case 'A':
                    return 'LULUS';
                    break;
                case 'B':
                    return 'LULUS';
                    break;
                case 'C':
                    return 'LULUS';
                    break;
                case 'D':
                    return 'TIDAK LULUS';
                    break;
                case 'E':
                    return 'TIDAK LULUS';
                    break;
                default:
                    return '*Status anda tidak ditemukan';
                    break;

            }
        }
    }
    
            



?>