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
            <h2>Forum bilangan</h2>
            <table>
                <tr>
                    <td>Masukan bilangan</td>
                    <td>:</td>
                    <td><input type="number" name="bilangan"></td>
                </tr>
                <tr>
                    <td>Jenis bilangan</td>
                    <td>:</td>
                    <td>
                        <select name="jenis" id="">
                            <option value="Kelipatan 3">Kelipatan 3</option>
                            <option value="Ganjil">Ganjil</option>
                            <option value="Genap">Genap</option>
                            <option value="Terbesar Ke Terkecil">Besar ke kecil</option>
                        </select>
                    </td>
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
    $bilangan = $_POST['bilangan'];
    $jenis = $_POST['jenis'];

    if ($jenis == "Terbesar Ke Terkecil" ) {
        for ($i=$bilangan; $i >= 1 ; $i--) { 
            echo "$i ";
        }
    } elseif ($jenis == "Ganjil") {
        for ($i=1; $i <= $bilangan ; $i+=2) { 
            echo "$i ";
        }
    } elseif ($jenis == "Genap") {
        for ($i=2; $i <= $bilangan ; $i+=2) { 
            echo "$i ";
        }
    } elseif ($jenis == "Kelipatan 3") {
        for ($i=3; $i <= $bilangan ; $i+=3) { 
            echo "$i ";
        }
    }
}
?>