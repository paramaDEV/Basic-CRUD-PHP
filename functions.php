<?php

// Koneksi database
$koneksi=mysqli_connect("localhost","root","","crud_dasar");

function showData($query){
    global $koneksi;
    
    $result = mysqli_query($koneksi,$query);
    $rows = [];

    while($row=mysqli_fetch_assoc($result)){
        $rows[]= $row;
    }
    return $rows;
}


?>