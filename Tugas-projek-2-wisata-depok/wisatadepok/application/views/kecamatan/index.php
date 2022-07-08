
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Kecamatan Wisata Depok</h1>
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
          <h3 class="card-title">Data Kecamatan Wisata Depok</h3>

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
        <h1>Daftar Kecamatan Wisata depok</h1>
        <a class="btn btn-success my-3" href="<?php echo base_url('index.php/kecamatan/form')?>" role="button">Create Kecamatan</a>

        <table class="table table-hover table-striped">
                <thead>
                    <th>ID</th>
                    <th>Nama Kecamatan</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                        foreach($kecamatan as $kct) { ?>
                            <tr>
                            <td><?=$kct->id?></td>
                            <td><?=$kct->nama?></td>
                            <td>
                               <a href="<?php echo base_url('index.php/kecamatan/view?id='). $kct->id?>" class="btn btn-primary">View</a> 
                               <a href="<?php echo base_url('index.php/kecamatan/edit?id='). $kct->id?>" class="btn btn-primary">Edit</a> 
                               <a href="<?php echo base_url('index.php/kecamatan/delete?id='). $kct->id?>" class="btn btn-primary" onclick = "if(!confirm('Apakah anda akan menghapus Kecamatan dengan id <?=$kct->id?> ?')) {return false}">Delete</a>
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