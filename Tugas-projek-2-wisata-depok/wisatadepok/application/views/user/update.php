
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit User</h1>
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
          <h3 class="card-title">Form Edit User</h3>

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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <?php
            $hidden = ['idedit'=>$user->id];

        ?>
        <?php echo form_open('user/form_save','',$hidden);?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <div class="form-group row">
            <label for="id" class="col-4 col-form-label">ID</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-address-card"></i>
                  </div>
                </div> 
                <input id="id" name="id" value="<?=$user->id?>" type="number" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl" class="col-4 col-form-label">Username</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar-times-o"></i>
                  </div>
                </div> 
                <input id="username" name="username" value="<?=$user->username?>" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl" class="col-4 col-form-label">Password</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar-times-o"></i>
                  </div>
                </div> 
                <input id="password" name="password" value="<?=$user->password?>" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="user" class="col-4 col-form-label">Email</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-address-book"></i>
                  </div>
                </div> 
                <input id="email" name="email" value="<?=$user->email?>" type="email" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="wisata" class="col-4 col-form-label">Tanggal Buat</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-street-view"></i>
                  </div>
                </div> 
                <input id="created_at" name="created_at" value="<?=$user->created_at?>"type="datetime-local" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="wisata" class="col-4 col-form-label">Login Terakhir</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-street-view"></i>
                  </div>
                </div> 
                <input id="last_login" name="last_login" value="<?=$user->last_login?>"type="datetime-local" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <?php
              $selected_1 = ($user->status=='Aktif')?"selected":"";
              $selected_2 = ($user->status=='Belum Aktif')?"selected":"";
              $selected_3 = ($user->role=='Administrator')?"selected":"";
              $selected_4 = ($user->role=='Public')?"selected":"";
            ?>
            <label for="status" class="col-4 col-form-label">Status</label> 
            <div class="col-8">
              <select id="status" name="status" class="custom-select">
                <option value="Aktif" <?=$selected_1?>>Aktif</option>
                <option value="Belum Aktif" <?=$selected_2?>>Belum Aktif</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="role" class="col-4 col-form-label">Role</label> 
            <div class="col-8">
              <select id="role" name="role" class="custom-select">
                <option value="Administrator" <?=$selected_3?>>Administrator</option>
                <option value="Public" <?=$selected_4?>>Public</option>
              </select>
            </div>
          </div> 
          
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        <?php echo form_close();?>
       
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