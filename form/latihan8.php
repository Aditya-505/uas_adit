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
            <h2>Nilai</h2>
            <table>
                <tr>
                    <td>Nama lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama_lengkap"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <select name="jurusan">
                            <option value="Rekayasa perangkat lunak">Rekayasa perangkat lunak</option>
                            <option value="Teknik kendaraan ringan otomotif">Teknik kendaraan ringan otomotif</option>
                            <option value="Teknik bisnis sepada motor">Teknik bisnis sepada motor</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><b>Masukan lilai</b></td>
                </tr>
                <tr>
                    <td>Nilai harian</td>
                    <td>:</td>
                    <td><input type="number" name="nh">40%</td>
                </tr>
                <tr>
                    <td>Nilai sikap</td>
                    <td>:</td>
                    <td><input type="number" name="ns">20%</td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name="nuts">20%</td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number " name="nuas">20%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" value="proses"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>


<?php

if (isset($_POST['proses'])) {
    
    $nama_lengkap = $_POST['nama_lengkap'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $nh = $_POST['nh'];
    $ns = $_POST['ns'];
    $nuts = $_POST['nuts'];
    $nuas = $_POST['nuas'];

    $hasil = ($nh * 0.4) + ($ns * 0.2) + ($nuts * 0.2) + ($nuas * 0.2);

echo "
<center>
    <table>
    <tr>
        <td>Nama lengkap</td>
        <td>:</td>
        <td>$nama_lengkap</td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td>:</td>
        <td>$kelas</td>
    </tr>
    <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td>$jurusan</td>
    </tr>
    <tr>
        <td>Nilai harian</td>
        <td>:</td>
        <td>$nh</td>
    </tr>
    <tr>
        <td>Nilai sikap</td>
        <td>:</td>
        <td>$ns</td>
    </tr>
    <tr>
        <td>Nilai UTS</td>
        <td>:</td>
        <td>$nuts</td>
    </tr>
    <tr>
        <td>Nilai UAS</td>
        <td>:</td>
        <td>$nuas</td>
    </tr>
    <tr>
        <td>rata rata</td>
        <td>:</td>
        <td>$hasil</td>
    </tr>
    ";
    ?>
    <tr>
        <td>Keterangan</td>
        <td>:</td>
        <td>
<?php
    if ($hasil >= 75) {
        echo "anda lulus";
    } else {
        echo "anda tidak lulus";
    }
}

?>
                </td>
            </tr>
        </table>
</center>