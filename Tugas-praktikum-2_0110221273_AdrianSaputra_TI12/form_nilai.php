<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        #container{
            display : flex;
            justify-content : space-between;
            background-color : thistle;
            border-radius : 50%;
            
        }
        #container-box1{
            flex : 1;
        }
        #container-box2{
            background-color : #00FA9A;
            border : 2px solid orange;
            /* width : 350px; */
            height : 330px;
            border-radius : 10%
        }
    </style>
        
</head>
<body>
    
    <div class="bg-secondary p-1">
        <h1 class ="text-center text-white">Form Nilai Siswa</h1>

    </div>
    <div id="container" class="container mt-5">
        <div id="container-box1" class="container mt-5 p-1"> 
            <form method ="POST" action="form_nilai.php" class="ml-1 mt-3">
                <div class="form-group row">
                    <label for="nama_lengkap" class="col-3 col-form-label">Nama Lengkap</label>
                    <div class="col-7">
                    <input id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" type="text" class="form-control" size="30" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-3 col-form-label" for="select">Mata Kuliah</label> 
                    <div class="col-7">
                    <select id="mata_kuliah" name="mata_kuliah" class="custom-select" required="required">
                        <option value="Dasar - Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                        <option value="Basis Data">Basis Data I</option>
                        <option value="Pemrograman Web">Pemrograman Web</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uts" class="col-3 col-form-label">Nilai UTS</label> 
                    <div class="col-7">
                    <input id="nilai_uts" name="nilai_uts" min="0" max="100" placeholder="Nilai UTS" type="number" class="form-control" required="required">
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="nilai_uas" class="col-3 col-form-label">Nilai UAS</label> 
                    <div class="col-7">
                    <input id="nilai_uas" name="nilai_uas" min="0" max="100" placeholder="Nilai UAS" type="number" class="form-control" required="required">
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="nilai_tugas" class="col-3 col-form-label">Nilai Tugas/Praktikum</label> 
                    <div class="col-7">
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
    <footer>
        <h6 class="text-right mr-2 mt-4">Develop by @Drians</h6>
    </footer>
</body>
</html>