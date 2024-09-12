<?php  
function login($email, $password) {
    $stored_email = "user@example.com";
    $stored_password = "12345";
    
    if ($email == $stored_email && $password == $stored_password) {
        echo "Login berhasil!<br>";
    } else {
        echo "Email atau password salah.<br>";
    }
}

// Memanggil fungsi login dengan email dan password
login("user@example.com", "12345"); 
?>
