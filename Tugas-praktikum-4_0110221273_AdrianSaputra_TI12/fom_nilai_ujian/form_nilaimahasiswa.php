
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        #container{
            display : flex;
            justify-content : space-between;
            
            
        }
        #container-box1{
            flex : 1;
        }
        #container-box2{
            background-color : #00FA9A;
            border : 2px solid orange;
            width : 350px;
            height : 250px;
   
        }
        footer{
            margin-top : 10%;
            text-align : right;
            margin-right : 1%;
        }
    </style>
        
</head>
<body>
    <div class="bg-secondary p-1">
        <h1 class ="text-center text-white">Form Nilai Ujian</h1>

    </div>
    <div id="container" class="container mt-5">
        <div id="container-box1" class="container mt-5 p-1"> 
            <form method ="POST" action="form_nilaimahasiswa.php" class="ml-1 mt-3">
                <div class="form-group row">
                    <label for="nama_lengkap" class="col-3 col-form-label">NIM</label>
                    <div class="col-7">
                    <input id="nama_lengkap" name="nim" placeholder="NIM" type="number" class="form-control" size="30" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-3 col-form-label" for="select">Pilih MK</label> 
                    <div class="col-7">
                    <select id="mata_kuliah" name="matakuliah" class="custom-select" required="required">
                        <option value="Dasar - Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                        <option value="Basis Data I">Basis Data I</option>
                        <option value="Pemrograman Web">Pemrograman Web</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai" class="col-3 col-form-label">Nilai</label> 
                    <div class="col-7">
                    <input id="nilai" name="nilai" min="0" max="100" placeholder="Nilai" type="number" class="form-control" required="required">
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
            echo '<table>';
            require_once 'class_nilaimahasiswa.php';
            if(isset($_POST['proses'])){
                $proses = $_POST['proses'];
                $nim = $_POST['nim']; 
                $matakuliah = $_POST['matakuliah'];
                $nilai = $_POST['nilai'];
              
                $NilaiMahasiswa = new NilaiMahasiswa($matakuliah, $nilai, $nim);
                
            
              
            echo "<br/>";

            echo "<tr><td>NIM</td>"."<td>:</td>". "<td>" .$NilaiMahasiswa->nim. "</td></tr>";
            echo "<tr><td>Mata Kuliah</td>"."<td>:</td>". "<td>". $NilaiMahasiswa->matakuliah. "</td></tr>";
            echo "<tr><td>Nilai</td>"."<td>:</td>". "<td>" .$NilaiMahasiswa->nilai. "</td></tr>";
            echo "<tr><td>Grade</td>"."<td>:</td>". "<td>".$NilaiMahasiswa->grade(). "</td></tr>";
            echo "<tr><td>Status</td>"."<td>:</td>". "<td>" . $NilaiMahasiswa->hasil() . "</td></tr>";
            }else{
                echo '------------- From Belum Diisi -------------';
            }
            echo '</table>';
            ?>
    
           
        </div>
    </div>
    <footer>
        <h6>Develop by @Drians</h6>
    </footer>
</body>
</html>