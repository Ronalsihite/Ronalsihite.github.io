<?php
// Konfigurasi koneksi ke database
$host = "localhost";
$user = "root";       // Default user XAMPP adalah 'root'
$pass = "";           // Default password XAMPP dikosongkan
$db   = "perpustakaan_digital"; // Ganti sesuai nama database kamu

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data dari formulir
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$hp     = $_POST['hp'];
$jk     = $_POST['jk'];
$alamat = $_POST['alamat'];
$pesan  = $_POST['pesan'];

// Query simpan
$sql = "INSERT INTO kontak (nama, email, hp, jk, alamat, pesan)
        VALUES ('$nama', '$email', '$hp', '$jk', '$alamat', '$pesan')";

// Eksekusi query
if (mysqli_query($conn, $sql)) {
    echo "<script>
            alert('Data berhasil dikirim!');
            window.location.href='formulir.html';
          </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
