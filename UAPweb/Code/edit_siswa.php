<?php

include "koneksi.php";



            $id = $_GET['id'];
            $sql = "select * from siswa where nisn='$id'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);


if(isset($_POST['submit']))
{
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
   
    


    $sql ="UPDATE `siswa` SET `nisn`='$nisn',`nama`='$nama',`kelas`='$kelas',`tempat_lahir`='$tempat_lahir',`tanggal_lahir`='$tanggal_lahir' WHERE nisn = '$id'";

    $result = mysqli_query($conn,$sql);

    if($result)
    {
        header("Location:index.php?msg=Data Berhasil diubah");
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
    <title>Tambah Data Siswa</title>
</head>
<body>

    <nav>
        <li><h3>SISTEM SEKOLAH</h3></li>
    </nav>
    <div class="container">
        <div class="text-center mb-4">

            <h3>Tambah Data Siswa</h3>

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
                    
                    <label class="form-label">NAMA</label>
                    <input type="text" class="form-control" name="nama" maxlength=50>

                </div>

                <div class="mt-3">
                        <label class="form-label" >KELAS</label><br>
                        <input type="text" class="form-control" name="kelas" maxlength=9>

                </div>

                <div class="mt-3">
                    
                    <label class="form-label">TEMPAT LAHIR</label>
                    <input type="text" class="form-control" name="tempat_lahir" maxlength=50>

                </div>
                <div class="mt-3">
                    
                    <label class="form-label">TANGGAL LAHIR</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir">

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
