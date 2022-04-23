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
            <h1>UTS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li> -->
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
                <h3 class="card-title">Praktikum UTS</h3>

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
               <?php
               require_once 'class_pasien.php';
               require_once 'class_bmi.php';
               require_once 'class_bmipasien.php';
               
               $pasien1 = new pasien('P001', 'Ahmad');
               $pasien1->gender="L";
               $pasien1->tmp_lahir="Pekalongan";
               $pasien1->tgl_lahir="1986-12-13";
               $pasien1->email="ahmad@gmail.com";
               
               $pasien2 = new pasien('P002', 'Reti');
               $pasien2->gender="P";
               $pasien2->tmp_lahir="Yogyakarta";
               $pasien2->tgl_lahir="1986-01-03";
               $pasien2->email="reti@gmail.com";
               
               $pasien3 = new pasien('P003', 'Kubil');
               $pasien3->gender="L";
               $pasien3->tmp_lahir="jamban";
               $pasien3->tgl_lahir="1987-02-03";
               $pasien3->email="kubil@gmail.com";
               
               $bmi1 = new bmi(69.8, 169);
               
               $bmi2 = new bmi(55.3, 165);
               
               $bmi3 = new bmi(45.2, 171);
               
               
               
               $bmipasien1 = new bmipasien($bmi1,$pasien1,"2022-01-10");
               $bmipasien2 = new bmipasien($bmi2,$pasien2,"2022-01-10");
               $bmipasien3 = new bmipasien($bmi3,$pasien3,"2022-01-11");
               
               
               $ar_bmipasien = [$bmipasien1, $bmipasien2, $bmipasien3];
               
               if(isset($_POST['kode'])){
                   $kode = $_POST['kode'];
                   $nama = $_POST['nama'];
                   $pasien4 = new pasien($kode, $nama);
               }
               if(isset($_POST['gender'])){
                   $pasien4->gender = $_POST['gender'];
               }
               if(isset($_POST['tmp_lahir'])){
                   $pasien4->tmp_lahir= $_POST['tmp_lahir'];
                  
               }
               if(isset($_POST['tgl_lahir'])){
                   $pasien4->tgl_lahir= $_POST['tgl_lahir'];
                   
               }
               if(isset($_POST['email'])){
                   $pasien4->email= $_POST['email'];
                   
                   
               }
               
               
               if (isset($_POST['berat'])){
                   $berat = $_POST['berat'];
               
               }
               if (isset($_POST['berat'])){
                   $tinggi = $_POST['tinggi'];
               
                   $bmi4 = new bmi($berat,$tinggi);
               }
               
               if(isset($_POST['tanggal'])){
                   $tanggal = $_POST['tanggal'];
               
                   $bmipasien4 = new bmipasien($bmi4, $pasien4,$tanggal);
                   array_push($ar_bmipasien,$bmipasien4);
               }
               
               
               ?>


<div id='container'class='container'>
    <div class="container" id="container-box1">
        <form role="form" class="form-horizontal form-group mt-2" method="POST" action="index.php">
        <div class="form-group row">
            <label for="nama" class="col-2 col-form-label">Nama</label> 
            <div class="col-5">
            <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama anda"required="required">
            </div>
        </div>
        <div class="form-group row">
        <label for="tanggal" class="col-2 col-form-label">Tanggal</label> 
        <div class="col-3">
            <input id="tanggal" name="tanggal" type="date" class="form-control" required="required">
            </div>
        </div> 
        <div class="form-group row">
            <label for="kode" class="col-2 col-form-label">Kode</label> 
            <div class="col-3">
            <select id="kode" name="kode" class="custom-select">
              <option value="">---</option>        
              <option value="P004">P004</option>
          
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="gender" class="col-2 col-form-label">Gender</label> 
            <div class="col-3">
            <select id="gender" name="gender" class="custom-select">
              <option value="">Pilih..</option>        
              <option value="L">Laki-laki</option>
              <option value="P">Perempuan</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="tmp_lahir" class="col-2 col-form-label">Tempat Lahir</label> 
            <div class="col-4">
                <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" placeholder="Tempat Lahir"required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl_lahir" class="col-2 col-form-label">Tanggal Lahir</label> 
            <div class="col-4">
                <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" placeholder="Tanggal Lahir"required="required">
            </div>
        </div>
    
        <div class="form-group row">
            <label for="berat" class="col-2 col-form-label">Berat Badan</label> 
            <div class="col-3">
                <input id="berat" name="berat" type="number" class="form-control" placeholder="Berat Badan(kg).." required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="tinggi" class="col-2 col-form-label">TinggiBadan</label> 
            <div class="col-3">
                <input id="tinggi" name="tinggi" type="number" class="form-control" placeholder="Tinggi Badan(cm).." required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-2 col-form-label">Email</label> 
            <div class="col-5">
                <input id="email" name="email" type="text" class="form-control" placeholder="Email"required="required">
            </div>
        </div> 
        <div class="form-group row">
        <div class="offset-2 col-2">
            <button name="proses" id="button" type="simpan" class="btn btn-success">Submit</button>
        </div>  
        </div>
        </form>
    </div>

    <div id="container-box2">
        <div class='item-box2'> 
            <!-- <h5 class='text-center  mt-5'><---SIlahkan Isi fom disamping untuk menghitung BMI ada</h5> -->
            <div>
                <img src="img/user.png" alt="" width='300'>
            </div>
            <div class ='mt-5'>
               <div>
                <h5>-- Isi form disamping dan nilai bmi anda akan tampil pada table di bawah --</h5>
               </div>
            </div>
        </div>

    </div>
</div>

<div class="container mt-5">
<table class="table" border="2" width="100%" style="text-align : center; border-color: orange">
    <thead>
        <tr>
            <th>No.</th><th>Tanggal <br>Pemeriksaan</th><th>Kode</th>
            <th>Nama</th><th>Gender</th><th>Tempat Lahir</th><th>Tanggal Lahir</th>
            <th>Email</th><th>Berat</th><th>Tinggi</th><th>Nilai BMI</th><th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nomor=1;
            foreach($ar_bmipasien as $obj){
                ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$obj->tanggal?></td>
                <td><?=$obj->pasien->kode?></td>
                <td><?=$obj->pasien->nama?></td>
                <td><?=$obj->pasien->gender?></td>
                <td><?=$obj->pasien->tmp_lahir?></td>
                <td><?=$obj->pasien->tgl_lahir?></td>
                <td><?=$obj->pasien->email?></td>
                <td><?=$obj->bmi->berat?></td>
                <td><?=$obj->bmi->tinggi?></td>
                <?php
                echo '<td>'. round($obj->bmi->nilaiBMI(), 1).'</td>'
                ?>
                <td><?=$obj->bmi->statusBMI()?></td>
                
            </tr>
            <?php
            $nomor++;
        }
        
        ?>
    </tbody>
</table>
    
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

  <?php include_once 'footer.php';