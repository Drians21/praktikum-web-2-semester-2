
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola User Wisata Depok</h1>
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
          <h3 class="card-title">Data User Wisata Depok</h3>
          
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
          <h1>Daftar User Wisata depok</h1>
          <a class = "btn btn-success mt-5" href="<?php echo base_url('index.php/user/form')?>">Create User</a>
          <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Tanggal Buat</th>
                    <th>Login Terakhir</th>
                    <th>Status</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
               
                foreach($list_user as $row){
                ?>
                <tr>
                  
                    <td><?=$row->id?></td>
                    <td><?=$row->username?></td>
                    <td><?=$row->password?></td>
                    <td><?=$row->email?></td>
                    <td><?=$row->created_at?></td>
                    <td><?=$row->last_login?></td>
                    <td><?=$row->status?></td>
                    <td><?=$row->role?></td>
                  
                    <td>
                        <a href="<?php echo base_url('index.php/user/view?id='). $row->id?>" class="btn btn-primary"><u>View</u></a><br>
                        <?php if($this->session->userdata('ROLE')== 'Administrator'){
           
                        ?>
                        <a href="<?php echo base_url('index.php/user/edit?id='). $row->id?>" class="btn btn-primary mt-1"><u>Edit</u></a><br>
                        <a href="<?php echo base_url('index.php/user/delete?id='). $row->id?>" class="btn btn-primary mt-1" onclick="if(!confirm('Anda yakin Hapus User dengan id <?=$row->id?> ?')) {return false}"><u>Delete</u></a>
                        <?php
                        }?>
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