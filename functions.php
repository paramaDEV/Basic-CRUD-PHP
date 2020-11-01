<?php

// Koneksi database
$koneksi=mysqli_connect("localhost","root","","crud_dasar");

//Function tampil data
function showData($query){
    global $koneksi;
    
    $result = mysqli_query($koneksi,$query);
    $rows = [];

    while($row=mysqli_fetch_assoc($result)){
        $rows[]= $row;
    }
    return $rows;
}

//Function tambah data
function addData($data){
    global $koneksi;

    $nama = $data["nama"];
    $nim = $data["nim"];
    $kelamin = $data["kelamin"];
    $fakultas = $data["fakultas"];
    $jurusan = $data["jurusan"];

    $query = "INSERT INTO mahasiswa (nama,nim,kelamin,fakultas,jurusan) 
                values ('$nama','$nim','$kelamin','$fakultas','$jurusan')";

    mysqli_query($koneksi,$query);

    if(mysqli_affected_rows($koneksi)>0){
        echo "<script>alert('Berhasil')</script>";
    }else{
        echo "<script>alert('Gagal')</script>";
        
    }
}

//Function hapus data
function deleteData($id){
    global $koneksi;

    $query = "DELETE FROM mahasiswa WHERE id=$id";

    mysqli_query($koneksi,$query);

    if(mysqli_affected_rows($koneksi)>0){
        echo "<script>alert('Berhasil hapus');
            document.location.href='index.php';
        </script>";
    }else{
        echo "<script>alert('Gagal hapus');
        document.location.href='index.php';
    </script>";
    }
}

?>