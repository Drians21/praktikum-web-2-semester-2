<!DOCTYPE html>
<html>
<body>
<?php

    // definisikan variables
    $nama = 'Adrian Saputra';
    $umur = 19;
    $berat = 49;
    echo 'Nama : ' . $nama;
    echo '<br/>Umur : ' . $umur.' Tahun';
    echo '<br/>Berat : '.$berat.' Kg';

    echo "<br/>Hello $nama Apakabar";
    echo "<hr>";

     // variable system
     echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
     echo '<br/>Nama File '.$_SERVER["PHP_SELF"];
 
     echo "<hr>";


    // definisikan konstansta
     define('PHI',3.14);
     define('DBNAME','inventori');
     define('DBSERVER','localhost');
     $jari = 8;
     $luas = PHI * $jari * $jari;
     $kll = 2 * PHI * $jari;

     echo 'Luas Lingkaran dengan Jari '.$jari.' : '.$luas;
     echo '<br/>Kelilingnya : '.$kll;
     echo '<br/>Nama databasenya : '.DBNAME;
     echo '<br/>Lokasi databasenya ada di '.DBSERVER;
     echo "<hr>";
     
     
    //MENDEFINISIKAN ARRAY

     $ar_buah = ["Pepaya", "Mangga","Pisang","Jambu" ];
     // cetak buah ke index ke 2
     echo $ar_buah[2];
     // cetak jumlah buah
     echo '<br/>Jumlah Buah ' . count($ar_buah);
     // cetak seluruh buah
     echo '<ol>';
     foreach($ar_buah as $buah){
      echo '<li>'. $buah .'</li>';
      }
      echo '</ol>';
      // tambahkan buah
      $ar_buah[]="Durian";
      // hapus buah index ke 1
      unset($ar_buah[1]);
      // ubah buah index ke 2 menjadi Manggis
      $ar_buah[2]="Manggis";
      // cetak seluruh buah dengan index nya
      echo '<ul>';
      foreach($ar_buah as $k => $v){
      echo '<li> buah index - ' . $k .' adalah '. $v .'</li>';
      }
      echo '</ul>';
      echo "<hr>";





    // FUNGSI SORT

    $ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu" ];
    echo '<ol>';
    foreach($ar_buah as $k =>$v){
        echo '<li>'.$k.' - ' . $v .'</li>';

    }
    echo '</ol>';
    sort($ar_buah);
    echo "<br>SETELAH DI SORT";
    echo '<ol>';
    foreach($ar_buah as $k =>$v){
    echo '<li>'.$k.' - ' . $v .'</li>';
    }
     echo '</ol>';
     echo "<hr>";


    // FUNGSI ASSORT

    $ar_buah = ["Pepaya","Apel","Mangga","Jambu" ]; 
        echo '<ol>';
        foreach($ar_buah as $k =>$v){
            echo '<li>'.$k.' - ' . $v .'</li>';

        }
        echo '</ol>';
        asort($ar_buah);
        echo '<br>SETELAH DI ASORT';
        echo '<ol>';
    foreach($ar_buah as $k =>$v){
        echo '<li>'.$k.' - ' . $v .'</li>';
    }
    echo '</ol>';
    echo '<hr>';

    // FUGNSI ARRAY POP

    $tims = ["erwin","heru","ali"];
    echo 'ARRAY <br><br>';
    foreach($tims as $person){
        echo $person. '<br/>';
    }
    array_pop($tims);
    echo '<br>SETELAH DI ARRAY POP<br><br>';
    foreach($tims as $person){
        echo $person. '<br/>';
    }
    echo '<hr>';
    
    //ARRAY PUSH
    
    $tims = ["erwin","heru","ali"];
    echo 'ARRAY <br><br>';
    foreach($tims as $person){
        echo $person. '<br/>';
    }
    array_push($tims, "wati");
    echo '<br>SETELAH DI ARRAY PUSH<br><br>';
    foreach($tims as $person){
        echo $person. '<br/>';
    }
    echo '<hr>';
    
    // ARRAY SHIFT
    echo 'ARRAY <br><br>';
    $tims = ["erwin","heru","ali"];
    foreach($tims as $person){
        echo $person. '<br/>';
    }
    echo '<br>SETELAH DI ARRAY SHIFT<br><br>';
    array_shift($tims);
    foreach($tims as $person){
        echo $person. '<br/>';
    }
    echo '<hr>';
    
    // ARRAY UNSHIFT
    echo 'ARRAY <br><br>';
    $tims = ["erwin","heru","ali"];
    foreach($tims as $person){
        echo $person. '<br/>';
    }
    array_unshift($tims, "wati","joko");
    echo '<br>SETELAH DI ARRAY UNSHIFT<br><br>';
    foreach($tims as $person){
        echo $person. '<br/>';
    }
    echo '<hr>';   
?>
</body>
</html>