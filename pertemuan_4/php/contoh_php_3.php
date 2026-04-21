<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nama_barang = "Tas Kuliah";
    $harga = 300000;
    $jumlah = 3;
    $total = $harga * $jumlah;

    $bayar = 1000000;
    $kembalian = $bayar - $total;

    echo "---- Struk Pembelian ----<br>";
    echo "===================<br>";
    echo "Nama Barang: $nama_barang <br>";
    echo "Jumlah: $jumlah <br>";
    echo "Harga: $harga <br>";
    echo "Total Harga: $total <br>";
    echo "Uang Bayar: $bayar <br>";
    echo "Kembalian: $kembalian <br>";
    echo "===================<br>";
    echo "---- Terima Kasih ----<br>";
    ?>
</body>

</html>