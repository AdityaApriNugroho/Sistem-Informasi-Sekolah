<?php

include "koneksi.php";

if(isset($_POST['submit']))
{
    $nisn = $_POST['nisn'];
    $bahasa_inggris = $_POST['bahasa_inggris'];
    $matematika = $_POST['matematika'];
    $ipa = $_POST['ipa'];
    $bahasa_indo = $_POST['bahasa_indo'];
    $rata = ($bahasa_indo+$bahasa_inggris+$matematika+$ipa)/4;
   
    


    $sql ="INSERT INTO nilai VALUES (NULL,'$bahasa_inggris','$matematika','$ipa','$bahasa_indo','$rata','$nisn')";

    $result = mysqli_query($conn,$sql);

    if($result)
    {
        header("Location:index.php?msg=Penambahan Data Nilai berhasil");
    }
    else{
        echo "Failed: ".mysqli_error($conn);
    }


}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah Data Nilai</title>
</head>
<body>

    <nav>
        <li><h3>SISTEM SEKOLAH</h3></li>
    </nav>
    <div class="container">
        <div class="text-center mb-4">

            <h3>Tambah Data Nilai</h3>

        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method = "post" style="width:50vw; min-width : 300px;">
                <div class="row">
                    <div class="col">
                        <label class="form-label">NISN</label>
                        <input type="number" class="form-control" name="nisn" maxlength=9>

                    </div>
                </div>

                <div class="mt-3">
                    
                    <label class="form-label">BAHASA INGGRIS</label>
                    <input type="number" class="form-control" name="bahasa_inggris" maxlength=50>

                </div>

                <div class="mt-3">
                        <label class="form-label" >MATEMATIKA</label><br>
                        <input type="number" class="form-control" name="matematika" maxlength=9>

                </div>

                <div class="mt-3">
                    
                    <label class="form-label">IPA</label>
                    <input type="number" class="form-control" name="ipa" maxlength=50>

                </div>
                <div class="mt-3">
                    
                    <label class="form-label">BAHASA INDONESIA</label>
                    <input type="number" class="form-control" id="bahasa_indo" name="bahasa_indo" maxlength=9>

                </div>


                <div class="mt-3">
                    <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                    <a href="index.php" class="btn btn-danger">Batal</a>
                </div>

                
        
        
            </form>


        </div>


    </div>


    <!-- Boostrap bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>
