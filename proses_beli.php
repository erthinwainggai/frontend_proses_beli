<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengecek apakah data pembelian dikirim melalui metode POST

    // Mendapatkan nilai yang dikirimkan dari formulir
    $namaProduk = $_POST['nama_produk'];
    $hargaProduk = $_POST['harga_produk'];
    $jumlah = $_POST['jumlah'];

    // Melakukan pemrosesan atau tindakan lainnya sesuai kebutuhan
    // Misalnya, menyimpan data pembelian ke dalam database, mengirim email konfirmasi, dll.

    // Contoh tindakan sederhana, yaitu menampilkan pesan sukses
    echo "<h2>Pembelian Berhasil</h2>";
    echo "<p>Anda telah membeli $namaProduk sebanyak $jumlah dengan harga Rp " . number_format($hargaProduk * $jumlah, 0, ',', '.') . "</p>";
    echo "<p>Terima kasih atas pembelian Anda!</p>";
} else {
    // Jika data pembelian tidak dikirim melalui metode POST, tampilkan pesan kesalahan atau tindakan lainnya
    echo "Tidak ada data pembelian yang dikirimkan.";

}




?>
