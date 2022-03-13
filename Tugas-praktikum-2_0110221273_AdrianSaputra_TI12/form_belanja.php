<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        #div-1{
            flex:1;
        }
        #container{
            background-color : thistle;
            border-radius : 50%;
            width :73%;
            display : flex;
            justify-content : space-between;
        }
        #container-hasil{
            border : 2px solid orange;
            
            height : 125px; 
            padding : 10px;
            margin-left : 10px;
            margin-bottom : 10px;
      
        }
        #container-2{
            display : flex;
            justify-content : space-between; 
        }
    </style>
</head>
<body>
    <div class="bg-secondary p-1">
        <h1 class ="text-center text-white">Belanja online</h1>

    </div>
    <div id="container" class="container mt-3">
        <div class="mt-5 p-4" id="div-1">
            <form method ="POST" action="form_belanja.php" class="ml-4">
                <div class="form-group row my-4">
                    <label for="name" class="col-3 col-form-label">Customer</label> 
                    <div class="col-7">
                        <input id="name" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row my-4">
                    <label class="col-3">Radio Buttons</label> 
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="TV" required="required"> 
                        <label for="radio_0" class="custom-control-label">TV</label>

                        </select>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
                            <label for="radio_1" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
                            <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-3 col-form-label">Jumlah</label> 
                    <div class="col-3">
                        <input id="name" name="jumlah" placeholder="Jumlah" type="number" min="1" max="1000" class="form-control" required="required">
                    </div>
                </div> 
                <div class="form-group row mt-5">
                    <div class="col-1">
                        <button name="proses" type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div> 
        <div class="mt-5">
            <div class="list-group col-12 text-center mt-3 ml-5">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                Daftar Harga
            </a>
            <a href="#" class="list-group-item list-group-item-action">TV : 4.200.000</a>
            <a href="#" class="list-group-item list-group-item-action">Kulkas : 3.100.000</a>
            <a href="#" class="list-group-item list-group-item-action">Mesin Cuci : 3.800.000</a>
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">Daftar Dapat Berubah Setiap Saat</a>
            </div>

        </div>
    </div>
    <div id="container-2">
        <div id="container-hasil">  
            <?php
            echo "<table>";
            if(isset($_POST['proses'])){
                $customer = $_POST['customer'];
                $produk = $_POST['produk'];
                $jumlah = $_POST['jumlah'];
                
                echo "<tr><td>Nama Customer</td>"."<td>:</td>". "<td>" .$customer. "</td></tr>";
                echo "<tr><td>Pilihan Produk</td>"."<td>:</td>". "<td>". $produk. "</td></tr>";
                echo "<tr><td>Jumlah</td>"."<td>:</td>". "<td>" .$jumlah. "</td></tr>";
                
                $harga = $produk;
                if($harga == 'TV'){
                    echo "<tr><td>Total Belanja</td>". "<td>: Rp </td>"."<td>" .$jumlah * 4200000 ."</td>" . "<td>,-<td></tr>";
                    
                }
                elseif($harga == 'Kulkas'){
                    echo "<tr><td>Total Belanja</td>". "<td>: Rp </td>"."<td>" .$jumlah * 3100000 ."</td>" . "<td>,-</td></tr>";
                }
                elseif($harga == 'Mesin Cuci'){
                    echo "<tr><td>Total Belanja</td>". "<td>: Rp </td>"."<td>" .$jumlah * 3800000 ."</td>" . "<td>,-</td></tr>";
                }
                else{
                    echo "Input yang ada masukan salah";
                }
            }
            else{
                echo"--Form Belum Diisi--";
            }
            echo "</table>";
            ?>
        </div>
        <div></div>
    </div>
    
    <footer>
        <div>
            <h6 class="text-right mr-2 mt-2">Develop by @Drians</h6>
        </div>
    </footer>

</body>
</html>






<?php

?>