<h1>DAFTAR MATA KULIAH</h1>

<table border = '1' width = '600'>
    <thead>
        <th>NO</th>
        <th>NAMA</th>
        <th>SKS</th>
        <th>KODE</th>
       
    </thead>

<?php
$nomor  = 1;
foreach($list_data as $obj){
?>
    <tbody>
        <td><?=$nomor?></td>
        <td><?=$obj->nama?></td>
        <td><?=$obj->sks?></td>
        <td><?=$obj->kode?></td>
     
    </tbody>
<?php
$nomor++;
}
?>


</table>