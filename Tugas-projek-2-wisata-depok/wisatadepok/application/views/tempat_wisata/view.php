
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Tempat Wisata Depok</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Tempat Wisata Depok</h3>

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
        <h1>Daftar Tempat Wisata Depok</h1>
        <div class="row mt-4">
          <div class="col-sm-8">
          <table class="table table-striped table-bordered">
               
               <tbody>
                    <tr><td>ID</td><td><?=$tempat_wisata->id?></td></tr>
                    <tr><td>Nama Tempat Wisata</td><td><?=$tempat_wisata->nama?></td></tr>
                    <tr><td>Alamat</td><td><?=$tempat_wisata->alamat?></td></tr>
                    <tr><td>Latlong</td><td><?=$tempat_wisata->latlong?></td></tr>
                    <tr><td>Jenis Wisata</td><td><?=$tempat_wisata->jenis_id?></td></tr>
                    <tr><td>Skor Rating</td><td><?=$tempat_wisata->skor_rating?></td></tr>
                    <tr><td>Harga Tiket</td><td><?=$tempat_wisata->harga_tiket?></td></tr>
                    <tr><td>Foto1</td><td><?=$tempat_wisata->foto1?></td></tr>
                    <tr><td>Foto2</td><td></td></tr>
                    <tr><td>Foto3</td><td></td></tr>
                    <tr><td>Kecamatan</td><td><?=$tempat_wisata->kecamatan_id?></td></tr>
                    <tr><td>Website</td><td><?=$tempat_wisata->website?></td></tr>
                    <tr><td>Fasilitas</td><td><?=$tempat_wisata->fasilitas?></td></tr>
                  
                </tbody>
            </table>
          </div>
            <div class="col-sm-4">
          
              
              <?php
               $filegambar = base_url('/uploads/foto1/'.$tempat_wisata->foto1);
              //  $filegambar2 = base_url('/uploads/'.$tempat_wisata->foto2);
              //  echo $filegambar;
               $array = get_headers($filegambar);
               $string = $array[0];
               if(strpos($string,"200")){
                // echo 'url exists';
                echo '<img width ="70%" src="'.$filegambar.'" class="img-thumbnail" alt="foto1"/>';
                // echo '<img width ="70%" src="'.$filegambar.'" class="img-thumbnail" alt="foto2"/>';
                // echo '<img width ="70%" src="'.$filegambar.'" class="img-thumbnail" alt="foto3"/>';
              }
              else{
                // echo 'url does not exists';
                echo '<img src ="'.base_url('/uploads/foto1/gambar-anonim.jpg').'" alt="no image" width="200"/>';
                
              }
   
              ?>

                <br/>Nama FIle : <?=$tempat_wisata->foto1?>
                <?php
                echo form_open_multipart('tempatwisata/upload');
                ?>
                <input type="hidden" name="id" value="<?=$tempat_wisata->id?>"/>
                <input type="file" name="foto1" size="20"/><br>
                <input type="submit" class="btn btn-primary" value="Upload"/><br><br>
                
                
                          
                
                <?php echo form_close();?>
            </div>
            <div>
            <?php
               $filegambar2 = base_url('/uploads/foto2/'.$tempat_wisata->foto2);
              //  $filegambar2 = base_url('/uploads/'.$tempat_wisata->foto2);
              //  echo $filegambar2;
               $array = get_headers($filegambar2);
               $string = $array[0];
               if(strpos($string,"200")){
                // echo 'url exists';
                echo '<img width ="70%" src="'.$filegambar2.'" class="img-thumbnail" alt="foto1"/>';
                // echo '<img width ="70%" src="'.$filegambar.'" class="img-thumbnail" alt="foto2"/>';
                // echo '<img width ="70%" src="'.$filegambar.'" class="img-thumbnail" alt="foto3"/>';
              }
              else{
                // echo 'url does not exists';
                echo '<img src ="'.base_url('/uploads/foto2/gambar-anonim.jpg').'" alt="no image" width="200"/>';
                
              }
   
              ?>

                <br/>Nama FIle : <?=$tempat_wisata->foto2?>
                <?php
                echo form_open_multipart('tempatwisata/upload2');
                ?>
                <input type="hidden" name="id" value="<?=$tempat_wisata->id?>"/>
                <input type="file" name="foto2" size="20"/><br>
                <input type="submit" class="btn btn-primary" value="Upload"/><br><br>
                
                
                          
                
                <?php echo form_close();?>
            </div>
        </div>                                           


        </div>
        <!-- /.card-body -->
        <!-- <div class="card-footer">
          Footer
        </div> -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->