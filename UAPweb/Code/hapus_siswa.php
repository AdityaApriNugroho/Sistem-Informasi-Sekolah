<?php

include "koneksi.php";


    $nisn = $_GET['id'];
    $sql = "DELETE FROM siswa WHERE nisn = '$nisn'";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        header("Location: index.php?msg=Data Terhapus");
    }
    else{
        echo "Error: ".mysqli_error($conn);
    }



?>