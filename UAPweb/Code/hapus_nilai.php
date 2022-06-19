<?php

include "koneksi.php";


    $id_nilai = $_GET['id'];
    $sql = "DELETE FROM nilai WHERE id_nilai = '$id_nilai'";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        header("Location: index.php?msg=Data Terhapus");
    }
    else{
        echo "Error: ".mysqli_error($conn);
    }



?>