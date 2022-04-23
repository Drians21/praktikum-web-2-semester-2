<?php 
include_once 'header.php';
include_once 'sidebar.php';

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>FORM BELANJA</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Dorm</li> -->
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Praktikum-2 Form Belanja</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                
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
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                    <h5 class='text-right'>Develop by @Drians</h5>
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

    


<?php
    include_once 'footer.php';
?>