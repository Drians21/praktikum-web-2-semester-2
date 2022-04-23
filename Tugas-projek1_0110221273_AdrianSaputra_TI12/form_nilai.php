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
            <h1>FORM NILAI</h1>
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
                <h3 class="card-title">Praktikum 2 - Form Nilai</h3>

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
                  </div>
                    <div id="container" class="container mt-5">
                        <div id="container-box1" class="container mt-5 p-1"> 
                            <form method ="POST" action="form_nilai.php" class="ml-1 mt-3">
                                <div class="form-group row">
                                    <label for="nama_lengkap" class="col-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-5">
                                    <input id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" type="text" class="form-control" size="30" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-3 col-form-label" for="select">Mata Kuliah</label> 
                                    <div class="col-5">
                                    <select id="mata_kuliah" name="mata_kuliah" class="custom-select" required="required">
                                        <option value="Dasar - Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                                        <option value="Basis Data">Basis Data I</option>
                                        <option value="Pemrograman Web">Pemrograman Web</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nilai_uts" class="col-3 col-form-label">Nilai UTS</label> 
                                    <div class="col-5">
                                    <input id="nilai_uts" name="nilai_uts" min="0" max="100" placeholder="Nilai UTS" type="number" class="form-control" required="required">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="nilai_uas" class="col-3 col-form-label">Nilai UAS</label> 
                                    <div class="col-5">
                                    <input id="nilai_uas" name="nilai_uas" min="0" max="100" placeholder="Nilai UAS" type="number" class="form-control" required="required">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="nilai_tugas" class="col-3 col-form-label">Nilai Tugas/Praktikum</label> 
                                    <div class="col-5">
                                    <input id="nilai_tugas" name="nilai_tugas" min="0" max="100" placeholder="Nilai Tugas" type="number" class="form-control" required="required"   >
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="offset-3 col-1 mt-4">
                                    <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>
                            <br>
                        </div>
                        <div id="container-box2" class="mt-5 p-4 mr-5">
                            
                            <?php
                            echo "<table>";
                            if (isset($_POST['proses'])) {
                                $nama = $_POST['nama_lengkap'];
                                $mata_kuliah = $_POST['mata_kuliah'];
                                $nilai_uts = $_POST['nilai_uts'];
                                $nilai_uas = $_POST['nilai_uas'];
                                $nilai_tugas = $_POST['nilai_tugas'];
                    
                                $persentase_uts = 0.3 * $nilai_uts;
                                $persentase_uas = 0.35 * $nilai_uas;
                                $persentase_tugas = 0.35 * $nilai_tugas;
                                $nilai_total = $persentase_uts + $persentase_uas + $persentase_tugas;
                    
                                echo "<tr><td>Nama</td>"."<td> : </td>"."<td>".$nama."</td></tr>";
                                echo "<tr><td>Mata Kuliah</td>"."<td> : </td>" . "<td>". $mata_kuliah. "</td></tr>";
                                echo "<tr><td>Nilai UTS</td>"."<td> : </td>". "<td>". $nilai_uts. "</td></tr>";
                                echo "<tr><td>Nilai UAS</td>"."<td>:</td> " ."<td>". $nilai_uas. "</td></tr>";
                                echo "<tr><td>Nilai Tugas</td>"."<td>:</td> " ."<td>". $nilai_tugas. "</td></tr>";
                                echo "<tr><td>Nilai Total</td>"."<td>:</td>". "<td>". $nilai_total. "</td></tr>";
                    
                                $grade_total = '';
                                if ($nilai_total >=0 && $nilai_total <= 35) {
                                    $grade_total = 'E';
                                    echo "* Anda Tidak Lulus <br/><br/>";
                  
                                }
                                elseif($nilai_total >= 36 && $nilai_total <=55){
                                    $grade_total = 'D';
                                    echo "* Anda Tidak Lulus <br/><br/>";    
                                }
                                elseif($nilai_total >= 56 && $nilai_total <=69){
                                    $grade_total = 'C';
                                    echo "* Selamat, anda Lulus <br/><br/>";    
                                }
                                elseif($nilai_total >= 70 && $nilai_total <=84){
                                    $grade_total = 'B';   
                                    echo "* Selamat, anda Lulus <br/><br/>"; 
                                }
                                elseif($nilai_total >= 85 && $nilai_total <=100){
                                    $grade_total = 'A';  
                                    echo "* Selamat, anda Lulus <br/><br/>";  
                                }
                                else{
                                    $grade_total = 'I';    
                                }
                                echo "<tr><td>Grade</td>"."<td>:</td>"."<td>". $grade_total. "</td></tr>";
                    
                                switch ($grade_total) {
                                    case 'E':
                                        echo "<tr><td>Predikat"."<td>:</td>"."<td> Sangat Kurang</td></tr>";
                                        break;
                                    case 'D':
                                        echo "<tr><td>Predikat"."<td>:</td>"."<td>Kurang</td></tr>";
                                        break;
                                    case 'C':
                                        echo "<tr><td>Predikat"."<td>:</td>"."<td>Cukup</td></tr>";
                                        break;
                                    case 'B':
                                        echo "<tr><td>Predikat"."<td>:</td>"."<td>Memuaskan</td></tr>";
                                        break;
                                    case 'A':
                                        echo "<tr><td>Predikat"."<td>:</td>"."<td> Sangat Memuaskan</td></tr>";
                                        break;
                                    case 'I':
                                        echo "* Predikat tidak ditemukan <br/><br/>";
                                        break;
                                    
                                    default:
                                        echo "* Predikat tidak ditemukan <br/><br/>";
                                        break;
                                }
                            } else {
                                echo "--Form Belum Diisi--";
                            }
                            echo "</table>"
                            ?>
                           
                        </div>
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
<?php
    include_once 'footer.php';
   
?>