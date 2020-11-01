<?php

require 'functions.php';

$data = showData('SELECT * FROM mahasiswa');

?>

<html>
    <head>
        <title>CRUD Dasar</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <nav>
            <h1>Home</h1>
        </nav>
    </body>
    <div class="content">
        <h2>Data Mahasiswa</h2>
        <a href="add.php"><button class="add" name="add">Tambah Data</button></a>
        <table border=0 cellpadding="20px" cellspacing="0px">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Kelamin</th>
                <th>Fakultas</th>
                <th>Jurusan</th>
                <th>Actions</th>
            </tr>
            <?php 
            $number=1;
            foreach($data as $x):?>
            <tr>
                <td><?= $number; ?></td>
                <td><?= $x["nama"]?></td>
                <td><?= $x["nim"]?></td>
                <td><?= $x["kelamin"]?></td>
                <td><?= $x["fakultas"]?></td>
                <td><?= $x["jurusan"]?></td>
                <td>
                    <button class="edit">Edit</butto>
                    <a href="delete.php?id=<?=$x['id']?>"><button class="delete">Hapus</button></a>
                </td>
            </tr>
            <?php 
            $number++;
            endforeach; ?> 
        <table>
    </div>
</html>
