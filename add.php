<?php
require 'functions.php';

if(isset($_POST["submit"])){
   addData($_POST);
}

?>

<html>
    <head>
        <title>Add Data</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="add-style.css">
    </head>
    <body>
        <nav>
            <h1>Add Data</h1>
        </nav>
        <form action="" method="POST">
            <table border=0 cellpadding="10px">
                <tr>
                    <td><label for="nama" >Nama :</label></td>
                    <td><input type="text" id="nama" name="nama" autocomplete="off" required></td>
                <tr>
                <tr>
                    <td><label for="nim" >NIM : </label></td>
                    <td><input type="text" id="nim" name="nim" autocomplete="off" required></td>
                <tr>
                <tr>
                    <td><label for="kelamin" >Kelamin : </label></td>
                    <td><select id="kelamin" name="kelamin" required>
                        <option>Laki-laki </option>
                        <option>Perempuan</option>
                    </select></td>
                <tr>
                <tr>
                    <td><label for="fakultas" >Fakultas : </label></td>
                    <td><input type="text" id="fakultas" name="fakultas" autocomplete="off" required></td>
                <tr>
                <tr>
                    <td><label for="jurusan" >Jurusan: </label></td>
                    <td><input type="text" id="jurusan" name="jurusan" autocomplete="off" required></td>
                <tr>
                <tr>
                    <td><button type="submit" name="submit">Submit</td>
                <tr>
            <table>
        </form>
    </body>
</html>