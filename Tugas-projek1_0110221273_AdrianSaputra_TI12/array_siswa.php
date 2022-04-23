
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<?php
    $ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
    $ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
    $ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
    $ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];

    $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

?>
<div class="alert alert-info text-center display-5 py-4">
        <h1>DAFTAR NILAI SISWA</h1>
</div>
<div class="container mt-5 py-5" style="width : 1300px; height :380px;">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success" style="display:none;">
                <span class="glyphicon glyphicon-ok"></span> Drag table row and cange Order</div>
            <table class="table table-dark" style="height : 275px;">
                <thead>
                    <tr class ="text-center">
                        <th>NO</th>
                        <th>NIM</th>
                        <th>UTS</th>
                        <th>UAS</th>
                        <th>TUGAS</th>
                        <th>NILAI AKHIR</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $nomor = 1;
                    foreach($ar_nilai as $ns){
                    echo '<tr class="text-center"><td class ="bg-primary">'.$nomor.'</td>';
                    echo '<td class="bg-success">'.$ns['nim'].'</td>';
                    echo '<td class="bg-warning">'.$ns['uts'].'</td>';
                    echo '<td class="bg-danger">'.$ns['uas'].'</td>';
                    echo '<td class="bg-info">'.$ns['tugas'].'</td>';
                    $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
                    echo '<td class="bg-secondary">'.number_format($nilai_akhir,2,',','.').'</td>';
                    echo '<tr/>';
                    $nomor++;
                    }
                    ?>        
                </tbody>
            </table>
        </div>
    </div>
</div>
<footer class ="mt-5" style="display:flex; justify-content : space-between;">
    <div></div>
    <div>
        <h4 class="mr-4">@Drians</h4>

    </div>
    
</footer>
