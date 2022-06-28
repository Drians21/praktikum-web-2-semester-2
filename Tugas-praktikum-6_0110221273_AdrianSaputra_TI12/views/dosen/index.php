<h1>DAFTAR DOSEN</h1>

<table border = '1' width = '600'>
    <thead>
        <th>NO</th>
        <th>NIDN</th>
        <th>NAMA</th>
        <th>PENDIDIKAN</th>
        <th>GENDER</th>
        <th>BIDANG AJAR</th>
    </thead>

<?php
$nomor  = 1;
foreach($list_data as $obj){
?>
    <tbody>
        <td><?=$nomor?></td>
        <td><?=$obj->nidn?></td>
        <td><?=$obj->nama?></td>
        <td><?=$obj->pendidikan?></td>
        <td><?=$obj->gender?></td>
        <td><?=$obj->bidang_ajar?></td>
    </tbody>
<?php
$nomor++;
}
?>


</table>