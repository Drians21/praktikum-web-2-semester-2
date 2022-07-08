
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Jenis Wisata Depok</h1>
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
          <h3 class="card-title">Data Jenis Wisata Depok</h3>

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
        <h1>Daftar Jenis Wisata depok</h1>
        <a class="btn btn-success my-4" href="<?php echo base_url('index.php/jeniswisata/form')?>" role="button">Create Jenis Wisata</a>

        <table class="table table-hover table-striped">
                <thead>
                    <th>ID</th>
                    <th>Nama Jenis Wisata Depok</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                        foreach($jenis_wisata as $obj) { ?>
                            <tr>
                            <td><?=$obj->id?></td>
                            <td><?=$obj->nama?></td>
                            <td>
                               <a href="<?php echo base_url('index.php/jeniswisata/view?id='). $obj->id?>" class="btn btn-primary">View</a>
                               <?php if($this->session->userdata('ROLE')== 'Administrator'){
           
                              ?>
                               <a href="<?php echo base_url('index.php/jeniswisata/edit?id='). $obj->id?>" class="btn btn-primary">Edit</a>
                               <a href="<?php echo base_url('index.php/jeniswisata/delete?id='). $obj->id?>" class="btn btn-primary" onclick = "if(!confirm('Apakah anda akan menghapus Jenis Wisata dengan id <?=$obj->id?> ?')) {return false}">Delete</a>
                               <?php
                               }
                               ?>
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