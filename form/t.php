<!DOCTYPE html>
<html>
<head>
    <title>Form Bilangan</title>
</head>
<body>
    <h2>Form Bilangan</h2>
    <form action="" method="POST">
        <label for="bilangan">Masukkan Bilangan:</label>
        <input type="number" name="bilangan" id="bilangan" required>
        <br><br>
        
        <label for="jenis_bilangan">Jenis Bilangan:</label>
        <select name="jenis_bilangan" id="jenis_bilangan">
            <option value="kelipatan_3">Kelipatan 3</option>
            <option value="ganjil">Ganjil</option>
            <option value="genap">Genap</option>
            <option value="besar_kecil">Besar ke Kecil</option>
        </select>
        <br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bilangan = intval($_POST['bilangan']);
    $jenis_bilangan = $_POST['jenis_bilangan'];

    switch ($jenis_bilangan) {
        case 'kelipatan_3':
            if ($bilangan % 3 == 0) {
                echo "Bilangan $bilangan adalah kelipatan 3.";
            } else {
                echo "Bilangan $bilangan bukan kelipatan 3.";
            }
            break;

        case 'ganjil':
            if ($bilangan % 2 != 0) {
                echo "Bilangan $bilangan adalah bilangan ganjil.";
            } else {
                echo "Bilangan $bilangan bukan bilangan ganjil.";
            }
            break;

        case 'genap':
            if ($bilangan % 2 == 0) {
                echo "Bilangan $bilangan adalah bilangan genap.";
            } else {
                echo "Bilangan $bilangan bukan bilangan genap.";
            }
            break;

        case 'besar_kecil':
            if ($bilangan >= 50) {
                echo "Bilangan $bilangan termasuk bilangan besar.";
            } else {
                echo "Bilangan $bilangan termasuk bilangan kecil.";
            }
            break;

        default:
            echo "Jenis bilangan tidak dikenali.";
            break;
    }
}
?>