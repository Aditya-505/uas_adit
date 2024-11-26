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
            <h2>Seblak ceu iroh</h2>
            <table>
                <tr>
                    <td>Nama pembeli</td>
                    <td>:</td>
                    <td><input type="text" name="nama_pembeli" id=""></td>
                </tr>
                <tr>
                    <td>Tanggal beli</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_beli" id=""></td>
                </tr>
                <tr>
                    <td>Makanan</td>
                    <td>:</td>
                    <td>
                        <select name="makanan" id="">
                            <option value="seblak ceker">Seblak ceker</option>
                            <option value="cilok goang">Cilok goang</option>
                            <option value="cimol bojot">Cimol bojot</option>
                            <option value="makroni seduh">Makroni seduh</option>
                            <option value="pentol">Pentol</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Qty</td>
                    <td>:</td>
                    <td><input type="number" name="qty1" id=""></td>
                </tr>
                <tr>
                    <td>Minuman</td>
                    <td>:</td>
                    <td>
                        <select name="minuman" id="">
                            <option value="air mineral">Air mineral</option>
                            <option value="teh manis">Teh manis</option>
                            <option value="jus">Jus</option>
                            <option value="lemon tea">Lemon tea</option>
                            <option value="thai tea">Thai tea</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Qty</td>
                    <td>:</td>
                    <td><input type="number" name="qty2" id=""></td>
                </tr>
                <tr>
                    <td>Pembayaran</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="pembayaran" id="" value="Cash">Cash
                        <input type="radio" name="pembayaran" id="" value="Qris">Qris
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="simpan" name="proses"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php

if (isset($_POST['proses'])) {
    
    $nama_pembeli = $_POST['nama_pembeli'];
    $tgl_beli = $_POST['tgl_beli'];
    $makanan = $_POST['makanan'];
    $qty1 = $_POST['qty1'];
    $minuman = $_POST['minuman'];
    $qty2 = $_POST['qty2'];
    $pembayaran = $_POST['pembayaran'];

    $harga_makanan = [
        "seblak ceker" => 10000,
        "cilok goang" => 15000,
        "cimol bojot" => 30000,
        "makroni seduh" => 40000,
        "pentol" => 45000
    ];

    $harga_minuman = [
        "air mineral" => 5000,
        "teh manis" => 10000,
        "jus" => 15000,
        "lemon tea" => 20000,
        "thai tea" => 25000
    ];

    $total_makanan = $harga_makanan[$makanan] * $qty1;
    $total_minuman = $harga_minuman[$minuman] * $qty2;
    $total = $total_makanan + $total_minuman;

    $diskon = 0;
    if ($total > 50000) {
        $diskon = $total * 0.10;
    }

    $bonus_pembayaran = ($pembayaran == 'Qris') ? 20000 : 0;
    $total_pembayaran = $total - $diskon - $bonus_pembayaran;

    echo "Nama pelanggan : $nama_pembeli <br>";
    echo "Tanggal beli : $tgl_beli <br>";
    echo "Makanan : $makanan <br>";
    echo "Qty : $qty1 <br>";
    echo "Minuman : $minuman <br>";
    echo "Qty : $qty2 <br>";
    echo "pembayaran : $pembayaran <br>";
    echo "<hr>";
    echo "total : Rp " . number_format($total,0,',','.') . "<rb>";
    echo "<hr>";
    echo "Diskon 10% : Rp " . number_format($diskon,0,',','.') . "<br>";
    echo "Bonus pembayaran : Rp " . number_format($bonus_pembayaran,0,',','.') . "<br>"; 
    echo "<hr>";
    echo "Total pembayaran : Rp " . number_format($total_pembayaran,0,',','.') . "<br>";

}
?>

