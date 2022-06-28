<h1>DAFTAR MAHSISWA</h1>

nama : <?=$mahasiswa1->nama?><br>
ipk : <?=$mahasiswa1->ipk?><br>
predikat : <?=$mahasiswa1->predikat()?><br><br>

<table border='1' width = '100%' >
<thead>
    <tr>
        <th>NO</th>
        <th>Nama Mahasiswa</th>
        <th>IPK</th>
        <th>Predikat</th>
    </tr>
</thead>

    <?php
    $nomor =1;
    foreach($list_mahasiswa as $obj){
    
    ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$obj->nama?></td>
            <td><?=$obj->ipk?></td>
            <td><?=$obj->predikat()?></td>
        </tr>

    <?php
    $nomor++;
    }
    ?>
</table>