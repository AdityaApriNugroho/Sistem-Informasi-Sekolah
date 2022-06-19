<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Nilai</title>
</head>
<body>
    <nav>
        <li><h3>SISTEM SEKOLAH</h3></li>
    </nav>

<ul>
  <li><a href="index.php">Data Nilai</a></li>
  <li><a class="active"  href="siswa.php">Data Siswa</a></li>
</ul>

<div style="margin-left:15%;padding:1px 16px;height:1000px;">
  <h2 style="text-align:center" >Data Nilai</h2>
  <table class="table table-hover text-center mt-3">
        <thead class="table-primary">
            <tr>
            <th scope="col">NISN</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Option</th>
            </tr>
        </thead>
        
        <tbody>

            <?php
                include "koneksi.php";

                $sql = "SELECT * FROM  siswa";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_assoc($result))
                {
                    ?>
                        <tr>
                        <td><?php echo $row['nisn'] ?></td>
                        <td><?php echo $row['nama'] ?></td>
                        <td><?php echo $row['kelas'] ?></td>
                        <td><?php echo $row['tempat_lahir'] ?></td>
                        <td><?php echo $row['tanggal_lahir'] ?></td>
                        <td>
                            <a href="edit_siswa.php?id=<?php echo $row['nisn'] ?>" class="link-secondary"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <a href="hapus_siswa.php?id=<?php echo $row['nisn'] ?>" class="link-secondary"><i class="fa-solid fa-trash fs-5 me-3"></i></a>
                        
                        </td>

                        
                        </tr>
                    <?php

                }
            ?>


           
        </tbody>
    </table>
    <a href="tambah_siswa.php"><button type="button" class="btn btn-success">Tambah Data</button></a>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</body>
</html>

