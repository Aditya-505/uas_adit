<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Data diri calon pendaftar</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <select name="jurusan" id="">
                            <option value="Rekayasa perangkat lunak">Rekayasa perangkat lunak</option>
                            <option value="Teknik bisnis sepeda motor">Teknik bisnis sepeda motor</option>
                            <option value="Teknik kendaraan ringan otomotif">Teknik kendaraan ringan otomotif</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nama lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Jenis kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="laki-laki">laki-laki
                        <input type="radio" name="jk" value="perempuan">perempuan
                    </td>
                </tr>
                <tr>
                    <td>Tempat lahir</td>
                    <td>:</td>
                    <td><textarea name="tempat_lahir"></textarea></td>
                </tr>
                <tr>
                    <td>Tanggal lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_lahir" id=""></td>
                </tr>
                <tr>
                    <td>No HP</td>
                    <td>:</td>
                    <td><input type="text" name="no" id=""></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="text" name="email" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="simpan" name="simpan"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php

if (isset($_POST['simpan'])) {
    
    $jurusan = $_POST['jurusan'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tempat_lahir'];
    $no = $_POST['no'];
    $email = $_POST['email'];

    class pendaftaran{

        public function datadiri($jurusan,$nama,$jk,$tempat_lahir,$tanggal_lahir,$no,$email){

        echo "Jurusan : ".$jurusan."<br>";
        echo "Nama lengkap : ".$nama."<br>";
        echo "Jenis kelamin : ".$jk."<br>";
        echo "Tempat lahir : ".$tempat_lahir."<br>";
        echo "Tanggal lahir : ".$tanggal_lahir."<br>";
        echo "No hp : ".$no."<br>";
        echo "Email : ".$email."";
        }
    }

    $cetak = new pendaftaran();
    echo $cetak->datadiri($jurusan,$nama,$jk,$tempat_lahir,$tanggal_lahir,$no,$email);

}

