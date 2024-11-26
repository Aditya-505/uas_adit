<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="POST">
        <center><h2>Biodata siswa</h2></center>
        <table>
            <tr>
                <td>Nama lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama_lengkap" value=""></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas" value=""></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="Proses" value="simpan"></td>
            </tr>
        </table>
        </form>
    </center>
</body>
</html>

<?php

if (isset($_POST['Proses'])) {
    
    $nama_lengkap = $_POST['nama_lengkap'];
    $kelas = $_POST['kelas'];

    echo "Nama lengkap : $nama_lengkap <br>";
    echo "Kelas : $kelas";
}