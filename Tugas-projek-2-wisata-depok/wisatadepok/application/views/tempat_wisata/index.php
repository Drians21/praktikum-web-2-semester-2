
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
        <h1>Daftar Tempat Wisata depok</h1>
        <a class="btn btn-success my-3" href="<?php echo base_url('index.php/tempatwisata/form')?>" role="button">Create Tempat Wisata</a>

        <table class="table table-hover table-striped table-bordered">
                <thead>
                    <th>ID</th>
                    <th>Nama Tempat Wisata</th>
                    <th>Alamat</th>
                    <th>Latlong</th>
                    <th>Jenis ID</th>
                    <th>Skor Rating</th>
                    <th>Harga Tiket</th>
                    <th>Foto 1</th>
                    <th>Foto 2</th>
                    <th>Foto 3</th>
                    <th>Kecamatan ID</th>
                    <th>Website</th>
                    <th>Fasilitas</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    foreach($tempat_wisata as $obj) { ?>
                            <tr>
                            <td><?=$obj->id?></td>
                            <td><?=$obj->nama?></td>
                            <td><?=$obj->alamat?></td>
                            <td><?=$obj->latlong?></td>
                            <td><?=$obj->jenis_id?></td>
                            <td><?=$obj->skor_rating?></td>
                            <td><?=$obj->harga_tiket?></td>
                            <td><?=$obj->foto1?></td>
                            <td><?=$obj->foto2?></td>
                            <td><?=$obj->foto3?></td>
                            <td><?=$obj->kecamatan_id?></td>
                            <td><?=$obj->website?></td>
                            <td><?=$obj->fasilitas?></td>
                            <td>
                               <a href="<?php echo base_url('index.php/tempatwisata/view?id='). $obj->id?>" class="btn btn-primary">View</a> <br>
                               <a href="<?php echo base_url('index.php/tempatwisata/edit?id='). $obj->id?>" class="btn btn-primary mt-2">Edit</a> <br>
                               <a href="<?php echo base_url('index.php/tempatwisata/delete?id='). $obj->id?>" onclick = "if(!confirm('Apakah anda akan menghapus Tempat Wisata dengan id <?=$obj->id?> ?')) {return false}" class="btn btn-primary mt-2">Delete</a>
                            </td>
                            </tr>
                    <?php }?>
                </tbody>
          </table>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->