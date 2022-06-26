<?php
    
    require_once 'account.php';
    class AccountBank extends Account{
        public $customer;

        function __construct($nomor, $saldo, $customer){
            parent::__construct($nomor, $saldo);
            $this->customer = $customer;
        }
        // Fungsi tranfer uang, ketika transfer saldo peneransfer akan berkurang dan yang di transfer bertambah
        function transfer($pel_tujuan, $jumlah){
            
            $pel_tujuan->deposit($jumlah);
            echo 'Nama Pelanggan : '.$this->customer. '<br>Nominal Transfer :'.$jumlah. '<br>Pelanggan Tujuan : '. $pel_tujuan->customer. '<br><br>';
            $this->withdraw($jumlah);
        }
        // fungsi cetak : mencetak fungsi2 yang telah dibuat
        function cetak(){
            echo 'Nama Pelanggan : '. $this->customer. '<br>';
            parent::cetak();
        }
        //fungsi saldo untuk cek saldo pelanggan
        function saldo(){
          return $this->saldo;
        }
        
    }
    //objek
    $pelanggan1 = new AccountBank('P001', 6000000, 'Ahmad');
    $pelanggan2 = new AccountBank("P002", 5350000, 'Budi');
    $pelanggan3 = new AccountBank('P003', 2500000, 'Kurniawan');

    $ar_pelanggan = [$pelanggan1, $pelanggan2, $pelanggan3];
        $no = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <!-- tampilan table data pelanggan menggunakan array -->
    <table border = 1 width ='500'>
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th>Tabel Data Awal Pelanggan</th>
                <th></th>
            </tr>
    
            <tr>
                <th>No</th>
                <th>No. Account</th>
                <th>Pemilik</th>
                <th>Saldo</th>
            </tr>
        </thead>
            <?php
            $no = 1;
            foreach ($ar_pelanggan as $key){  ?>
            <tbody>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $key->nomor; ?></td>
                    <td><?= $key->customer; ?></td>
                    <td><?= $key->saldo(); ?></td>
                </tr>
            <tbody>
                <?php
                $no++;
            } 
    
            //Ahmad menabung uang
            echo '=> Ahmad menabung <br><br>';
            $pelanggan1->deposit(1000000);
            $pelanggan1->cetak();
            echo '<hr>';
    
            //Ahmad mentransfer kepada pelanggan lain
            echo '=> Ahmad melakukan transfer <br><br>';
            $pelanggan1->transfer($pelanggan2, 500000);
            $pelanggan1->transfer($pelanggan3, 1500000);
            echo '=> Cetak Data Pelanggan <br><br>';
            $pelanggan1->cetak();
            $pelanggan2->cetak();
            $pelanggan3->cetak(); echo "<br>";
            echo '<hr>';
            
            //Budi menarik uang
            echo '=> Budi melakukan penarikan<br><br>';
            $pelanggan2->withdraw(2500000);
            $pelanggan2->cetak();
            echo '<br><hr><br>'
            ?>
    </table>
    </body>
</html>

