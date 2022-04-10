<?php
    class persegiPanjang{

        public $p;
        public $l;
    
        function __construct($p, $l){
            $this->p = $p;
            $this->l = $l;
        }
    
        function hitungLuas(){
            return $this->p * $this->l;
        }

        function hitungKeliling(){
            return $this->p * 2 + $this->l *2;
        }
    }


?>