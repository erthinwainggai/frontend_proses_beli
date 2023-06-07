

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stile.css">
    <title>Halaman Produk</title>
</head>
<body>
    <?php
    // Array data produk
    $produk = array(
        array(
            "gambar" => "gambar1.jpg",
            "nama" => "Rasa Chocolate",
            "harga" => 10.000
        ),
        array(
            "gambar" => "gambar2.jpg",
            "nama" => "Rasa Strawberry",
            "harga" => 10.000
        ),
        array(
            "gambar" => "gambar3.jpg",
            "nama" => "Rasa Green Tea",
            "harga" => 10.000
        ),
        array(
            "gambar" => "gambar4.jpg",
            "nama" => "Rasa Vanila Blue",
            "harga" => 10.000
        ),
        array(
            "gambar" => "gambar5.jpg",
            "nama" => "Rasa Taro",
            "harga" => 10.000
        ),
        array(
            "gambar" => "gambar6.jpg",
            "nama" => "Rasa Capucino",
            "harga" => 10.000
        ),
    );

    // Looping untuk menampilkan data produk
    foreach ($produk as $item) {
        echo '<div class="produk">';
        echo '<img src="' . $item["gambar"] . '" alt="' . $item["nama"] . '">';
        echo '<h2>' . $item["nama"] . '</h2>';
        echo '<p>Harga: Rp ' . number_format($item["harga"], 0, ',', '.') . '</p>';
        echo '<form method="post" action="proses_beli.php">';
        echo '<input type="hidden" name="nama_produk" value="' . $item["nama"] . '">';
        echo '<input type="hidden" name="harga_produk" value="' . $item["harga"] . '">';
        echo '<input type="number" name="jumlah" value="1" min="1">';
        echo '<input type="submit" name="beli" value="Beli">';
        echo '</form>';
        echo '</div>';
    }
    ?>

</body>
</html>