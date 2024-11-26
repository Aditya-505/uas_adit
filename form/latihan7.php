<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <center><h2>Form biodata diri</h2></center>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value=""></td>
                </tr>
                <tr>
                    <td>Tempat lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tempat_lahir" value=""></td>
                </tr>
                <tr>
                    <td>Tanggal lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_lahir" value=""></td>
                </tr>
                <tr>
                    <td>Jenis kelamin</td>
                    <td>:</td>
                    <td><input type="radio" name="jk" value="laki laki">laki laki
                        <input type="radio" name="jk" value="perempuan">perempuan
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" id=""></textarea></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama" id="">
                            <option value="islam">islam</option>
                            <option value="kristen">kristen</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pendidikan terakhir</td>
                    <td>:</td>
                    <td>
                        <select name="pendidikan_terakhir" id="">
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMK/SMA">SMK/SMA</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <select name="status" id="">
                            <option value="sudah menikah">sudah menikah</option>
                            <option value="belum menikah">belum menikah</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="hobi" value="Membaca">Membaca
                        <input type="radio" name="hobi" value="Menulis">Menulis
                        <input type="radio" name="hobi" value="Ngepush">Ngepush
                    </td>
                </tr>
                <tr>
                    <td>Cita cita</td>
                    <td>:</td>
                    <td>
                        <select name="cita_cita" id="">
                        <option value="progremer">progremer</option>
                        <option value="streamer">streamer</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kata kata bijak</td>
                    <td>:</td>
                    <td><textarea name="kata_kata" id=""></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="Proses" value="kirim"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php

if (isset($_POST['Proses'])) {
    
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
    $status = $_POST['status'];
    $hobi = $_POST['hobi'];
    $cita_cita = $_POST['cita_cita'];
    $kata_kata  = $_POST['kata_kata'];

    echo "<table align='center'>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>$nama</td>
    </tr>
    <tr>
        <td>Tempat lahir</td>
        <td>:</td>
        <td>$tempat_lahir</td>
    </tr>
    <tr>
        <td>Tanggal lahir</td>
        <td>:</td>
        <td>$tanggal_lahir</td>
    </tr>
    <tr>
        <td>Jenis kelamin</td>
        <td>:</td>
        <td>$jk</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>$alamat</td>
    </tr>
    <tr>
        <td>Agama</td>
        <td>:</td>
        <td>$agama</td>
    </tr>
    <tr>
        <td>pendidikan terakhir</td>
        <td>:</td>
        <td>$pendidikan_terakhir</td>
    </tr>
    <tr>
        <td>Status</td>
        <td>:</td>
        <td>$status</td>
    </tr>
    <tr>
        <td>Hobi</td>
        <td>:</td>
        <td>$hobi</td>
    </tr>
    <tr>
        <td>Cita cita</td>
        <td>:</td>
        <td>$cita_cita</td>
    </tr>
    <tr>
        <td>kata kata</td>
        <td>:</td>
        <td>$kata_kata</td>
    </tr>
</table>";
}
?>