<?php
// Deklarasi fungsi login dengan dua parameter: $email dan $password
function login($email, $password) {
    // Variabel yang menyimpan email dan password yang benar
    $stored_email = "user@example.com";
    $stored_password = "12345";

    // Mengecek apakah email dan password yang diinput sesuai dengan yang disimpan
    if ($email == $stored_email && $password == $stored_password) {
        // Jika email dan password benar, tampilkan pesan login berhasil
        echo "Login berhasil!<br>";
    } else {
        // Jika email atau password salah, tampilkan pesan error
        echo "Email atau password salah.<br>";
    }
}

// Memanggil fungsi login dengan input email dan password yang akan dicek
login("user@example.com", "12345");
?>
