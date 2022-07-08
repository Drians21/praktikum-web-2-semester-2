
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
        <table class="table table-striped">
            
            <tbody>
                <tr><td>ID</td><td><?=$tempat_wisata->id?></td></tr>
                <tr><td>Nama Tempat Wisata</td><td><?=$tempat_wisata->nama?></td></tr>
                <tr><td>Alamat</td><td><?=$tempat_wisata->alamat?></td></tr>
                <tr><td>Latlong</td><td><?=$tempat_wisata->latlong?></td></tr>
                <tr><td>Jenis Wisata ID</td><td><?=$tempat_wisata->jenis_id?></td></tr>
                <tr><td>Skor Rating</td><td><?=$tempat_wisata->skor_rating?></td></tr>
                <tr><td>Harga Tiket</td><td><?=$tempat_wisata->harga_tiket?></td></tr>
                <tr><td>Foto 1</td><td><img src="<?php echo base_url();?>/uploads/<?=$tempat_wisata->foto1?>" width = "300"/> </td></tr>
                <!-- <tr><td>Foto 2</td><td><?=$tempat_wisata->foto2?></td></tr> -->
                <!-- <tr><td>Foto 3</td><td><?=$tempat_wisata->foto3?></td></tr> -->
                <tr><td>Kecamatan ID</td><td><?=$tempat_wisata->kecamatan_id?></td></tr>
                <tr><td>Website</td><td><?=$tempat_wisata->website?></td></tr>
                <tr><td>Fasilitas</td><td><?=$tempat_wisata->fasilitas?></td></tr>
                
            </tbody>

        </table>


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