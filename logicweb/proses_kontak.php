<?php
include 'koneksi.php'; // Pastikan file 'koneksi.php' berisi koneksi database yang benar

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape input untuk menghindari SQL Injection
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Query untuk menyimpan data ke tabel kontak
    $sql = "INSERT INTO kontak (name, email, message) VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Menutup koneksi database
    mysqli_close($conn);
}
?>
