<?php
    require_once 'class_persegi_panjang.php';

    $persegiPanjang1 = new persegiPanjang(10,2);
    $persegiPanjang2 = new persegiPanjang(10,3);
    
    
    echo '<br>';
    echo 'Persegi panjang 1';
    echo '<br>';
    echo '<br>';
    echo 'Luasnya adalah : ' . $persegiPanjang1->hitungLuas();
    echo '<br>';
    echo 'Kelilingnya adalah : ' . $persegiPanjang1->hitungKeliling();
    
    echo '<hr>';
    echo '<br>';
    echo 'Persegi Panjang 2';
    echo '<br>';
    echo '<br>';
    echo 'Luasnya adalah : ' . $persegiPanjang2->hitungLuas();
    echo '<br>';
    echo 'Kelilingnya adalah : ' . $persegiPanjang2->hitungKeliling();

?>