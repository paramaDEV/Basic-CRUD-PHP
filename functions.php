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

    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $kelamin = htmlspecialchars($data["kelamin"]);
    $fakultas = htmlspecialchars($data["fakultas"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    $query = "INSERT INTO mahasiswa (nama,nim,kelamin,fakultas,jurusan) 
                values ('$nama','$nim','$kelamin','$fakultas','$jurusan')";

    mysqli_query($koneksi,$query);

    if(mysqli_affected_rows($koneksi)>0){
        echo "<script>alert('Berhasil');
        document.location.href='index.php';</script>";
        
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
        
    </script>";
    }
}


//Function update data
function updateData($data){
    global $koneksi;

    $id=$data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $kelamin = htmlspecialchars($data["kelamin"]);
    $fakultas = htmlspecialchars($data["fakultas"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    $query="UPDATE mahasiswa SET nama='$nama', nim='$nim', kelamin='$kelamin', fakultas='$fakultas', jurusan='$jurusan' where id=$id";

    mysqli_query($koneksi,$query);

    if(mysqli_affected_rows($koneksi)>0){
        echo "<script>alert('Berhasil');
        document.location.href='index.php';</script>";
        
    }else{
        echo "<script>alert('Gagal')</script>";
    }
}

?>