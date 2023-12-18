<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "2106062_AsyifaFauziah";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_depan = $_POST["nama_depan"];
    $nama_belakang = $_POST["nama_belakang"];
    $email = $_POST["email"];
    $no_handphone = $_POST["no_handphone"];
    $alamat_pengiriman = $_POST["alamat_pengiriman"];
    $catatan = $_POST["catatan"];
    $makanan = $_POST["makanan"];
    $jumlah = $_POST["jumlah"];
    
    $sql = "INSERT INTO pemesanan (nama_depan, nama_belakang, email, no_handphone, alamat_pengiriman, catatan, makanan, jumlah)
            VALUES ('$nama_depan', '$nama_belakang', '$email', '$no_handphone', '$alamat_pengiriman', '$catatan', '$makanan', $jumlah)";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Pemesanan Diterima</h2>";
        echo "<p>Terima kasih, $nama_depan! Pesanan Anda untuk $jumlah porsi $makanan telah disimpan.</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>