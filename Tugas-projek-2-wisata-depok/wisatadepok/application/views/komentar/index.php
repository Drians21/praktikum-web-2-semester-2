
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Komentar Wisata Depok</h1>
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
          <h3 class="card-title">Data Komentar Wisata Depok</h3>

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
        <h1>Daftar Komentar Wisata depok</h1>
        <a class = "btn btn-success mt-5" href="<?php echo base_url('index.php/komentar/form')?>">Create Komentar</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tanggal Komentar</th>
                    <th>Isi</th>
                    <th>User ID</th>
                    <th>Wisata ID</th>
                    <th>Rating</th>

                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
               
                foreach($list_komentar as $row){
                ?>
                <tr>
                  
                    <td><?=$row->id?></td>
                    <td><?=$row->tanggal?></td>
                    <td><?=$row->isi?></td>
                    <td><?=$row->users_id?></td>
                    <td><?=$row->wisata_id?></td>
                    <td><?=$row->nilai_rating_id?></td>
                  
                    <td>
                        <a href="<?php echo base_url('index.php/komentar/view?id='). $row->id?>" class="btn btn-primary" >View</a>
                        <?php if($this->session->userdata('ROLE')== 'Administrator'){
           
                        ?>
                        <a href="<?php echo base_url('index.php/komentar/edit?id='). $row->id?>" class="btn btn-primary" >Edit</a>
                        <a href="<?php echo base_url('index.php/komentar/delete?id='). $row->id?>" class="btn btn-primary"  onclick="if(!confirm('Anda yakin Hapus Komentar dengan id <?=$row->id?> ?')) {return false}">Delete</a>
                        <?php
                        }
                        ?>
                    </td>
                </tr>



                <?php
              
                }
                ?>

                
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