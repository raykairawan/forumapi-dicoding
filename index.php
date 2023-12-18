<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pemesanan Makanan</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_depan = $_POST["nama_depan"];
    $nama_belakang = $_POST["nama_belakang"];
    $email = $_POST["email"];
    $no_handphone = $_POST["no_handphone"];
    $alamat_pengiriman = $_POST["alamat_pengiriman"];
    $catatan = $_POST["catatan"];
    $makanan = $_POST["makanan"];
    $jumlah = $_POST["jumlah"];

    // Menyimpan data ke database
    require_once 'proses_input.php';

    echo "<h2>Pemesanan Diterima</h2>";
    echo "<p>Terima kasih, $nama_depan! Pesanan Anda untuk $jumlah porsi $makanan akan segera diproses.</p>";
} else {
?>

    <h2>Pesan Makanan</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="nama_depan">Nama Depan:</label>
        <input type="text" name="nama_depan" required><br>

        <label for="nama_belakang">Nama Belakang:</label>
        <input type="text" name="nama_belakang" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="no_handphone">No Handphone:</label>
        <input type="tel" name="no_handphone" required><br>

        <label for="alamat_pengiriman">Alamat Pengiriman:</label>
        <textarea name="alamat_pengiriman" required></textarea><br>

        <label for="catatan">Catatan:</label>
        <textarea name="catatan"></textarea><br>

        <label for="makanan">Makanan:</label>
        <select name="makanan" required>
            <option value="nasi_goreng">Nasi Goreng</option>
            <option value="mie_goreng">Mie Goreng</option>
            <option value="ayam_bakar">Ayam Bakar</option>
        </select>
        <br>

        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" required><br>

        <!-- Menambahkan gambar untuk setiap pilihan makanan -->
        <div class="food-images">
            <img src="images/nasi_goreng.jpg" alt="Nasi Goreng" class="food-image" id="img_nasi_goreng">
            <img src="images/mie_goreng.jpg" alt="Mie Goreng" class="food-image" id="img_mie_goreng">
            <img src="images/ayam_bakar.jpg" alt="Ayam Bakar" class="food-image" id="img_ayam_bakar">
        </div>

        <input type="submit" value="Pesan">
    </form>

<?php
}
?>

</body>
</html>
