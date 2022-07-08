
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=$judul?></h1>
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
          <h3 class="card-title"><?=$judul?></h3>

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
            $hidden = ['idedit'=>$tempat_wisata->id];

        ?>
        <?php echo form_open('tempatwisata/form_save','',$hidden);?>
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
                <input id="id" name="id" value="<?=$tempat_wisata->id?>" type="number" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl" class="col-4 col-form-label">Nama Tempat Wisata</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar-times-o"></i>
                  </div>
                </div> 
                <input id="nama" name="nama" value="<?=$tempat_wisata->nama?>" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl" class="col-4 col-form-label">Alamat</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar-times-o"></i>
                  </div>
                </div> 
                <textarea name="alamat" id="alamat" cols="70" rows="4"><?=$tempat_wisata->alamat?></textarea>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl" class="col-4 col-form-label">latlong</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar-times-o"></i>
                  </div>
                </div> 
                <input id="latlong" name="latlong" value="<?=$tempat_wisata->latlong?>" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl" class="col-4 col-form-label">Jenis Wisata ID</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar-times-o"></i>
                  </div>
                </div> 
                <input id="jenis_id" name="jenis_id" value="<?=$tempat_wisata->jenis_id?>" type="number" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl" class="col-4 col-form-label">Skor Rating</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar-times-o"></i>
                  </div>
                </div> 
                <input id="skor_rating" name="skor_rating" value="<?=$tempat_wisata->skor_rating?>" type="number" max="5" min="1" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl" class="col-4 col-form-label">Harga Tiket</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar-times-o"></i>
                  </div>
                </div> 
                <input id="harga_tiket" name="harga_tiket" value="<?=$tempat_wisata->harga_tiket?>" type="number" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl" class="col-4 col-form-label">Foto 1</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar-times-o"></i>
                  </div>
                </div> 
                <input id="foto1" name="foto1" value="<?=$tempat_wisata->foto1?>" type="file" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl" class="col-4 col-form-label">Foto 2</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar-times-o"></i>
                  </div>
                </div> 
                <input id="foto2" name="foto2" value="<?=$tempat_wisata->foto2?>" type="file" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl" class="col-4 col-form-label">Foto 3</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar-times-o"></i>
                  </div>
                </div> 
                <input id="foto3" name="foto3" value="<?=$tempat_wisata->foto3?>" type="file" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl" class="col-4 col-form-label">Kecamatan ID</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar-times-o"></i>
                  </div>
                </div> 
                <input id="kecamatan_id" name="kecamatan_id" value="<?=$tempat_wisata->kecamatan_id?>" type="number" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl" class="col-4 col-form-label">Website</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar-times-o"></i>
                  </div>
                </div> 
                <input id="website" name="website" value="<?=$tempat_wisata->website?>" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl" class="col-4 col-form-label">Fasilitas</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar-times-o"></i>
                  </div>
                </div> 
               <textarea name="fasilitas" id="fasilitas" cols="70" rows="4"><?=$tempat_wisata->fasilitas?></textarea>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary mt-3">Submit</button>
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